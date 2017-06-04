<?php

namespace App\Http\Controllers;

use App\GcmToken;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class GcmTokensController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
