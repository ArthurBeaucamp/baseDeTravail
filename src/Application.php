<?php

namespace Core;

class Application{
  public function __construct(){
    // On crée le routeur
    $this->router = new \AltoRouter();

    // On lance le mapping
    $this->mapping();
  }

  public function mapping(){
    $this->router->map('GET','/', '', 'home');
  }

  public function run(){
    
  }
}
