<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>

</html>

<?php
include 'navbar.html';
$cards = [
  ['id' => 1, 'title' => 'Card 1', 'description' => 'lorem jbasdkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'url' => 'sj.html', 'image' => 'media/Gp7V_qfawAIIML1.jpg'],
  ['id' => 2, 'title' => 'Card 2', 'description' => 'Description for Card 2', 'url' => 'page2.html', 'image' => 'media/Gp7V_qfawAIIML1.jpg'],
  ['id' => 3, 'title' => 'Card 3', 'description' => 'Description for Card 3', 'url' => 'page3.html', 'image' => 'media/Gp7V_qfawAIIML1.jpg'],
  ['id' => 4, 'title' => 'Card 4', 'description' => 'Description for Card 4', 'url' => 'page4.html', 'image' => 'media/Gp7V_qfawAIIML1.jpg'],
  ['id' => 5, 'title' => 'Card 5', 'description' => 'Description for Card 5', 'url' => 'page5.html', 'image' => 'media/Gp7V_qfawAIIML1.jpg'],
  ['id' => 6, 'title' => 'Card 6', 'description' => 'Description for Card 6', 'url' => 'page6.html', 'image' => 'media/Gp7V_qfawAIIML1.jpg'],
];
?>

<div class="container mt-4">
  <div class="row text-center mb-4">
    <?php foreach ($cards as $card): ?>
      <div class="col-12 col-md-4" id="card-<?= $card['id'] ?>">
        <div class="card mb-4" style="width: 18rem;">
          <img src="<?= $card['image'] ?>" alt="<?= $card['title'] ?>" class="card-img-top" />
          <div class="card-body">
            <h5 class="card-title"><?= $card['title'] ?></h5>
            <p class="card-text"><?= $card['description'] ?></p>
            <a href="<?= $card['url'] ?>" class="btn btn-primary" target="_blank">Go to <?= $card['title'] ?></a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>