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
        if (env('APP_ENV') == 'local') {
            $url = 'http://localhost/SocialTest/';
        } else {
            $url = 'https://www.socialloginttest.xyz/';
        }

        if ($request->input('adcode') === 'google') {
            $url = 'https://www.google.com/';
        } elseif ($request->input('adcode') === 'mypage') {
            $url .= 'mypage';
        }

        $response = response()->json(
            [
                'status' => 200,
                'redirect_url' => $url,
            ]
        );

        if ($request->input('adcode') === 'mypage') {
            $minutes = 1;
            Cookie::queue('provider_user_id', $request->input('provider_user_id'), $minutes);
            Cookie::queue('provider_user_name', $request->input('provider_user_name'), $minutes);
            Cookie::queue('provider_user_email', $request->input('provider_user_email'), $minutes);
            Cookie::queue('provider_user_gender', $request->input('provider_user_gender'), $minutes);
            Cookie::queue('provider_id', $request->input('provider_id'), $minutes);
            Cookie::queue('adcode', $request->input('adcode'), $minutes);
            Cookie::queue('status', $request->input('status'), $minutes);
            Cookie::queue('provider_row', $request->input('provider_row'), $minutes);
        }

        return $response;
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
