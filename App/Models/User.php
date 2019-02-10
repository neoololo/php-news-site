<?php
/**
 * Created by PhpStorm.
 * User: Neo
 * Date: 10.02.2019
 * Time: 14:31
 */

namespace App\Models;


class User extends Model
{
    public $name;
    public $email;

    public static function findAll() {
        $db = new \App\Db();

        return $db->query('SELECT * FROM users', static::class);
    }
}