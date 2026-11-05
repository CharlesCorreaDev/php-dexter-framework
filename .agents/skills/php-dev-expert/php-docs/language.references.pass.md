# Passagem por referência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.references.pass.php

---

## Passagem por referência

Uma variável pode ser passada por referência a uma função de forma que a função
possa modificar a variável. A sintaxe é a seguinte:

```
<?php
function foo(&$var)
{
    $var++;
}

$a = 5;
foo($a);
print $a; // $a é 6 aqui
```

> **Nota**:
>
> Não há o sinal de referência na chamada da função - apenas nas
> definições de função. As definições de função, sozinhas, são suficientes para
> passar o argumento por referência.

Os itens seguintes podem ser passados por referência:

- Variáveis, como `foo($a)`
- Referências retornadas de funções, como:

  ```
  <?php

  function foo(&$var)
  {
      $var++;
      print $var;
  }

  function &bar()
  {
      $a = 5;
      return $a;
  }

  foo(bar());
  ```

  Veja mais sobre isso em [retorno por referência](language.references.return.md).

Nenhuma outra expressão pode ser passada por referência pois
não tem comportamento definido. Os seguintes exemplos de passagem
por referência são inválidos:

```
<?php

function foo(&$var)
{
    $var++;
}

function bar() // Repare que falta &
{
    $a = 5;
    return $a;
}

foo(bar()); // Gera um aviso

foo($a = 5); // Expressão, não uma variável
foo(5); // Gera um erro fatal

class Foobar {}

foo(new Foobar()) // Produz um aviso no PHP 7.0.7
                  // Somente variáveis devem ser passadas por referência
```

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
