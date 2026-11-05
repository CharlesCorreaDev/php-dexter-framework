# Funções definidas pelo usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/functions.user-defined.php

---

## Funções definidas pelo usuário

Uma função é definida pelo uso da palavra-chave `function`,
um nome, uma lista de parâmetros (que pode estar vazia) separados por vírgulas
(`,`) entre parênteses, seguidos pelo corpo da
função entre chaves, como a seguir:

**Exemplo #1 Declarando uma nova função chamada `foo`**

```
<?php
function foo($arg_1, $arg_2, /* ..., */ $arg_n)
{
    echo "Exemplo de função.\n";
    return $valor_retornado;
}
```

> **Nota**:
>
> A partir do PHP 8.0.0, a lista de parâmetros pode ter uma vírgula no final:
>
> ```
> <?php
> function foo($arg_1, $arg_2,) { }
> ```

Qualquer código PHP válido pode aparecer dentro do corpo de uma função, mesmo outras
funções e definições de
[classes](language.oop5.basic.md#language.oop5.basic.class).

Nomes de funções seguem as mesmas regras que outros nomes no PHP. Um
nome de função válido começa com uma letra ou um sublinhado,
seguido por qualquer número de letras, números ou sublinhados. Com uma expressão
regular, seria expressado com:
`^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$`.

**Dica**

Veja também o
[Guia de nomenclatura em espaço de usuário](userlandnaming.md).

As funções não precisam ser criadas antes de serem referenciadas,
*exceto* quando uma função é condicionalmente definida
como mostrado nos dois exemplos abaixo.

Quando uma função é definida condicionalmente como nos dois
exemplos abaixo, sua definição precisa ser processada *antes*
de ser chamada.

**Exemplo #2 Funções definidas condicionalmente**

```
<?php
$makefoo = true;

/* Não podemos chamar foo() daqui
   porque ela ainda não existe,
   mas podemos chamar bar() */
if (function_exists('foo')) {
    foo();
} else {
    echo "Função foo não existe (ainda).\n";
}

bar();

if ($makefoo) {
  function foo()
  {
    echo "Eu não existo até que o programa passe por aqui.\n";
  }
}

/* Agora podemos chamar foo()
   porque $makefoo foi avaliado como true */

if ($makefoo) foo();

function bar()
{
  echo "Eu existo imediatamente desde o programa começar.\n";
}
```

**Exemplo #3 Funções dentro de funções**

```
<?php
function foo()
{
  function bar()
  {
    echo "Eu não existo até foo() ser chamada.\n";
  }
}

/* Nós não podemos chamar bar() ainda
   porque ela ainda não foi definida. */
if (function_exists('bar')) {
    bar();
}

foo();

/* Agora nós podemos chamar bar(),
   porque o processamento de foo()
   tornou a primeira acessível */

bar();
```

Todas as funções e classes no PHP tem escopo global - elas podem
ser chamadas fora de uma função mesmo que tenham sido definidas dentro e vice-versa.

O PHP não suporta sobrecarga de funções, e também não é possível cancelar ou
alterar a definição de funções previamente declaradas.

> **Nota**:
>
> Nomes de funções são case-insensitive para caracteres ASCII `A` até `Z`, mas é melhor chamar
> as funções da mesma forma que elas aparecem nas declarações.

Ambos [número variável de argumentos](functions.arguments.md#functions.variable-arg-list) e [argumentos
padrões](functions.arguments.md#functions.arguments.default) são suportados em funções. veja também as referências
das funções
[func\_num\_args()](function.func-num-args.md),
[func\_get\_arg()](function.func-get-arg.md) e
[func\_get\_args()](function.func-get-args.md) para mais informações.

É possível chamar funções recursivas no PHP.

**Exemplo #4 Funções Recursivas**

```
<?php
function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}

recursion(17);
```

> **Nota**:
>
> Chamadas recursivas a funções/métodos acima de 100-200 níveis podem
> exaurir a pilha e causar o término do script. Especificamente,
> recursão infinita é considerada um erro de programação.

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
