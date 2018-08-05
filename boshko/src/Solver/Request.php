<?php

namespace Solver;

class Request
{
    private $query = array();
    private $post = array();
    private $server = array();

    public function __construct(array $query, array $post, array $server)
    {
        $this->query = $query;
        $this->post = $post;
        $this->server = $server;
    }

    public static function fromGlobals()
    {
        return new self($_GET, $_POST, $_SERVER);
    }

    public function getParam($key, $default = null)
    {
        if (isset($this->post[$key])) {
            return $this->post[$key];
        } elseif (isset($this->query[$key])) {
            return $this->query[$key];
        }

        return $default;
    }

    public function getPost()
    {
        return $this->post;
    }

    public function isPost()
    {
        return $this->server['REQUEST_METHOD'] === 'POST';
    }

    public function to($controller)
    {
        $dir = pathinfo($this->server['SCRIPT_NAME'], PATHINFO_DIRNAME);
        $dir = str_replace('\\', '/', $dir);
        if ($dir === '/') {
            $dir = '';
        }
        header('Location: ' . $dir . '/?controller=' . $controller);
        exit(0);
    }
}