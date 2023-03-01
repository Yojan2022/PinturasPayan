<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();  
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $rules = [
            "name" => "required|unique:products,name",
            "code" => "required|unique:products,code",
            "price" => "required",
            "discount" => "required",
            "category" => "required"
        ];
        $messages =[
            "name.required" => "se requiere dijitar el nombre",
            "name.unique" => "ya se encuentra en la base de datos",
            "code.required" => "se requiere dijitar el codigo",
            "code.unique" => "ya se encuentra en la base de datos",
            "price.required" => "se requiere dijitar el precio",
            "discount.required" => "se requiere dijitar el descuento",
            "categoria.required" => "se requiere dijitar la categoria"   

        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
         return back()->withErrors($validator)->with('message', 'se ha produccido un Error')->with('typealert', 'danger');  
        else:
            $product = new Product();
            $product->name =e($request->input('name'));
            $product->code=$request->input('code');
            $product->price=$request->input('price');
            $product->discount=$request->input('discount');
            $product->category=$request->input('category');
            $product->save();
            return redirect()->route('product.index');
            if ($product->save()) {
                $message = "Producto Agregado exitosamente.";
                $message_Crud_type = "success";
            }else{
                $message_crud = "se ha producido un error en el momento de registrar el producto.";
                $message_crud_type = "error";
            }
            return redirect(route('product.index'))->with('message',$message)->with('message_crud_type',$message_crud_type);
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::findOrFail($id);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::findOrFail($id);
        $product->name=$request->input('name');
        $product->code=$request->input('code');
        $product->price=$request->input('price');
        $product->discount=$request->input('discount');
        $product->category=$request->input('category');
        $product->save();
        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
