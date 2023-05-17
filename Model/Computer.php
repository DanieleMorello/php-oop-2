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
