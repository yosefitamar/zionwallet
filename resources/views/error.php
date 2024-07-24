<?php
/** @var string $pageContent  */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css">
</head>
<body>
<div class="min-h-full">
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <?php include $pageContent ?>
        </div>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.0/dist/alpine.js" defer></script>
</body>
</html>