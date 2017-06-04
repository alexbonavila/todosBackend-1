<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GcmTokensController extends Controller
{
    /**
     * Add gcm token to user.
     * @param Request $request
     * @return array
     */
    public function addToken(Request $request)
    {
        $user = $request->user();
        $user->gcmTokens()->firstOrCreate([
            'registration_id' => $request->input('registration_id')
        ]);
        return ['status' => 'Token saved!'];
    }
}
