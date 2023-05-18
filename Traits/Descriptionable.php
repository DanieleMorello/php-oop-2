<?php

trait Descriptionable
{
  protected string $description;

  function getDescription()
  {
    return $this->description;
  }

  function setDescription(string $description)
  {
    $this->description = $description;
  }
}
