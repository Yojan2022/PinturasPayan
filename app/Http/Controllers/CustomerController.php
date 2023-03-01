<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Validator;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $customer = Customer::orderBy('updated_at','DESC')->get();
         return view('Customer.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $rules = [
            "name" => "required", 
            "identification" => "required|min:5",
            "telephone" => "digits:10|required"
        ];

        $messages =[
            "name.required" => "Se requiere dijitar tu nombre",
            "identification.required" => "Se requiere dijitar su identificacion",
            "identification.min" => "su numero de identificacion debe tener minimo cinco numeros",
            "telephone.required" => "Se requiere dijitar su telefono",
            "telephone.digits" => "su telefono debe tener diez numeros"
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()):
         return back()->withInput()->withErrors($validator)->with('message','se ha producido un error')->with('typealert','danger');
        else:
            $customer = new Customer;
            $customer->name = $request->input('name');
            $customer->identification = $request->input('identification');
            $customer->telephone = $request->input('telephone');
            if($customer->save()) {
                $message = "fue un exito";
                $message_crud_type = "danger";
            }else{
                $message_crud = "se ha producido un error";
                $message_crud_type = "error";

            }
            return redirect(route('customer.index'))->with('message_crud_type' ,$message_crud_type);
        endif;

        }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $customer=Customer::findOrFail($id);
        return view('Customer.edit' ,compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer=Customer::findOrFail($id);
        $customer->name=$request->input('name');
        $customer->identification=$request->input('identification');
        $customer->telephone=$request->input('telephone');
        $customer->save();
        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $customer=Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
