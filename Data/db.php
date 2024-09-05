<?php

// Data Base dei prodotti
$db = [
    new Food('Croccantini', 'https://media.istockphoto.com/id/483452891/it/foto/cibo-per-animali-domestici.jpg?s=612x612&w=0&k=20&c=TrLVzTAt3VZXcbO70T9Eea5T1zjZHwRLdvPFZeMyEC0=', 80.99, $dogCategory, 'Croccantini bio', 'secco', 'media taglia'),
    new Kennel('Lettiera', 'https://croci.net/cdn/shop/files/Morgana_Cat.jpg?v=1696855677&width=2048', 120.99, $catCategory, 'filtro al carbone attivo', 'da interno', 'media taglia'),
    new Toy('Kong', 'https://www.amoreanimaleshop.it/wp-content/uploads/2017/01/Ferribiella-Classic-Kong-Portabiscotto.jpg', 19.99, $dogCategory, 'tiene impegnati e stimola la voglia di giocare.', 'plastica',)
];
