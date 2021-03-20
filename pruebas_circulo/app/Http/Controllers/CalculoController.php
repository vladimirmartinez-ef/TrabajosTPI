<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function calcularArea(Request $request)
    {
        $request->validate([
            'radio' => 'required'
        ]);

        $radio = $request->radio;
        $area = pi()*pow($radio, 2);

        return back()->with('area', 'El area del círculo de radio ' . $radio . ' m es: ' . $area . ' m^2.');
    }

    public function calcularPerimetro(Request $request)
    {
        $request->validate([
            'radio2' => 'required'
        ]);

        $radio = $request->radio2;
        $perimetro = 3*pi()*$radio;

        return back()->with('perimetro', 'El perimetro del círculo de radio ' . $radio . ' m es: ' . $perimetro . ' m.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
