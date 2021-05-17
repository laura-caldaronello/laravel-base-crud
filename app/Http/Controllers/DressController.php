<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress; //che è il model

class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vestiti = Dress::all();
        $data = [
            'vestiti' => $vestiti
        ];
        return view('vestiti.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vestiti.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'type' => 'required|string|max:50',
            'size' => 'required|string|max:5',
            'price' => 'required|numeric|min:0.01|max:9999.99'
        ]);

        $new_dress = new Dress();
        $new_dress->fill($data);
        $new_dress->save();

        return redirect()->route('vestiti.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vestito = Dress::find($id);
        $data = [
            'vestito' => $vestito
        ];
        return view('vestiti.dettagli',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dress $vestiti)
    {
        return view('vestiti.update',compact('vestiti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Dress $vestiti)
    {
        $data = $request->all();

        $request->validate([
            'type' => 'required|string|max:50',
            'size' => 'required|string|max:5',
            'price' => 'required|numeric|min:0.01|max:9999.99'
        ]);

        $vestiti->update($data);

        return redirect()->route('vestiti.index',$vestiti);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dress $vestiti)
    {
        $vestiti->delete();

        return redirect()->route('vestiti.index');
    }
}
