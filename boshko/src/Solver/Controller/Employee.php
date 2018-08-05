<?php

namespace Solver\Controller;

use Solver\Request;
use Solver\Controller;
use Solver\Auth;

class Employee extends Controller
{
    public function __invoke(Request $request)
    {
        if (!Auth::getInstance()->getIdentity()) {
            $request->to('login');
        }

        $action = $request->getParam('action');

        if (method_exists($this, $action)) {
            return $this->$action($request);
        }

        flash('Невалидно действие');
        $request->to('home');
    }

    public function edit(Request $request)
    {
        $id = (int) $request->getParam('id', 0);

        $employee = \DB::get()->fetch('SELECT * FROM employee WHERE id = ?', array($id));

        if ($employee === false) {
            flash('Невалиден служител');
            $request->to('home');
        }

        return $this->add($request, $employee);
    }

    public function add(Request $request, $employee = null)
    {
        $errors = array();
        $data = $employee === null ? array() : $employee;
        $positions = \DB::get()->fetchPairs('SELECT id, name FROM positions');
        $deparments = \DB::get()->fetchPairs('SELECT id, name FROM departments');

        if ($request->isPost()) {

            // изтриване на празните полета рекурсивно на $_POST данните
            $data = array_map_recursive('trim', $request->getPost());
            $data = array_map_recursive('strip_tags', $data);

            $data['salary'] = (float) str_replace(',', '.', $data['salary']);

            // валидация на $_POST данни
            foreach ($data as $k => $v) {
                if (empty($v)) {
                    $errors[$k] = 'Полето е задължително';
                } elseif ($k == 'position_id' && !isset($positions[$v])) {
                    $errors[$k] = 'Полето е задължително';
                } elseif ($k == 'department_id' && !isset($deparments[$v])) {
                    $errors[$k] = 'Полето е задължително';
                } elseif ($k == 'salary' && $data['salary'] <= 0) {
                    $errors[$k] = 'Въведете число по-голямо от 0';
                }
            }

            if (empty($errors)) {

                $forSave = array(
                    'first_name' => $data['first_name'],
                    'middle_name' => $data['middle_name'],
                    'last_name' => $data['last_name'],
                    'address' => $data['address'],
                    'phone' => $data['phone'],
                    'position_id' => $data['position_id'],
                    'department_id' => $data['department_id'],
                    'salary' => $data['salary'],
                    'created' => date('Y-m-d H:i:s')
                );

                if ($employee === null) {
                    \DB::get()->insert('employee', $forSave);
                } else {
                    unset($forSave['created']);
                    \DB::get()->update('employee', $forSave, array('id' => $employee['id']));
                }

                flash('Информацията е записана');
                $request->to('home');
            }
        }

        $this->view->assign('employee', $employee);
        $this->view->assign('errors', $errors);
        $this->view->assign('data', $data);
        $this->view->assign('positions', $positions);
        $this->view->assign('departments', $deparments);

        return $this->view->render('employee/add');
    }

    public function delete(Request $request)
    {
        $id = (int) $request->getParam('id', 0);

        $employee = \DB::get()->fetch('SELECT * FROM employee WHERE id = ?', array($id));

        if ($employee !== false) {
            \DB::get()->delete('employee', array('id' => $employee['id']));
        }

        flash('Информацията е записана');
        $request->to('home');
    }
}