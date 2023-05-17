<body>
  <div class="container">
    <h1 class="text-center">Computer Products</h1>
    <div class="row">
      <?php foreach ($products as $product) { ?>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1744&q=80"
            class="card-img-top" alt="<?php echo $product->getProductType(); ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $product->getBrand(); ?> <?php echo $product->getModel(); ?></h5>
            <p class="card-text">€ <?php echo $product->getPrice(); ?></p>
            <p class="card-text">Tipologia: <?php echo $product->getProductType(); ?></p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</body>

</html>