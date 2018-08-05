<?php

namespace Solver\Controller;

use Solver\Request;
use Solver\Auth;

class Logout
{
    public function __invoke(Request $request)
    {
        Auth::getInstance()->clearIdentity();

        $request->to('login');
    }
}