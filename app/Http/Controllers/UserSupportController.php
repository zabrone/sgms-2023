<?php

namespace App\Http\Controllers;

use App\Models\UserSupport;
use Illuminate\Http\Request;

class UserSupportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('usersupport.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserSupport $userSupport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserSupport $userSupport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserSupport $userSupport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserSupport $userSupport)
    {
        //
    }
}
