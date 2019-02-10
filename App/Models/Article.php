<?php
/**
 * Created by PhpStorm.
 * User: Neo
 * Date: 09.02.2019
 * Time: 22:50
 */

namespace App\Models;

use App\Db;

class Article extends Model
{
    public $title;
    public $content;

    public static function findAll() {
        $db = new Db();
        return $db->query('SELECT * FROM news', static::class);
    }
}