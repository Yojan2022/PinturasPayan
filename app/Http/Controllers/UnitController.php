<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Unit;
use Illuminate\Http\Request;

/**
 * Class UnitController
 * @package App\Http\Controllers
 */
class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = Unit::paginate();
        $categories = Category::paginate();

        return view('unit.index', compact('units','categories'))
            ->with('i', (request()->input('page', 1) - 1) * $units->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unit = new Unit();
        return view('unit.create', compact('unit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Unit::$rules);

        $unit = Unit::create($request->all());
        $categories = Category::paginate();
        $units = Unit::paginate();

        return view('category.index', compact('categories','units'))
            ->with('success', 'Unit created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unit = Unit::find($id);

        return view('unit.show', compact('unit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit = Unit::find($id);

        return view('unit.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Unit $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        request()->validate(Unit::$rules);
        $unit->update($request->all());
        $categories = Category::paginate();
        $units = Unit::paginate();
       
        return view('category.index', compact('units','categories'))
            ->with('success', 'Unit updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        
        $categories = Category::paginate();
        $units = Unit::paginate();   

        $unit = Unit::find($id)->delete();

        return view('category.index', compact('categories','units'))
            ->with('success', 'Category deleted successfully');
       
    }
}
