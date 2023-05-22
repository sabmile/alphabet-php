<?php

class View
{
    private string $name;
    private array $data;
    public function __construct(string $name, array $data)
    {
        $this->name = 'templates/' . $name . '.php';
        $this->data = $data;
    }

    public function init()
    {
        $name = $this->name;
        $result = '';

        if (!is_readable($name)) {
            return $result;
        }

        ob_start();
        extract($this->data);
        require $name;

        return ob_get_clean();
    }

}