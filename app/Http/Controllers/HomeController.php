<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RemoteAuthPhp\Client;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /** @var Client */
    private $remoteAuth;

    public function __construct(Client $remoteAuth)
    {
        $this->remoteAuth = $remoteAuth;
    }

    public function show()
    {
        return view('welcome', [
            'user' => Auth::user(),
            'applicationMembers' => $this->remoteAuth->applicationMembersByToken(Auth::user())
        ]);
    }
}
