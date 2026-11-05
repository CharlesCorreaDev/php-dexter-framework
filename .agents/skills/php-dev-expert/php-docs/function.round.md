# Arredonda um float

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.round.php

---

# round

(PHP 4, PHP 5, PHP 7, PHP 8)

round — Arredonda um float

### Descrição

function **round**([int](language.types.integer.md)|[float](language.types.float.md) `$num`, [int](language.types.integer.md) `$precision` = 0, [int](language.types.integer.md)|[RoundingMode](enum.roundingmode.md) `$mode` = **`RoundingMode::HalfAwayFromZero`**): [float](language.types.float.md)

Retorna um valor arredondado de `num` com a precisão especificada em
`precision`
(número de dígitos depois do ponto decimal).
`precision` também pode ser negativo ou zero (padrão).

### Parâmetros

`num`
:   Valor a ser arredondado.

`precision`
:   O número opcional de dígitos decimais para arredondar.

    Se `precision` for positivo, `num` será
    arredondado para `precision` de dígitos significativos depois do ponto decimal.

    Se `precision` for negativo, `num` será
    arredondado para `precision` de dígitos significativos depois do ponto decimal,
    isto é: o múltiplo mais próximo de `pow(10, -$precision)`, por exemplo: para um
    `precision` de -1 `num` é arredondado para dezenas,
    para um `precision` de -2 para centenas, etc.

`mode`
:   Use [RoundingMode](enum.roundingmode.md) ou uma das seguintes constantes a seguir para especificar o modo com o qual o arredondamento ocorre.

    | Constantes | Descrição |
    | --- | --- |
    | **`PHP_ROUND_HALF_UP`** | Arredonda `num` para longe de zero quando ele está na metade do caminho, tornando 1.5 em 2 e -1.5 em -2. |
    | **`PHP_ROUND_HALF_DOWN`** | Arredonda `num` na direção de zero quando ele está na metade do caminho, tornando 1.5 em 1 e -1.5 em -1. |
    | **`PHP_ROUND_HALF_EVEN`** | Arredonda `num` em direção ao valor par mais próximo quando ele está na metade do caminho, tornando ambos 1.5 e 2.5 em 2. |
    | **`PHP_ROUND_HALF_ODD`** | Arredonda `num` em direção ao valor ímpar mais próximo quando ele está na metade do caminho, tornando 1.5 em 1 e 2.5 em 3. |

    No entanto, observe que alguns modos novos adicionados existem apenas em [RoundingMode](enum.roundingmode.md).

### Valor Retornado

O valor arredondado para `precision` fornecido como um [float](language.types.float.md).

### Erros/Exceções

A função lança uma exceção [ValueError](class.valueerror.md) se `mode` for
inválido.
Antes do PHP 8.4.0, um modo inválido seria considerado, silenciosamente, como o padrão **`PHP_ROUND_HALF_UP`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Quatro novos modos de arredondamento foram adicionados. |
| 8.4.0 | Agora lança uma exceção [ValueError](class.valueerror.md) se `mode` for inválido. |
| 8.0.0 | `num` não mais aceita objetos internos que suportam conversões numéricas. |

### Examples

**Exemplo #1 Exemplos de **round()****

```
<?php
var_dump(round(3.4));
var_dump(round(3.5));
var_dump(round(3.6));
var_dump(round(3.6, 0));
var_dump(round(5.045, 2));
var_dump(round(5.055, 2));
var_dump(round(345, -2));
var_dump(round(345, -3));
var_dump(round(678, -2));
var_dump(round(678, -3));
?>
```

O exemplo acima produzirá:

```
float(3)
float(4)
float(4)
float(4)
float(5.05)
float(5.06)
float(300)
float(0)
float(700)
float(1000)
```

**Exemplo #2 Como `precision` afeta um float**

```
<?php
$numero = 135.79;

var_dump(round($numero, 3));
var_dump(round($numero, 2));
var_dump(round($numero, 1));
var_dump(round($numero, 0));
var_dump(round($numero, -1));
var_dump(round($numero, -2));
var_dump(round($numero, -3));
?>
```

O exemplo acima produzirá:

```
float(135.79)
float(135.79)
float(135.8)
float(136)
float(140)
float(100)
float(0)
```

**Exemplo #3 Exemplos de `mode`**

