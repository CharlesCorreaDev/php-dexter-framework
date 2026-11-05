# final

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.final.php

---

## final

A palavra-chave final evita que classes filhas sobrescrevam um método, propriedade ou constante
prefixando a definição com `final`. Se a própria
classe estiver definida como final, ela não pode ser estendida.

**Exemplo #1 Exemplo de método final**

```
<?php
class ClasseBase {
   public function teste() {
       echo "ClasseBase::teste() chamado\n";
   }

   final public function maisTeste() {
       echo "ClasseBase::maisTeste() chamado\n";
   }
}

class ClasseFilha extends ClasseBase {
   public function maisTeste() {
       echo "ClasseFilha::maisTeste() called\n";
   }
}
// Resulta em erro fatal: Não é possível substituir o método final ClasseBase::maisTeste()
?>
```

**Exemplo #2 Exemplo de classe final**

```
<?php
final class ClasseBase {
   public function teste() {
       echo "Método ClasseBase::teste() chamado\n";
   }

   // Como a classe já é final, a palavra-chave final é rendundante.
   final public function maisTeste() {
       echo "Método ClasseBase::maisTeste() chamado\n";
   }
}

class ClasseFilha extends ClasseBase {
}
// Resulta em erro fatal: Classe ClasseFilha não pode herdar da classe final (ClasseBase)
?>
```

**Exemplo #3 Exemplo de propriedade final a partir do PHP 8.4.0**

```
<?php
class ClasseBase {
   final protected string $teste;
}

class ClasseFilha extends ClasseBase {
    public string $teste;
}
// Resulta em erro fatal: Não é possível substituir a propriedade final ClasseBase::$teste
?>
```

**Exemplo #4 Exemplo de constante final a partir do PHP 8.1.0**

```
<?php
class Foo
{
    final public const X = "foo";
}

class Bar extends Foo
{
    public const X = "bar";
}

// Erro fatal: Bar::X não pode substituir a constante final Foo::X
?>
```

> **Nota**:
>
> A partir do PHP 8.0.0, métodos privados não podem ser declarados finais, com exceção do [construtor](language.oop5.decon.md#language.oop5.decon.constructor).

> **Nota**:
>
> Uma propriedade que é declarada [`private(set)`](language.oop5.visibility.md#language.oop5.visibility-members-aviz) é, implicitamente, `final`.

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
