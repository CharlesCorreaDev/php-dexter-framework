# Inteiros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.integer.php

---

## Inteiros

Um [int](language.types.integer.md) é um número do conjunto
ℤ = {..., -2, -1, 0, 1, 2, ...}.

### Veja também

- [Números de ponto flutuante](language.types.float.md)
- [Precisão arbitrária / BCMath](book.bc.md)
- [Número inteiro de comprimento arbitrário / GMP](book.gmp.md)

### Sintaxe

[Int](language.types.integer.md) pode ser especificado em notação decimal (base 10), hexadecimal
(base 16), octal (base 8) ou binária (base 2).
O [sinal de menos](language.operators.arithmetic.md)
pode ser usado para indicar um [int](language.types.integer.md) negativo.

Para usar a notação octal, preceda o número com um `0` (zero).
A partir do PHP 8.1.0, a notação octal também pode ser precedida por `0o` ou `0O`.
Para utilizar a notação hexadecimal, preceda o número com `0x`.
Para utilizar a notação binária, preceda o número com `0b`.

A partir do PHP 7.4.0, inteiros literais podem conter sublinhados (`_`) entre os dígitos,
para melhorar a sua leitura. Estes sublinhados serão removidos pelo analisador do PHP.

**Exemplo #1 Inteiros literais**

```
<?php
$a = 1234; // número decimal
$a = 0123; // número octal (equivalente a 83 em decimal)
$a = 0o123; // número octal (a partir do PHP 8.1.0)
$a = 0x1A; // número hexadecimal (equivalente a 26 em decimal)
$a = 0b11111111; // número binário (equivalente a 255 em decimal)
$a = 1_234_567; // número decimal (a partir do PHP 7.4.0)
?>
```

Formalmente, a estrutura para [int](language.types.integer.md) literais é esta a partir do PHP 8.1.0
(anteriormente, os prefixos octal `0o` ou `0O`
não eram permitidos, e antes do PHP 7.4.0 os sublinhados
não eram permitidos):

```
decimal     : [1-9][0-9]*(_[0-9]+)*
            | 0

hexadecimal : 0[xX][0-9a-fA-F]+(_[0-9a-fA-F]+)*

octal       : 0[oO]?[0-7]+(_[0-7]+)*

binário     : 0[bB][01]+(_[01]+)*

inteiro     : decimal
            | hexadecimal
            | octal
            | binário
```

O tamanho de um [int](language.types.integer.md) depende da plataforma, embora um valor máximo
de cerca de dois bilhões seja o valor usual (são 32 bits com sinal).
As plataformas de 64 bits geralmente têm um valor máximo de cerca de 9E18.
O PHP não suporta [int](language.types.integer.md) sem sinal.
O tamanho [int](language.types.integer.md) pode ser determinado
usando a constante **`PHP_INT_SIZE`**, o valor máximo
usando a constante **`PHP_INT_MAX`** e
o valor mínimo usando a constante **`PHP_INT_MIN`**.

### Overflow de inteiros

Se o PHP encontrar um número além dos limites do tipo [int](language.types.integer.md),
ele será interpretado como um [float](language.types.float.md). Assim, uma
operação que resulte em um número além dos limites do tipo
[int](language.types.integer.md), retornará um [float](language.types.float.md).

**Exemplo #2 Estouro de inteiros**

```
<?php
$large_number = 50000000000000000000;
var_dump($large_number);         // float(5.0E+19)

var_dump(PHP_INT_MAX + 1);       // sistemas 32 bits: float(2147483648)
                                 // sistemas 64 bits: float(9.2233720368548E+18)
?>
```

### Divisão de inteiros

Não existe operador de divisão [int](language.types.integer.md) no PHP, para isso
deve ser usada a função [intdiv()](function.intdiv.md).
`1/2` produz o [float](language.types.float.md) `0.5`.
O valor pode ser convertido em um [int](language.types.integer.md) para arredondar para zero ou
pode ser usada a função [round()](function.round.md) para um controle mais preciso sobre o arredondamento.

**Exemplo #3 Divisões**

```
<?php
var_dump(25/7);         // float(3.5714285714286)
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4)
?>
```

### Convertendo para inteiro

Para converter explicitamente um valor para [int](language.types.integer.md), use a conversão `(int)`.
Entretanto, na maioria dos casos, o modificador não é necessário, já que o valor
será automaticamente convertido se um operador, função ou estrutura de controle
requerer um [int](language.types.integer.md) como argumento. Um valor também pode ser convertido para
[int](language.types.integer.md) utilizando a função [intval()](function.intval.md).

Se um [resource](language.types.resource.md) for convertido para um [int](language.types.integer.md),
resultará no número único do recurso, atribuído ao
[resource](language.types.resource.md) pelo PHP em tempo de execução.

Veja também [Manipulação de Tipos](language.types.type-juggling.md).

#### Convertendo a partir de [booleanos](language.types.boolean.md)

**`false`** será retornado como `0` (zero), e **`true`** retornará
`1` (um).

#### Convertendo a partir de [números de ponto flutuante](language.types.float.md)

Ao converter de [float](language.types.float.md) para [int](language.types.integer.md), o número
será arredondado *em direção ao zero*.
A partir do PHP 8.1.0, um aviso de descontinuação é emitido quando ocorre a conversão implícita
de um [float](language.types.float.md) não integral para [int](language.types.integer.md) que perca precisão.

**Exemplo #4 Convertendo a partir de float**

```
<?php

function foo($value): int {
  return $value;
}

var_dump(foo(8.1)); // Descontinuado: conversão implícita de float 8.1 para int perdendo precisão a partir do PHP 8.1.0
var_dump(foo(8.1)); // 8 antes do PHP 8.1.0
var_dump(foo(8.0)); // 8 em ambos os casos

var_dump((int) 8.1); // 8 em ambos os casos
var_dump(intval(8.1)); // 8 em ambos os casos
?>
```

Se o float estiver além dos limites de [int](language.types.integer.md) (geralmente
`+/- 2.15e+9 = 2^31` em plataformas de 32 bits e
`+/- 9.22e+18 = 2^63` em plataformas de 64 bits),
o resultado é indefinido, já que o [float](language.types.float.md) não tem
precisão suficiente para fornecer um resultado [int](language.types.integer.md) exato.
Nenhum alerta, nem mesmo uma nota, será emitido quando isso acontecer!

> **Nota**:
>
> `NaN`, `Inf` e `-Inf` sempre serão zero quando convertidos para [int](language.types.integer.md).

**Aviso**

Nunca converta uma fração desconhecida para [int](language.types.integer.md) porque isto pode,
algumas vezes, levar a resultados inesperados.

```
<?php
echo (int) ( (0.1+0.7) * 10 ); // mostra 7!
?>
```

Veja também o [alerta sobre a precisão de número
flutuante](language.types.float.md#warn.float-precision).

#### Convertendo a partir de strings

Se a string for
[numérica](language.types.numeric-strings.md)
ou inicialmente numérica, ela será convertida para o valor
inteiro correspondente, caso contrário, será convertida para zero
(`0`).

#### Convertendo a partir de [NULL](language.types.null.md)

**`null`** é sempre convertido para zero (`0`).

#### Convertendo a partir de outros tipos

**Cuidado**

O comportamento da conversão de um [int](language.types.integer.md) é desconhecido para outros
tipos. *Não* se deve depender de nenhum comportamento observado, pois ele pode
ser alterado sem aviso.

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
