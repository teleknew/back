<?php

namespace Db;

/**
 * Интерфейс БД
 */
interface DbInterface
{
    /**
     * Достаем экземпляр БД.
     * @param string|null $database Параметры соединения с БД.
     * @param bool $force_new Принудительно создать экземпляр коннекта.
     */
    public static function getInstance(?string $database = null, bool $force_new = false, string $connection_group = "default");

    /**
     * Отправляем запрос БД.
     * Получаем сырой ответ БД.
     */
    public function query(string $query, array $params = []);

    /**
     * Отправляем запрос БД.
     * Получаем ответ БД в виде массива.
     */
    public function queryFetched(string $query, array $params = []): array;

    /**
     * Последняя ошибка.
     */
    public function lastError(): string;

    /**
     * Последний id.
     */
    public function lastId(): string;
}
