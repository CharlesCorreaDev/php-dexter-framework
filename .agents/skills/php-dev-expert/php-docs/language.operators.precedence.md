# Precedência de Operadores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.operators.precedence.php

---

## Precedência de Operadores

A precedência de um operador especifica quem tem mais prioridade quando há
duas delas juntas. Por exemplo, na expressão `1 +
5 * 3`, a resposta é `16` e não
`18` porque o operador de multiplicação ("\*")
tem prioridade de precedência que o operador de adição ("+").
Parênteses podem ser utilizados para forçar a precedência, se necessário.
Assim, `(1 + 5) * 3` é avaliado como
`18`.

Quando operadores têm precedência igual a associatividade decide
como os operadores são agrupados. Por exemplo "-" é associado à esquerda, de forma que
`1 - 2 - 3` é agrupado como `(1 - 2) - 3`
e resulta em `-4`. "=" por outro lado
associa para a direita, de forma que `$a = $b = $c` é agrupado como
`$a = ($b = $c)`.

Operadores de igual precedência e associatividade não podem
ser utilizados uns próximos aos outros. Por exemplo `1 < 2 > 1` é
ilegal no PHP. A expressão `1 <= 1 == 1` por outro
lado é válida, porque o operador `==` tem menor
precedência que o operador `<=`.

A associatividade somente faz sentido para operadores binários e ternários.
Operadores unários são precedentes ou seguintes, de forma que essa outra noção não se aplica.
Por exemplo `!!$a` somente pode ser agrupado como `!(!$a)`.

O uso de parênteses, embora não estritamente necessário, pode melhorar
a leitura do código ao deixar o agrupamento explícito em vez de depender
da associatividade e precedências implícitos.

A tabela seguinte mostra a precedência dos operadores, com a maior
precedência no começo. Operadores com a mesma precedência estão na mesma linha,
nesses casos a associatividade deles decidirá qual ordem eles serão avaliados.

**Precedência dos operadores**

