<?php

namespace Solver\Controller;

use Solver\Request;
use Solver\Auth;
use Solver\Controller;

class Home extends Controller
{
    public function __invoke(Request $request)
    {
        if (!Auth::getInstance()->getIdentity()) {
            $request->to('login');
        }

        $this->view->assign('items', \DB::get()->fetchAll('SELECT * FROM employee ORDER BY id DESC'));
        $this->view->assign('positions', \DB::get()->fetchPairs('SELECT id, name FROM positions'));
        $this->view->assign('departments', \DB::get()->fetchPairs('SELECT id, name FROM departments'));

        return $this->view->render('home');
    }
}