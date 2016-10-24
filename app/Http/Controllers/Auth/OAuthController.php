<?php

namespace App\Http\Controllers\Auth;

use Authorizer;

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
}
