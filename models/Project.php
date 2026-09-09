<?php

class Project
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll(): array
    {
        try {
            $stmt = $this->pdo->query('SELECT * FROM Projet ORDER BY id_projet DESC');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return self::mockProjects();
        }
    }

    public function findById(int $id): ?array
    {
        try {
            $stmt = $this->pdo->prepare('SELECT * FROM Projet WHERE id_projet = :id');
            $stmt->execute(['id' => $id]);
            $project = $stmt->fetch(PDO::FETCH_ASSOC);

            return $project ?: null;
        } catch (PDOException $e) {
            foreach (self::mockProjects() as $project) {
                if ((int) $project['id_projet'] === $id) {
                    return $project;
                }
            }

            return null;
        }
    }

    public function create(array $data): bool
    {
        $titre = trim((string) ($data['titre_projet'] ?? ''));
        $description = trim((string) ($data['description'] ?? ''));
        $statut = trim((string) ($data['statut_projet'] ?? 'En cours'));
        $date = trim((string) ($data['date_'] ?? date('Y-m-d')));

        if ($titre === '') {
            return false;
        }

        try {
            $stmt = $this->pdo->prepare(
                'INSERT INTO Projet (titre_projet, description, date_, statut_projet) VALUES (:titre, :description, :date_, :statut)'
            );

            return $stmt->execute([
                'titre' => $titre,
                'description' => $description,
                'date_' => $date,
                'statut' => $statut,
            ]);
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function mockProjects(): array
    {
        return [
            [
                'id_projet' => 1,
                'titre_projet' => 'Refonte du site vitrine',
                'description' => 'Mise à jour du design et des contenus de la page d’accueil.',
                'date_' => '2026-09-01',
                'statut_projet' => 'En cours',
            ],
            [
                'id_projet' => 2,
                'titre_projet' => 'Application de gestion des tâches',
                'description' => 'Développement d’une interface pour suivre les tâches et projets.',
                'date_' => '2026-09-05',
                'statut_projet' => 'À venir',
            ],
        ];
    }
}
