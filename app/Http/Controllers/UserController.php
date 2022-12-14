<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\FlUser;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homeView()
    {
        return view('home');
    }

    public function signUpView()
    {
        return view('signUp');
    }

    public function adminView()
    {
        $lowonganData = Lowongan::all();
        return view('admin', compact('lowonganData'));
    }

    // public function store(Request $request)
    // {
    //     $PenggunaData = new Pengguna();

    //     $PenggunaData->bikeName = $request->nameValue;
    //     $PenggunaData->bikePrice = $request->priceValue;
    //     $PenggunaData->bikeDescription = $request->descValue;
    //     $PenggunaData->flUserId = $request->bikeBrand;

    //     $PenggunaData->save();

    //     return redirect('/');
    // }

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
