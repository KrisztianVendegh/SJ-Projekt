<?php

class Article
{
    private PDO $db;

    public function __construct(PDO $database)
    {
        $this->db = $database;
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM articles ORDER BY id ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getByModelKey(string $modelKey): ?array
    {
        $sql = "SELECT * FROM articles WHERE model_key = :model_key LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':model_key', $modelKey);
        $stmt->execute();

        $article = $stmt->fetch();

        return $article ?: null;
    }
}