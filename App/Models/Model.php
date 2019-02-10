<?php
/**
 * Created by PhpStorm.
 * User: Neo
 * Date: 10.02.2019
 * Time: 14:36
 */

namespace App\Models;


abstract class Model
{
    public $id;

    abstract public static function findAll();
}