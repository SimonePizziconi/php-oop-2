<?php

require_once __DIR__ . '/Model/Category.php';
require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Data/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <!-- Ciclo per stampare carte -->
    <?php foreach($db as $card): ?>
        <?php $card->createdCard(); ?>
    <?php endforeach; ?>

</body>
</html>
</body>
</html>