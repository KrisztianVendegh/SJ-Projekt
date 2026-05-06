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

    public function create(array $data): bool
    {
        $sql = "INSERT INTO articles 
                (model_key, title, subtitle, image, history, engine, design, production, body, motor, drive)
                VALUES 
                (:model_key, :title, :subtitle, :image, :history, :engine, :design, :production, :body, :motor, :drive)";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':model_key' => $data['model_key'],
            ':title' => $data['title'],
            ':subtitle' => $data['subtitle'],
            ':image' => $data['image'],
            ':history' => $data['history'],
            ':engine' => $data['engine'],
            ':design' => $data['design'],
            ':production' => $data['production'],
            ':body' => $data['body'],
            ':motor' => $data['motor'],
            ':drive' => $data['drive']
        ]);
    }
    public function getById(int $id): ?array
{
    $sql = "SELECT * FROM articles WHERE id = :id LIMIT 1";

    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $article = $stmt->fetch();

    return $article ?: null;
}

public function update(int $id, array $data): bool
{
    $sql = "UPDATE articles SET
                model_key = :model_key,
                title = :title,
                subtitle = :subtitle,
                image = :image,
                history = :history,
                engine = :engine,
                design = :design,
                production = :production,
                body = :body,
                motor = :motor,
                drive = :drive
            WHERE id = :id";

    $stmt = $this->db->prepare($sql);

    return $stmt->execute([
        ':model_key' => $data['model_key'],
        ':title' => $data['title'],
        ':subtitle' => $data['subtitle'],
        ':image' => $data['image'],
        ':history' => $data['history'],
        ':engine' => $data['engine'],
        ':design' => $data['design'],
        ':production' => $data['production'],
        ':body' => $data['body'],
        ':motor' => $data['motor'],
        ':drive' => $data['drive'],
        ':id' => $id
    ]);
}
public function delete(int $id): bool
{
    $sql = "DELETE FROM articles WHERE id = :id";

    $stmt = $this->db->prepare($sql);

    return $stmt->execute([
        ':id' => $id
    ]);
}
}