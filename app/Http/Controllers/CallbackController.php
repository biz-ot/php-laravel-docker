<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallbackController extends Controller
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
        $url = 'https://socialtest.onrender.com/';
        if ($request->input('adcode') === 'google') {
            $url = 'https://www.google.com/';
        } elseif ($request->input('adcode') === 'mypage') {
            $url = 'https://socialtest.onrender.com/mypage';
        }

        return response()->json(
            [
                'status' => 200,
                'redirect_url' => $url,
            ]
        );
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
