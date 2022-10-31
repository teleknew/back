<?php

namespace Db;

use PDO;

/**
 * DbPdo class
 */
class DbPdo /*implements DbInterface*/
{
    /**
     * @var PDO
     */
    public $db;

    /**
     * Список экземпляров
     */
    //private static $instanceList = [];
    private static $instance;


    public static function getInstance(): self
    {

        //print_r ("Зашли в getInstance()\n<br><br>");
        if (self::$instance === null) {
            self::$instance = new self();
            //print_r ("Создали новый объект\n");
        }

        return self::$instance;
    }


    /**
     * Достаем экземпляр БД.
     * @param string|null $database Параметры соединения с БД.
     * @param bool $force_new Принудительно создать экземпляр коннекта.
     * @return DbPdo
     */

    /** Тут вместо getInstance используем конструктор*/

    /*public static function getInstance(?string $database = null, bool $force_new = false, string $connection_group = "default")
    {
        if (!$database) {
            $database = require('conf/db.php');
            $database = $database['db'];
        }
        if ($force_new) {
            return new static($database);
        } else if (!array_key_exists($connection_group, static::$instanceList) || !isset(static::$instanceList[$connection_group][$database])) {
            static::$instanceList[$connection_group][$database] = new static($database);
        }
        return static::$instanceList[$connection_group][$database];
    }*/

    public function __construct()
    {
        //print_r ("Зашли в конструктор DbPdo()\n<br><br>");
        /** @var string название базы данных */
        $dbname = 'new';
        /** @var string имя пользователя */
        $username = 'admin';
        /** @var string пароль пользователя */
        $password = 'root';
        /** @var string адрес базы данных */
        $host = '127.0.0.1';
        /** @var int порт доступа к базе данных */
        $port = 5432;
        /** @var array дополнительные опции соединения с базой данных */
        $options = [];

        /** @var string формируем dsn для подключения */
        $dsn = "pgsql:host=".$host.";port=".$port.";dbname=".$dbname;

        try {
            /** @var PDO подключение к базе данных */
            $this->db = new PDO($dsn, $username, $password, $options);
            //print_r("Подключились!");
        }
        catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

        /*$this->db = new PDO($database);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);*/
    }

    private function __clone()
    {
    }

    /**
     * Отправляем запрос БД.
     * Получаем сырой запрос для БД.
     * @return \PDO\PDOStatement|bool
     */
    public function prepare($query)
    {
        return $this->db->prepare($query);
    }

    /**
     * Транзакции.
     * @return bool
     * @throws \PDO\PDOException
     */
    public function beginTransaction()
    {
        return $this->db->beginTransaction();
    }

    /**
     * @return bool
     * @throws \PDO\PDOException
     */
    public function rollback()
    {
        return $this->db->rollback();
    }

    /**
     * @return bool
     * @throws \PDO\PDOException
     */
    public function commit()
    {
        return $this->db->commit();
    }

    /**
     * @return bool
     * @throws \PDO\PDOException
     */
    public function inTransaction()
    {
        return $this->db->inTransaction();
    }


    /**
     * Отправляем запрос БД.
     * Получаем сырой ответ БД.
     * @return \PDO\PDOStatement|bool
     */
    public function query(string $query, array $params = [])
    {
        $prepare = $this->db->prepare($query);
        $prepare->execute($params);

        return $prepare;
    }

    /**
     * Отправляем запрос БД.
     * Получаем ответ БД в виде массива.
     *
     * @return array|mixed
     * @throws \PDO\PDOException
     */
    public function queryFetched(string $query, array $params = [], int $fetch_type = PDO::FETCH_ASSOC, bool $nsi_style = false): array
    {

        $result_stmt = $this->query($query, $params);
        if($nsi_style)
        {
            $result = ['header'=>[], 'data'=>[]];
            $cols_count = $result_stmt->columnCount();

            for($colNum=0; $colNum < $cols_count; $colNum++)
            {
                $colMeta = $result_stmt->getColumnMeta($colNum);
                $result['header'][$colMeta['name']] = $colNum;
            }
            $result['data'] = $result_stmt->fetchAll(\PDO::FETCH_NUM);
            return $result;

        }
        else
        {
            return $result_stmt->fetchAll($fetch_type);
        }
    }

    /**
     * Последняя ошибка.
     */
    public function lastError(): string
    {
        return join(" ", $this->db->errorInfo());
    }

    /**
     * Последний id.
     */
    public function lastId(?string $seqname = null): string
    {
        $stmt = $seqname ? $this->query('SELECT CURRVAL(:seq);', ['seq' => $seqname]) : $this->query('SELECT LASTVAL();');

        return $stmt ? $stmt->fetch(PDO::FETCH_COLUMN) : false;
    }
}
