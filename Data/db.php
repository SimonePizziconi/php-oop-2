<?php

// Data Base dei prodotti
$db = [
    new Food('Croccantini', 'https://media.istockphoto.com/id/483452891/it/foto/cibo-per-animali-domestici.jpg?s=612x612&w=0&k=20&c=TrLVzTAt3VZXcbO70T9Eea5T1zjZHwRLdvPFZeMyEC0=', 80.99, $dogCategory, 'Croccantini bio', 'secco', 'media taglia'),
    new Kennel('Lettiera', 'https://croci.net/cdn/shop/files/Morgana_Cat.jpg?v=1696855677&width=2048', 120.99, $catCategory, 'filtro al carbone attivo', 'da interno', 'media taglia'),
    new Toy('Kong', 'https://www.amoreanimaleshop.it/wp-content/uploads/2017/01/Ferribiella-Classic-Kong-Portabiscotto.jpg', 19.99, $dogCategory, 'tiene impegnati e stimola la voglia di giocare.', 'plastica',),
    new Food('Biscotti al pollo', 'https://m.media-amazon.com/images/I/61GlOBf3kXL._AC_UF894,1000_QL80_.jpg', 9.99, $catCategory, 'Snack gustosi al pollo per gatti.', 'snack', 'piccola taglia',),
    new Kennel('Cuccia per cani', 'https://cuccepercani.net/wp-content/uploads/2016/03/cuccia-cani-grande-resina-marrone.jpg', 150.00, $dogCategory, 'Cuccia comoda e spaziosa.', 'da esterno', 'grande taglia',),
    new Product('Spazzola', 'https://m.media-amazon.com/images/I/71OoJzeBVwL.jpg', 14.99, $catCategory, 'Spazzola per la cura del pelo.')
];

// Prova try-catch
try {
    $new_food = new Food('biscotti', 'https://blog.giallozafferano.it/melogranierose/wp-content/uploads/2023/05/biscotti-per-cani-e-gatti-3-960x965.jpg', 9.99, $dogCategory, 'Biscotti naturali', 'secco', 'tutte le taglie');
    $new_food->setName('Bi');
    $db[] = $new_food;
} catch (Exception $e) {
    echo 'Errore: ' . $e->getMessage();
};

// Prova try-catch
try {
    $new_food = new Food('biscotti', 'https://blog.giallozafferano.it/melogranierose/wp-content/uploads/2023/05/biscotti-per-cani-e-gatti-3-960x965.jpg', 9.99, $dogCategory, 'Biscotti naturali', 'secco', 'tutte le taglie');
    $new_food->setName('Biscotti');
    $db[] = $new_food;
} catch (Exception $e) {
    echo 'Errore: ' . $e->getMessage();
};
