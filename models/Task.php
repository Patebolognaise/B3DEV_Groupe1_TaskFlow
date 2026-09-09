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

    public static function mockTasks(): array
    {
        return [
            [
                'id_tache' => 1,
                'titre_tache' => 'Créer la maquette accueil',
                'description' => 'Réaliser les blocs de présentation, les CTA et la section de contact.',
                'date_de_creation' => '2026-09-02',
                'priorite' => 'Haute',
                'statut_tache' => 'En cours',
                'deadline' => '2026-09-12',
                'id_projet' => 1,
            ],
            [
                'id_tache' => 2,
                'titre_tache' => 'Mettre en place le menu',
                'description' => 'Ajouter le menu de navigation et les liens de sections.',
                'date_de_creation' => '2026-09-03',
                'priorite' => 'Moyenne',
                'statut_tache' => 'À faire',
                'deadline' => '2026-09-15',
                'id_projet' => 1,
            ],
            [
                'id_tache' => 3,
                'titre_tache' => 'Valider le formulaire de création',
                'description' => 'Tester le formulaire côté serveur et le rendu visuel.',
                'date_de_creation' => '2026-09-06',
                'priorite' => 'Haute',
                'statut_tache' => 'À faire',
                'deadline' => '2026-09-20',
                'id_projet' => 2,
            ],
        ];
    }
}
