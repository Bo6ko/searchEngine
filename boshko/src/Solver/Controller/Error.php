<?php

namespace Solver\Controller;

use Solver\Request;
use Solver\Controller;

class Error extends Controller
{
    public function __invoke(Request $request, $error = null)
    {
        $this->view->assign('error', ($error === null ? 'Невалидна заявка' : $error));

        return $this->view->render('error');
    }
}