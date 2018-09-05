<?php

namespace App\Http\Controllers;

use App\Alumno_v;
use App\Alumno;
use Illuminate\Http\Request;

class AlumnoVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos= Alumno::all();

       return view("alumnos.index",compact('alumnos'));
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
     * @param  \App\Alumno_v  $alumno_v
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno_v $alumno_v)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno_v  $alumno_v
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno_v $alumno_v)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno_v  $alumno_v
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno_v $alumno_v)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno_v  $alumno_v
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno_v $alumno_v)
    {
        //
    }
}
