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
        return '';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $provider_user_id = '';
        $provider_user_name = '';
        $provider_user_email = '';
        $provider_user_gender = '';
        $provider_id = '';
        $adcode = '';
        $status = '';
        $provider_row = '';

        $url = 'https://www.socialloginttest.xyz/';
        if ($request->input('adcode') === 'google') {
            $url = 'https://www.google.com/';
        } elseif ($request->input('adcode') === 'mypage') {
            $url = 'https://www.socialloginttest.xyz/mypage';

            $provider_user_id = $request->input('provider_user_id');
            $provider_user_name = $request->input('provider_user_name');
            $provider_user_email = $request->input('provider_user_email');
            $provider_user_gender = $request->input('provider_user_gender');
            $provider_id = $request->input('provider_id');
            $adcode = $request->input('adcode');
            $status = $request->input('status');
            $provider_row = $request->input('provider_row');
        }

        $minutes = 1;
        return response()->json(
            [
                'status' => 200,
                'redirect_url' => $url,
            ]
        );
            /*->cookie('provider_user_id', $provider_user_id, $minutes
        )->cookie('provider_user_name', $provider_user_name, $minutes
        )->cookie('provider_user_email', $provider_user_email, $minutes
        )->cookie('provider_user_gender', $provider_user_gender, $minutes
        )->cookie('provider_id', $provider_id, $minutes
        )->cookie('adcode', $adcode, $minutes
        )->cookie('status', $status, $minutes
        )->cookie('provider_row', $provider_row, $minutes
        );*/
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
