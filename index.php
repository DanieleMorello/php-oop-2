<?php
class Computer
{
  private string $brand; // marca del computer
  private string $model; // modello del computer
  private float $price; // prezzo del computer
  private string $productType; // tipo del prodotto

  /**
   * Costruttore della classe Computer
   * 
   * @param string $brand La marca del computer
   * @param string $model Il modello del computer
   * @param float $price Il prezzo del computer
   * @param string $productType Il tipo del prodotto
   */
  function __construct(string $brand, string $model, float $price, string $productType)
  {
    $this->brand = $brand;
    $this->model = $model;
    $this->price = $price;
    $this->productType = $productType;
  }

  /**
   * Imposta la marca del computer
   * 
   * @param string $brand La marca del computer
   */
  function setBrand(string $brand): void
  {
    $this->brand = $brand;
  }

  /**
   * Restituisce la marca del computer
   * 
   * @return string La marca del computer
   */
  function getBrand(): string
  {
    return $this->brand;
  }

  /**
   * Imposta il modello del computer
   * 
   * @param string $model Il modello del computer
   */
  function setModel(string $model): void
  {
    $this->model = $model;
  }

  /**
   * Restituisce il modello del computer
   * 
   * @return string Il modello del computer
   */
  function getModel(): string
  {
    return $this->model;
  }

  /**
   * Imposta il prezzo del computer
   * 
   * @param float $price Il prezzo del computer
   */
  function setPrice(float $price): void
  {
    $this->price = $price;
  }

  /**
   * Restituisce il prezzo del computer
   * 
   * @return float Il prezzo del computer
   */
  function getPrice(): float
  {
    return $this->price;
  }

  /**
   * Imposta il tipo del prodotto
   * 
   * @param string $productType Il tipo del prodotto
   */
  function setProductType(string $productType): void
  {
    $this->productType = $productType;
  }

  /**
   * Restituisce il tipo del prodotto
   * 
   * @return string Il tipo del prodotto
   */
  function getProductType(): string
  {
    return $this->productType;
  }
}

class Desktop extends Computer
{
  /**
   * Costruttore della classe Desktop
   * 
   * @param string $brand La marca del computer
   * @param string $model Il modello del computer
   * @param float $price Il prezzo del computer
   */
  function __construct(string $brand, string $model, float $price)
  {
    parent::__construct($brand, $model, $price, "Desktop");
  }
}

class Laptop extends Computer
{
  /**
   * Costruttore della classe Laptop
   * 
   * @param string $brand La marca del computer
   * @param string $model Il modello del computer
   * @param float $price Il prezzo del computer
   */
  function __construct(string $brand, string $model, float $price)
  {
    parent::__construct($brand, $model, $price, "Laptop");
  }
}

// Creiamo un set di dati di esempio
$products = array(
  new Desktop("HP", "Pavilion", 799.0),
  new Laptop("Dell", "XPS 13", 1299.0),
  new Desktop("Apple", "iMac", 1299.0),
);
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