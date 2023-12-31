<?php

namespace Arquitetura;

use InvalidArgumentException;

class Telefone
{
  private string $ddd;
  private string $numero;

  public function __construct(string $ddd, string $numero)
  {
    $this->ddd = $ddd;
    $this->numero = $numero;
  }

  public function setDDD(string $ddd): void
  {
    if (preg_match('/\d{2}/', $ddd) != 1) {
      throw new InvalidArgumentException('DDD inválido');
    }

    $this->ddd = $ddd;
  }

  public function setNumero(string $numero): void
  {
    if (preg_match('/\d{8, 9}/', $numero) != 1) {
      throw new InvalidArgumentException('Número de telefone inválido');
    }

    $this->numero = $numero;
  }

  public function __toString(): string
  {
    return "({$this->ddd}) {$this->numero}";
  }
}
