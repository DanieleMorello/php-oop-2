<?php
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

    $this->setDescription("Un potente computer desktop per la casa o l'ufficio.");
  }
}
