function toggleForm() {
    var form = document.querySelector('.modal-addUser');
    if (form) {
        if (form.style.display === 'none' || form.style.display === '') {
            form.style.display = 'block';
        } else {
            form.style.display = 'none';
        }
    }
}

function updateTaskCounters() {
    // 1. Compteur sur la page des tâches (views/tasks/index.php)
    const taskCounter = document.getElementById('task-counter');
    if (taskCounter) {
        const taskRows = document.querySelectorAll('.list-table tbody tr');
        if (taskRows.length > 0) {
            const count = taskRows.length;
            taskCounter.textContent = `${count} tâche${count > 1 ? 's' : ''}`;
        }
    }

    // 2. Compteur sur la page "Voir projet" (views/projects/show.php)
    const projectTaskCounter = document.getElementById('project-task-counter');
    if (projectTaskCounter) {
        const taskItems = document.querySelectorAll('.task-list > li');
        if (taskItems.length > 0) {
            const count = taskItems.length;
            projectTaskCounter.textContent = `${count} tâche${count > 1 ? 's' : ''}`;
        }
    }
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', updateTaskCounters);
} else {
    updateTaskCounters();
}
