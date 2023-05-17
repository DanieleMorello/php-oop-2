<?php
require_once __DIR__ . '/Model/Computer.php';

require_once __DIR__ . '/Model/Desktop.php';

require_once __DIR__ . '/Model/Laptop.php';

require_once __DIR__ . '/Data/db.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Computer Products</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1 class="text-center">Computer Products</h1>
    <div class="row">
      <?php foreach ($products as $product) { ?>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1744&q=80" class="card-img-top" alt="<?php echo $product->getProductType(); ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $product->getBrand(); ?> <?php echo $product->getModel(); ?></h5>
              <p class="card-text">$<?php echo $product->getPrice(); ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</body>

</html>