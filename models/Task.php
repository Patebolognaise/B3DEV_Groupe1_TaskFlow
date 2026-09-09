<?php

class Task
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll(): array
    {
        try {
            $stmt = $this->pdo->query('SELECT * FROM Tache ORDER BY deadline ASC, id_tache DESC');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return self::mockTasks();
        }
    }

    public function getByProjectId(int $projectId): array
    {
        try {
            $stmt = $this->pdo->prepare('SELECT * FROM Tache WHERE id_projet = :id_projet ORDER BY deadline ASC');
            $stmt->execute(['id_projet' => $projectId]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $tasks = self::mockTasks();
            return array_values(array_filter($tasks, fn ($task) => (int) $task['id_projet'] === $projectId));
        }
    }

    public function create(array $data): bool
    {
        $titre = trim((string) ($data['titre_tache'] ?? ''));
        $projectId = (int) ($data['id_projet'] ?? 0);
        $description = trim((string) ($data['description'] ?? ''));
        $priorite = trim((string) ($data['priorite'] ?? 'Moyenne'));
        $statut = trim((string) ($data['statut_tache'] ?? 'À faire'));
        $deadline = trim((string) ($data['deadline'] ?? ''));

        if ($titre === '' || $projectId <= 0) {
            return false;
        }

        try {
            $stmt = $this->pdo->prepare(
                'INSERT INTO Tache (titre_tache, description, date_de_creation, priorite, statut_tache, deadline, id_projet) VALUES (:titre, :description, :date_creation, :priorite, :statut, :deadline, :id_projet)'
            );

            return $stmt->execute([
                'titre' => $titre,
                'description' => $description,
                'date_creation' => date('Y-m-d'),
                'priorite' => $priorite,
                'statut' => $statut,
                'deadline' => $deadline !== '' ? $deadline : null,
                'id_projet' => $projectId,
            ]);
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function GetTaskById($id){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM Tache WHERE id_tache = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function UpdateTask($id, $titre, $description, $priorite, $statut, $deadline, $id_projet){
        global $pdo;
        $stmt = $pdo->prepare("UPDATE Tache SET titre_tache = :titre, description = :description, priorite = :priorite, statut_tache = :statut, deadline = :deadline, id_projet = :id_projet WHERE id_tache = :id");
        $stmt->execute(['id' => $id, 'titre' => $titre, 'description' => $description, 'priorite' => $priorite, 'statut' => $statut, 'deadline' => $deadline, 'id_projet' => $id_projet]);
    }

    public static function DeleteTask($id){
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM Tache WHERE id_tache = :id");
        $stmt->execute(['id' => $id]);
    }
}
