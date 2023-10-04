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
        $url = 'http://localhost/SocialLoginTest/';
        if ($request->input('adcode') === 'google') {
            $url = 'http://localhost/SocialLoginTest/login';
        } elseif ($request->input('adcode') === 'mypage') {
            $url = 'http://localhost/SocialLoginTest/loginerror';
        }

        return redirect()->away($url, $status = 302);
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
