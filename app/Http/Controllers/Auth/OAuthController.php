<?php

namespace App\Http\Controllers\Auth;

use Authorizer;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Dingo\Api\Routing\Helpers;

/**
 * Class OAuthController
 * @package App\Http\Controllers\Auth
 */
class OAuthController extends Controller
{
    use Helpers;

    /**
     * Issue an access token
     * @return mixed
     */
    public function authorizeClient()
    {
        return $this->response->array(Authorizer::issueAccessToken());
    }

    public function authorizePassword($username, $password)
    {
        $credentials = [
            'email'    => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }
}
