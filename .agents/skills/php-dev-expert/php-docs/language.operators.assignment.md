# Operadores de Atribuição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.operators.assignment.php

---

## Operadores de Atribuição

O operador básico de atribuição é "=". A primeira inclinação seria
pensar nisto como "é igual". Não é verdade. Isto quer dizer que o
operando da esquerda recebe o valor da expressão da direita (ou seja,
"é definido para").

O valor de uma expressão de atribuição é o valor atribuído. Ou seja,
o valor de "`$a = 3`" é 3. Isto permite alguns
truques:

**Exemplo #1 Atribuições aninhadas**

```
<?php
$a = ($b = 4) + 5; // $a é igual a 9 agora e $b foi definido como 4.
var_dump($a);
?>
```

Além do operador básico de atribuição, há "operadores
combinados" para todos os [operadores
aritméticos](language.operators.md), de array e string que permitem a você pegar um valor de uma
expressão e então usar seu próprio valor para o resultado daquela expressão. Por
exemplo:

**Exemplo #2 Atribuições combinadas**

```
<?php
$a = 3;
$a += 5; // define $a para 8, como se disséssemos: $a = $a + 5;
$b = "Bom ";
$b .= "Dia!"; // define $b para "Bom Dia!", como em $b = $b . "Dia!";

var_dump($a, $b);
?>
```

Note que a atribuição copia a variável original para a nova
(atribuição por valor), assim a mudança de uma não afeta a
outra. Isto pode ser relevante se você precisa copiar algo
como um grande array dentro de um loop apertado.

Uma exceção ao comportamento geral de atribuição ocorre
com [object](language.types.object.md)s, que são atribuídos por referência.
Objetos podem ser explicitamente copiados através da instrução [clone](language.oop5.cloning.md).

### Atribuição por referência

Atribuição por referência também é possível, utilizando-se a sintaxe
"$var = &$othervar;".
A atribuição por referência significa que ambas as variáveis apontam
para o mesmo dado, e nada é copiado.

**Exemplo #3 Atribuição por referência**

```
<?php
$a = 3;
$b = &$a; // $b é uma referência de $a

print "$a\n"; // imprime 3
print "$b\n"; // imprime 3

$a = 4; // modificamos $a

print "$a\n"; // imprime 4
print "$b\n"; // imprime 4 também, pois $b é uma referência de $a, que foi
              // modificada
?>
```

O operador [new](language.oop5.basic.md#language.oop5.basic.new)
retorna uma referência automaticamente, de forma que a atribuição de um resultado de
[new](language.oop5.basic.md#language.oop5.basic.new) por referência é um erro.

**Exemplo #4 Operador new por referência**

```
<?php
class C {}

$o = &new C;
?>
```

O exemplo acima produzirá:

```
Parse error: syntax error, unexpected token ";", expecting "("
```

Mais informações sobre referências e seus potenciais usos podem ser encontrados
na seção [Explicando Referências](language.references.md)
do manual.

### Arithmetic Assignment Operators

| Exemplo | Equivalente | Operação |
| --- | --- | --- |
| $a += $b | $a = $a + $b | Adição |
| $a -= $b | $a = $a - $b | Subtração |
| $a \*= $b | $a = $a \* $b | Multiplicação |
| $a /= $b | $a = $a / $b | Divisão |
| $a %= $b | $a = $a % $b | Módulo |
| $a \*\*= $b | $a = $a \*\* $b | Exponentiation |

### Operadores de bits

| Exemplo | Equivalente | Operação |
| --- | --- | --- |
| $a &= $b | $a = $a & $b | Bitwise E |
| $a |= $b | $a = $a | $b | Bitwise Ou |
| $a ^= $b | $a = $a ^ $b | Bitwise Xor |
| $a <<= $b | $a = $a << $b | Desloca para esquerda |
| $a >>= $b | $a = $a >> $b | Desloca para direita |

### Outras operações de assimilação

| Exemplo | Equivalente | Operação |
| --- | --- | --- |
| $a .= $b | $a = $a . $b | Concatenação de strings |
| $a ??= $b | $a = $a ?? $b | Aglutinação de nulls (null coalesce) |

### Veja também

- [operadores aritméticos](language.operators.arithmetic.md)
- [operadores em bits](language.operators.bitwise.md)
- [operador de aglutinação de null](language.operators.comparison.md#language.operators.comparison.coalesce)

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
