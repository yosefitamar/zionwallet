<?php
/** @var string $pageContent  */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="min-h-full">
    <?php include 'nav_bar.php'; ?>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?php echo htmlspecialchars( $pageTitle ?? '' ); ?></h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <?php include $pageContent ?>
        </div>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.0/dist/alpine.js" defer></script>
</body>
</html>