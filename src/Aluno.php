<?php

namespace Arquitetura;

class Aluno
{
  private int $cpf; // Como esta classe terá instâncias que serão diferentes entre si, ela é uma entidade, e, portanto, precisa de um identificador: o CPF.
  private string $nome;
  private Email $email;
  private array $telefones;

  public function adicionarTelefones(string $ddd, string $numero): void
  {
    $this->telefones[] = new Telefone($ddd, $numero);
  }
}
