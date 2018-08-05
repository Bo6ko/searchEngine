<?php

namespace Solver\Controller;

use Solver\Request;
use Solver\Auth;
use Solver\Controller;

class Login extends Controller
{
    public function __invoke(Request $request)
    {
        if (Auth::getInstance()->getIdentity()) {
            $request->to('home');
        }

        $errors = array();
        $data = array();

        if ($request->isPost()) {

            $data = array_map_recursive('trim', $request->getPost());

            if (empty($data['username'])) {
                $errors['username'] = 'Полето е задължително';
            } elseif (!filter_var($data['username'], FILTER_VALIDATE_EMAIL)) {
                $errors['username'] = 'Невалиден и-мейл';
            }

            if (empty($data['password'])) {
                $errors['password'] = 'Полето е задължително';
            }

            if (empty($errors)) {

                $identity = \DB::get()->fetch('SELECT id, name, email FROM users WHERE email = ? AND password = ?', array($data['username'], sha1($data['password'])));

                if ($identity !== false) {
                    Auth::getInstance()->setIdentity($identity);
                    $request->to('home');
                } else {
                    $errors['login'] = 'Невалидни данни';
                }
            }
        }

        $this->view->assign('errors', $errors);
        $this->view->assign('data', $data);

        return $this->view->render('login');
    }
}