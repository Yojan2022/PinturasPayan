<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use App\Models\Supplier;
use Illuminate\Http\Request;

/**
 * Class BuyController
 * @package App\Http\Controllers
 */
class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buys = Buy::paginate();

        return view('buy.index', compact('buys'))
            ->with('i', (request()->input('page', 1) - 1) * $buys->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buy = new Buy();
        $suppliers = Supplier::pluck('nombre','id');
        return view('buy.create', compact('buy','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Buy::$rules);

        $buy = Buy::create($request->all());

        return redirect()->route('buys.index');
            //->with('success', 'Buy created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buy = Buy::find($id);

        return view('buy.show', compact('buy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buy = Buy::find($id);
        $suppliers = Supplier::pluck('nombre','id');
        return view('buy.edit', compact('buy','suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Buy $buy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buy $buy)
    {
        request()->validate(Buy::$rules);

        $buy->update($request->all());

        return redirect()->route('buys.index');
            //->with('success', 'Buy updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $buy = Buy::find($id)->delete();

        return redirect()->route('buys.index');
            //->with('success', 'Buy deleted successfully');
    }
}
