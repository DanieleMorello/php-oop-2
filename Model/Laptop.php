<?php
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

    $this->setDescription("Un laptop elegante e portatile per chi è sempre in movimento.");
  }
}
