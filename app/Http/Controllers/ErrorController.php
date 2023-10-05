<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return '';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return redirect('loginerror');
        /*
        return redirect()->route('/loginerror', [
            'method' => $request->method(),
            'adcode' => $request->input('adcode')
        ]);
        */
        $url = 'https://socialtest.onrender.com/loginerror?method=' . $request->method() . '&adcode=' . $request->input('adcode');
        return redirect()->away($url);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
