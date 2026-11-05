# Funções de Seta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/functions.arrow.php

---

## Funções de Seta

Funções de seta foram introduzidas a partir do PHP 7.4 como uma sintaxe mais concisa para
[funções anônimas](functions.anonymous.md).

Funções anônimas e funções de seta são implementadas usando a classe
[Closure](class.closure.md).

Funções de seta têm a forma básica
`fn (argument_list) => expr`.

Funções de seta possuem as mesmas características das
[funções anônimas](functions.anonymous.md),
exceto que o uso de variáveis do escopo pai é sempre automático.

Quando uma variável usada na expressão é definida no escopo pai,
ela será implicitamente capturada por valor.
No exemplo a seguir, as funções $fn1 e
$fn2comportam-se da mesma maneira.

**Exemplo #1 Funções de seta capturam variáveis por valor automaticamente**

```
<?php
$y = 1;

$fn1 = fn($x) => $x + $y;
// Equivalente ao usar $y por valor:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};

var_export($fn1(3));
```

O exemplo acima produzirá:

```
4
```

Isso também funciona se as funções de seta estiverem aninhadas:

**Exemplo #2 Funções de seta capturam variáveis por valor automaticamente, mesmo quando aninhadas**

```
<?php
$z = 1;
$fn = fn($x) => fn($y) => $x * $y + $z;
// Outputs 51
var_export($fn(5)(10));
```

Da mesma forma que funções anônimas,
a sintaxe das funções de seta permitem assinaturas de função arbitrária,
incluindo parâmetros e tipos de retorno, valores padrão, variadics,
bem como por referência passando e retornando.
Todos os exemplos válidos de funções de seta:

**Exemplo #3 Exemplos de funções de seta**

```
<?php
fn(array $x) => $x;
static fn($x): int => $x;
fn($x = 42) => $x;
fn(&$x) => $x;
fn&($x) => $x;
fn($x, ...$rest) => $rest;
```

Funções de seta usam vinculação de variável por valor.
Isso é aproximadamente equivalente a realizar um `use($x)` para cada
variável $x usada dentro da funções de seta.
Uma passagem de variável por valor, significa que não é possível modificar quaisquer valores
do escopo externo.
[Funções anônimas](functions.anonymous.md)
podem ser usadas em vez disso para passagem de variável por referência.

**Exemplo #4 Valores do escopo externo não podem ser modificados por funções de seta**

```
<?php
$x = 1;
$fn = fn() => $x++; // Não tem efeito
$fn();
var_export($x);  // Exibe 1
```

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | Funções de seta tornaram-se disponíveis. |

### Notas

> **Nota**:
>
> É possível usar [func\_num\_args()](function.func-num-args.md),
> [func\_get\_arg()](function.func-get-arg.md), e [func\_get\_args()](function.func-get-args.md)
> de dentro de uma função de seta.

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
