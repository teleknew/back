<?php
namespace Core;

use Db\DbPdo;

/**
 * Класс DbModel
 */
abstract class DbModel/* extends Model*/
{
    /**
     * @var DbPdo
     */
    public $db;

    /**
     * Инициализация модели
     * @param ?string $dbConn Параметры соединения с БД
     */
    public function __construct(/*?string $dbConn = null*/) {
        //$this->db = $dbConn ? DbPdo::getInstance($dbConn) : DbPdo::getInstance();
        /** Тут надо вызвать не getInstance а констуктор DbPdo */
        //$this->db =DbPdo::getInstance();
        print_r("Зашли в конструктор DbModel\n");
        print_r("ии\n");
        try {
            print_r ("Пробуем сделать new DbPdo()\n");
            $this->db = new DbPdo();
            print_r ("сделали new DbPdo()");
        }
        catch (\Exception $e){
            print_r ("Мы в Catch)\n");
            print_r($e->getMessage()."\n");
        }

    }
}