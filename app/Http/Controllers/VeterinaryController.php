<?php

namespace App\Http\Controllers;

use App\Veterinary;
use Illuminate\Http\Request;

use Session;

class VeterinaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $veterinaries=Veterinary::all();
        return view('backoffice.veterinary.index',compact('veterinaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.veterinary.create');
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
     * @param  \App\Veterinary  $veterinary
     * @return \Illuminate\Http\Response
     */
    public function show(Veterinary $veterinary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Veterinary  $veterinary
     * @return \Illuminate\Http\Response
     */
    public function edit(Veterinary $veterinary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Veterinary  $veterinary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Veterinary $veterinary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Veterinary  $veterinary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Veterinary $veterinary)
    {
        //
    }
}