| Associação | Operadores | Informação Adicional |
| --- | --- | --- |
| (não aplicável) | `clone` `new` | [clone](language.oop5.cloning.md) e [new](language.oop5.basic.md#language.oop5.basic.new) |
| direita | `**` | [aritmético](language.operators.arithmetic.md) |
| (não aplicável) | `+` `-` `++` `--` `~` `(int)` `(float)` `(string)` `(array)` `(object)` `(bool)` `@` | [aritméticos](language.operators.arithmetic.md) (unário `+` e `-`), [incremento/decremento](language.operators.increment.md), [binário](language.operators.bitwise.md), [conversão de tipo](language.types.type-juggling.md#language.types.typecasting) e [controle de erro](language.operators.errorcontrol.md) |
| esquerda | `instanceof` | [tipo](language.operators.type.md) |
| (não aplicável) | `!` | [lógico](language.operators.logical.md) |
| esquerda | `*` `/` `%` | [aritméticos](language.operators.arithmetic.md) |
| esquerda | `+` `-` `.` | [aritméticos](language.operators.arithmetic.md) (binário `+` e `-`), [array](language.operators.array.md) e [string](language.operators.string.md) (`.` anteriormente ao PHP 8.0.0) |
| esquerda | `<<` `>>` | [binários](language.operators.bitwise.md) |
| esquerda | `.` | [string](language.operators.string.md) (a partir do PHP 8.0.0) |
| esquerda | `|>` | [pipe](language.operators.functional.md) |
| não associativo | `<` `<=` `>` `>=` | [comparação](language.operators.comparison.md) |
| não associativo | `==` `!=` `===` `!==` `<>` `<=>` | [comparação](language.operators.comparison.md) |
| esquerda | `&` | [binário](language.operators.bitwise.md) e [referências](language.references.md) |
| esquerda | `^` | [binário](language.operators.bitwise.md) |
| esquerda | `|` | [binário](language.operators.bitwise.md) |
| esquerda | `&&` | [lógico](language.operators.logical.md) |
| esquerda | `||` | [lógico](language.operators.logical.md) |
| direita | `??` | [coalescência nula](language.operators.comparison.md#language.operators.comparison.coalesce) |
| não associativo | `? :` | [ternário](language.operators.comparison.md#language.operators.comparison.ternary) (esquerda anteriormente ao PHP 8.0.0) |
| direita | `=` `+=` `-=` `*=` `**=` `/=` `.=` `%=` `&=` `|=` `^=` `<<=` `>>=` `??=` | [atribuição](language.operators.assignment.md) |
| (não aplicável) | `yield from` | [yield from](language.generators.syntax.md#control-structures.yield.from) |
| (não aplicável) | `yield` | [yield](language.generators.syntax.md#control-structures.yield) |
| (não aplicável) | `print` | [print](function.print.md) |
| esquerda | `and` | [lógicos](language.operators.logical.md) |
| esquerda | `xor` | [lógicos](language.operators.logical.md) |
| esquerda | `or` | [lógicos](language.operators.logical.md) |
| (n/a) | `throw` | [throw](language.error-handling.throwable.md#language.exceptions) |

> **Nota**:
>
> Os operadores unários que compartilham a linha com os operadores de conversão
> (`~`, `@`, e os unários
> `+`/`-`) se ligam com mais força que
> `instanceof`, enquanto que `!` se liga com menos
> força. Consequentemente, `(int) $x instanceof Foo` é agrupado
> como `((int) $x) instanceof Foo`, enquanto que
> `!$x instanceof Foo` é agrupado como
> `!($x instanceof Foo)`.

**Exemplo #1 Associação**

```
<?php
$a = 3 * 3 % 5; // (3 * 3) % 5 = 4
var_dump($a);

$a = 1;
$b = 2;
$a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5
var_dump($a, $b);
?>
```

O operador ternário requer especificamente o uso de parênteses para
remover a ambiguidade de precedência.

**Exemplo #2 Precedência explícita**

```
<?php
$a = true ? 0 : (true ? 1 : 2);
var_dump($a);

// isto não é permitido desde o PHP 8
// $a = true ? 0 : true ? 1 : 2;
?>
```

A precedência e a associatividade apenas determinam como as expressões são
agrupadas, mas não especificam a ordem de avaliação. O PHP
(geralmente) não especifica em que ordem as expressões são avaliadas,
então códigos que assumem ordens específicas de avaliação devem ser evitados
porque o comportamento pode ser alterado entre versões do PHP ou dependendo
do código em volta.

**Exemplo #3 Ordem de avaliação não definida**

```
<?php
$a = 1;
echo $a + $a++; // pode exibir 2 ou 3

$i = 1;
$array[$i] = $i++; // pode definir o índice 1 ou 2
?>
```

**Exemplo #4 Precedência de `+`, `-` e `.`**

```
<?php
$x = 4;
// esta linha pode resultar em uma saída inesperada:
echo "x menos um é igual a " . $x-1 . ", ou assim eu espero\n";

// a precedência desejada pode ser aplicada utilizando parênteses:
echo "x menos um é igual a " . ($x-1) . ", ou assim eu espero\n";

// isto não é permitido e lança um TypeError:
echo (("x menos um é igual a " . $x) - 1) . ", ou assim eu espero\n";
?>
```

O exemplo acima produzirá:

```
-1, ou assim eu espero
-1, ou assim eu espero
Fatal error: Uncaught TypeError: Unsupported operand types: string - int
```

**Exemplo #5 Antes do PHP 8, `+`, `-` e `.` tinham a mesma precedência**

```
<?php
$x = 4;
// this line might result in unexpected output:
echo "x menos um é igual a " . $x-1 . ", ou assim eu espero\n";

// porque é avaliada como esta linha (antes do PHP  8.0.0):
echo (("x menos um é igual a " . $x) - 1) . ", ou assim eu espero\n";

// a precedência desejada pode ser aplicada utilizando parênteses:
echo "x menos um é igual a " . ($x-1) . ", ou assim eu espero\n";
?>
```

O exemplo acima produzirá:

```
-1, ou assim eu espero
-1, ou assim eu espero
x menos um é igual a 3, ou assim eu espero
```

> **Nota**:
>
> Embora o `=` tenha uma precedência menor que
> a maioria dos operadores, o PHP ainda permite expressões
> similares a `if (!$a = foo())`,
> onde o valor retornado de `foo()` é
> colocado em $a.
>
> Isso é possível porque o lado esquerdo de uma atribuição deve ser uma
> variável, portanto a atribuição é agrupada com essa variável em vez de com
> o operador de prefixo de precedência superior circundante. O mesmo se aplica aos
> outros operadores de prefixo que recebem um operando de expressão, tal como
> `clone`, os operadores de conversão, `@` e
> `~`: por exemplo, `clone $a = $b` é agrupado
> como `clone ($a = $b)`, e não `(clone $a) = $b`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Concatenação de strings (`.`) tem uma precedência menor que adição/subtração (`+` e `-`) e shift de bits à esquerda/direita (`<<` e `>>`); anteriormente ele tinha a mesma precedência que `+` e `-` uma precedência maior que `<<` e `>>`. |
| 8.0.0 | O operador ternário (`? :`) agora é não associativo; anteriormente associava a esquerda. |
| 7.4.0 | Depender da precedência da concatenação de strings (`.`) em relação à adição/subtração (`+` ou `-`) ou shift de bits a esquerda/direta (`<<` ou `>>`), ou seja, os usar numa mesma expressão, foi descontinuado. |
| 7.4.0 | Depender da associatividade à esquerda do operador ternário (`? :`), ou seja, o utilizar em várias expressões sem parênteses, foi descontinuado. |

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