```
<?php
echo 'Modos de arredondamento com 9.5' . PHP_EOL;
var_dump(round(9.5, 0, PHP_ROUND_HALF_UP));
var_dump(round(9.5, 0, PHP_ROUND_HALF_DOWN));
var_dump(round(9.5, 0, PHP_ROUND_HALF_EVEN));
var_dump(round(9.5, 0, PHP_ROUND_HALF_ODD));

echo PHP_EOL;
echo 'Modos de arredondamento com 8.5' . PHP_EOL;
var_dump(round(8.5, 0, PHP_ROUND_HALF_UP));
var_dump(round(8.5, 0, PHP_ROUND_HALF_DOWN));
var_dump(round(8.5, 0, PHP_ROUND_HALF_EVEN));
var_dump(round(8.5, 0, PHP_ROUND_HALF_ODD));
?>
```

O exemplo acima produzirá:

```
Modos de arredondamento com 9.5
float(10)
float(9)
float(10)
float(9)

Modos de arredondamento com 8.5
float(9)
float(8)
float(8)
float(9)
```

**Exemplo #4 Exemplos de `mode` com `precision`**

```
<?php
echo 'Usando PHP_ROUND_HALF_UP com precisão decimal de 1 dígito' . PHP_EOL;
var_dump(round( 1.55, 1, PHP_ROUND_HALF_UP));
var_dump(round(-1.55, 1, PHP_ROUND_HALF_UP));

echo PHP_EOL;
echo 'Usando PHP_ROUND_HALF_DOWN com precisão decimal de 1 dígito' . PHP_EOL;
var_dump(round( 1.55, 1, PHP_ROUND_HALF_DOWN));
var_dump(round(-1.55, 1, PHP_ROUND_HALF_DOWN));

echo PHP_EOL;
echo 'Usando PHP_ROUND_HALF_EVEN com precisão decimal de 1 dígito' . PHP_EOL;
var_dump(round( 1.55, 1, PHP_ROUND_HALF_EVEN));
var_dump(round(-1.55, 1, PHP_ROUND_HALF_EVEN));

echo PHP_EOL;
echo 'Usando PHP_ROUND_HALF_ODD com precisão decimal de 1 dígito' . PHP_EOL;
var_dump(round( 1.55, 1, PHP_ROUND_HALF_ODD));
var_dump(round(-1.55, 1, PHP_ROUND_HALF_ODD));
?>
```

O exemplo acima produzirá:

```
Usando PHP_ROUND_HALF_UP com precisão decimal de 1 digito
float(1.6)
float(-1.6)

Usando PHP_ROUND_HALF_DOWN com precisão decimal de 1 digito
float(1.5)
float(-1.5)

Usando PHP_ROUND_HALF_EVEN com precisão decimal de 1 digito
float(1.6)
float(-1.6)

Usando PHP_ROUND_HALF_ODD com precisão decimal de 1 digito
float(1.5)
float(-1.5)
```

**Exemplo #5 Exemplo de uso de [RoundingMode](enum.roundingmode.md)**

```
<?php
foreach (RoundingMode::cases() as $mode) {
    foreach ([
        8.5,
        9.5,
        -3.5,
    ] as $number) {
        printf("%-17s: %+.17g -> %+.17g\n", $mode->name, $number, round($number, 0, $mode));
    }
    echo "\n";
}
?>
```

O exemplo acima produzirá:

```
HalfAwayFromZero : +8.5 -> +9
HalfAwayFromZero : +9.5 -> +10
HalfAwayFromZero : -3.5 -> -4

HalfTowardsZero  : +8.5 -> +8
HalfTowardsZero  : +9.5 -> +9
HalfTowardsZero  : -3.5 -> -3

HalfEven         : +8.5 -> +8
HalfEven         : +9.5 -> +10
HalfEven         : -3.5 -> -4

HalfOdd          : +8.5 -> +9
HalfOdd          : +9.5 -> +9
HalfOdd          : -3.5 -> -3

TowardsZero      : +8.5 -> +8
TowardsZero      : +9.5 -> +9
TowardsZero      : -3.5 -> -3

AwayFromZero     : +8.5 -> +9
AwayFromZero     : +9.5 -> +10
AwayFromZero     : -3.5 -> -4

NegativeInfinity : +8.5 -> +8
NegativeInfinity : +9.5 -> +9
NegativeInfinity : -3.5 -> -4

PositiveInfinity : +8.5 -> +9
PositiveInfinity : +9.5 -> +10
PositiveInfinity : -3.5 -> -3
```

### Veja também

- [ceil()](function.ceil.md) - Arredonda frações para cima
- [floor()](function.floor.md) - Arredonda frações para baixo
- [number\_format()](function.number-format.md) - Formata um número com milhares agrupados

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
