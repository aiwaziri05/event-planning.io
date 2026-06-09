<?php
// src/includes/functions.php

/**
 * Get dashboard statistics
 */
function getDashboardStats($pdo) {
    if (!$pdo) return [
        'total_events' => 12,
        'total_guests' => 450,
        'total_budget' => 25000,
        'total_payments' => 15500
    ];

    $stats = [];

    // Total Events
    $stmt = $pdo->query("SELECT COUNT(*) FROM events");
    $stats['total_events'] = $stmt->fetchColumn();

    // Total Guests
    $stmt = $pdo->query("SELECT COUNT(*) FROM guests");
    $stats['total_guests'] = $stmt->fetchColumn();

    // Total Budget (Estimated Cost)
    $stmt = $pdo->query("SELECT SUM(estimated_cost) FROM budget_items");
    $stats['total_budget'] = $stmt->fetchColumn() ?: 0;

    // Total Payments
    $stmt = $pdo->query("SELECT SUM(amount) FROM payments WHERE status = 'Completed'");
    $stats['total_payments'] = $stmt->fetchColumn() ?: 0;

    return $stats;
}

/**
 * Get upcoming events
 */
function getUpcomingEvents($pdo, $limit = 2) {
    if (!$pdo) return [];

    $stmt = $pdo->prepare("
        SELECT e.*, v.name as venue_name, v.location as venue_location
        FROM events e
        LEFT JOIN venues v ON e.venue_id = v.id
        WHERE e.start_date >= NOW()
        ORDER BY e.start_date ASC
        LIMIT :limit
    ");
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}

/**
 * Get high priority tasks
 */
function getHighPriorityTasks($pdo, $limit = 3) {
    if (!$pdo) return [];

    $stmt = $pdo->prepare("
        SELECT * FROM tasks
        WHERE priority = 'High' AND is_completed = 0
        ORDER BY due_date ASC
        LIMIT :limit
    ");
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}

/**
 * Get recent activities
 */
function getRecentActivities($pdo, $limit = 5) {
    if (!$pdo) return [];

    $stmt = $pdo->prepare("
        SELECT * FROM activities
        ORDER BY created_at DESC
        LIMIT :limit
    ");
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}

/**
 * Format time ago
 */
function timeAgo($timestamp) {
    $datetime = new DateTime($timestamp);
    $now = new DateTime();
    $interval = $now->diff($datetime);

    if ($interval->y >= 1) return $interval->y . ' year' . ($interval->y > 1 ? 's' : '') . ' ago';
    if ($interval->m >= 1) return $interval->m . ' month' . ($interval->m > 1 ? 's' : '') . ' ago';
    if ($interval->d >= 1) return $interval->d . ' day' . ($interval->d > 1 ? 's' : '') . ' ago';
    if ($interval->h >= 1) return $interval->h . ' hour' . ($interval->h > 1 ? 's' : '') . ' ago';
    if ($interval->i >= 1) return $interval->i . ' minute' . ($interval->i > 1 ? 's' : '') . ' ago';
    return 'just now';
}
?>
