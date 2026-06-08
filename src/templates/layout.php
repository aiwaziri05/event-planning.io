<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/../includes/head.php'; ?>
<body class="bg-background text-on-background min-h-screen">
    <?php include __DIR__ . '/../includes/sidebar.php'; ?>
    <div class="ml-[280px] min-h-screen">
        <?php include __DIR__ . '/../includes/header.php'; ?>
        <main class="pt-16 p-lg">
            <?php echo $content; ?>
        </main>
    </div>
</body>
</html>
