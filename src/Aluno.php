<?php

namespace Arquitetura;

class Aluno
{
  private Cpf $cpf; // Como esta classe terá instâncias que serão diferentes entre si, ela é uma entidade, e, portanto, precisa de um identificador: o CPF.
  private string $nome;
  private Email $email;
  private array $telefones;

  public function __construct(Cpf $cpf, string $nome, Email $email)
  {
    $this->cpf = $cpf;
    $this->nome = $nome;
    $this->email = $email;
  }

  public static function comCpfNomeEEmail(string $cpf, string $nome, string $email): self
  {
    return new Aluno(new Cpf($cpf), $nome, new Email($email));
  }

  public function adicionarTelefones(string $ddd, string $numero): self
  {
    $this->telefones[] = new Telefone($ddd, $numero);
    return $this;
  }
}
