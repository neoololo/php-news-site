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
    public static $table = '';

    abstract public static function findAll();

    public static function findById($id) {
        $db = new \App\Db();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id = :id';
        $data = [':id' => $id];
        $class = static::class;

        return $db->query($sql, $data, $class);
    }
}