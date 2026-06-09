<?php
// Simple router
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Define white-listed pages
$pages = [
    'dashboard' => 'dashboard.php',
    'events' => 'events.php',
    'guests' => 'guests.php',
    'budget' => 'budget.php',
    'collaboration' => 'collaboration.php',
    'event-centers' => 'event-centers.php',
    'payments' => 'payments.php',
    'profile' => 'profile.php',
    'edit-event' => 'edit-event.php',
    'login' => 'login.php',
    'register' => 'register.php'
];

if (!array_key_exists($page, $pages)) {
    $page = 'dashboard';
}

// Database connection and functions
require_once __DIR__ . '/../src/includes/db.php';
require_once __DIR__ . '/../src/includes/functions.php';

require_once __DIR__ . '/../src/pages/' . $pages[$page];
