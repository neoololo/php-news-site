<?php
/**
 * Created by PhpStorm.
 * User: Neo
 * Date: 10.02.2019
 * Time: 15:13
 */

namespace App\View;


class View
{
    public $data = [];

    public function assign($name, $data) {
        $this->data[$name] = $data;
    }

    public function display($template) {
        include __DIR__ . '/../Templates/' . $template;
    }
}