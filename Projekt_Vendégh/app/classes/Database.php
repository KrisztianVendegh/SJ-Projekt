<?php

class Database
{
    private string $host = 'localhost';
    private string $dbName = 'porsche_blog';
    private string $username = 'root';
    private string $password = '';
    private ?PDO $connection = null;

    public function connect(): PDO
    {
        if ($this->connection === null) {
            try {
                $dsn = "mysql:host={$this->host};dbname={$this->dbName};charset=utf8mb4";

                $this->connection = new PDO($dsn, $this->username, $this->password);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            } catch (PDOException $e) {
                die("Chyba pripojenia k databáze: " . $e->getMessage());
            }
        }

        return $this->connection;
    }
}