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
    public static $table = 'news';

    public static function findAll() {
        $db = new Db();
        return $db->query('SELECT * FROM news', [] , static::class);
    }

//    public static function findById($id) {
//        $db = new Db();
//
//        $sql = 'SELECT * FROM news WHERE id = :id';
//        $params = [':id' => $id];
//
//        return $db->query($sql, $params, static::class);
//    }
}