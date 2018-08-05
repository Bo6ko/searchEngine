<?php

namespace Solver;

use Exception as CoreException;

class View
{
    public $content;

    public $template;

    public $parent;

    protected $__data = array();

    protected $paths = array();

    public function render($template)
    {
        $file = ltrim($template . '.phtml', '/\\');

        foreach ($this->paths as $path) {

            $filePath = $path . '/' . $file;

            if (is_file($filePath)) {

                $content = $this->evalFile($filePath);

                if ($this->parent !== null) {
                    $this->parent->content = $content;
                    $content = $this->parent->render($this->parent->template);
                }

                return $content;
            }
        }

        throw new CoreException('Template "' . $file . '" not found in ' . implode(', ', $this->paths), 500);
    }

    public function evalFile($__path)
    {
        $__obLevel = ob_get_level();

        ob_start();

        extract($this->__data);

        try {
            include $__path;
        } catch (\Exception $e) {
            while (ob_get_level() > $__obLevel) {
                ob_end_clean();
            }
            throw $e;
        }

        return ob_get_clean();
    }

    public function show($section)
    {
        return $this->content;
    }

    public function assign($key, $value)
    {
        $this->__data[$key] = $value;

        return $this;
    }

    public function extend($template)
    {
        $view = clone $this;

        $view->template = $template;

        $this->parent = $view;
    }

    public function addPath($path)
    {
        $path = rtrim($path, '/\\');

        $this->paths[$path] = $path;

        return $this;
    }

    public function __get($key)
    {
        return isset($this->__data[$key]) ? $this->__data[$key] : null;
    }

    public function __set($key, $value)
    {
        $this->__data[$key] = $value;
    }

    public function __isset($key)
    {
        return $this->__data[$key];
    }

    public function __unset($key)
    {
        if (isset($this->__data[$key])) {
            unset($this->__data[$key]);
        }
    }

    public function __toString()
    {
        return get_class($this);
    }
}