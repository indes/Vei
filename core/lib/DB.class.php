<?php

/**
 * Created by PhpStorm.
 * User: li
 * Date: 2016-08-28
 * Time: 14:15
 */
namespace core\lib;

class DB
{
    static public $db;
    static function init(){
        require_once ('core/app/config/database.php');
        dump($dbconfig['dbcon']);
        $database = new $dbconfig['dbtype']($dbconfig['dbcon']);
        self::$db=$database;
    }
    static function select($table, $columns, $where=''){
        return self::$db->select($table, $columns, $where);
    }

    static function insert($table, $data){
        return self::$db->insert($table, $data);
    }

    static function query($sql){
        return self::$db->query($sql);
    }
    static function del($table,$where=''){
        return self::$db->delete($table,$where);
    }
    static function update($table,$data,$where=''){
        return self::$db->update($table,$data,$where);
    }
    static function get($table, $columns, $where){
        //返回一行数据
        return self::get($table, $columns, $where);
    }

}