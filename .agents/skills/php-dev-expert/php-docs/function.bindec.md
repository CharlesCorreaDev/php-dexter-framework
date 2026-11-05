# Binário para decimal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bindec.php

---

# bindec

(PHP 4, PHP 5, PHP 7, PHP 8)

bindec — Binário para decimal

### Descrição

function **bindec**([string](language.types.string.md) `$binary_string`): [int](language.types.integer.md)|[float](language.types.float.md)

Retorna o equivalente decimal do número binário representado pelo
argumento `binary_string`.

**bindec()** converte um número binário em um
[int](language.types.integer.md) ou, se necessário por questão de tamanho, um [float](language.types.float.md).

**bindec()** interpreta todos os
valores de `binary_string` como inteiros
sem sinal. Isto é devido a **bindec()** enxergar
o bit mais significativo como uma outra ordem de magnitude
e não como um bit de sinal.

### Parâmetros

`binary_string`
:   A string binária a converter.
    Quaisquer caracteres inválidos em `binary_string` são silenciosamente ignorados.
    A partir do PHP 7.4.0, fornecer qualquer caractere inválido foi descontinuado.

**Aviso**

O parâmetro deve ser uma string.
Usar outros tipos de dados produzirá resultados inesperados.

### Valor Retornado

O valor decimal de `binary_string`

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | Passar caracteres inválidos agora irá gerar uma nota de descontinuação. O resultado ainda será computado como se os caracteres inválidos não existissem. |

### Examples

**Exemplo #1 Exemplo de **bindec()****

```
<?php
echo bindec('110011') . "\n";
echo bindec('000110011') . "\n";

echo bindec('111');
?>
```

O exemplo acima produzirá:

```
51
51
7
```

**Exemplo #2 **bindec()** interpreta a entrada como inteiros sem sinal**

```
<?php
/*
 * A lição deste exemplo está na saída
 * e não no código do PHP em si.
 */

$magnitude_lower = pow(2, (PHP_INT_SIZE * 8) - 2);
p($magnitude_lower - 1);
p($magnitude_lower, 'Percebeu a rolagem?  Veja da próxima vez...');

p(PHP_INT_MAX, 'PHP_INT_MAX');
p(~PHP_INT_MAX, 'interpretado como um a mais que PHP_INT_MAX');

if (PHP_INT_SIZE == 4) {
    $note = 'interpretado como o maior inteiro sem sinal';
} else {
    $note = 'interpretado como o maior inteiro sem sinal
              (18446744073709551615) porém distorcido pela precisão de float';
}
p(-1, $note);

function p($input, $note = '') {
    echo "entrada:        $input\n";

    $format = '%0' . (PHP_INT_SIZE * 8) . 'b';
    $bin = sprintf($format, $input);
    echo "binário:       $bin\n";

    ini_set('precision', 20);  // Para legibilidade em máquinas 64 bits.
    $dec = bindec($bin);
    echo 'bindec():     ' . $dec . "\n";

    if ($note) {
        echo "NOTA:         $note\n";
    }

    echo "\n";
}
?>
```

Saída do exemplo acima em máquinas de 32 bits:

```
input:        1073741823
binary:       00111111111111111111111111111111
bindec():     1073741823

input:        1073741824
binary:       01000000000000000000000000000000
bindec():     1073741824
NOTE:         Percebeu a rolagem?  Veja da próxima vez...

input:        2147483647
binary:       01111111111111111111111111111111
bindec():     2147483647
NOTE:         PHP_INT_MAX

input:        -2147483648
binary:       10000000000000000000000000000000
bindec():     2147483648
NOTE:         interpretado como um a mais que PHP_INT_MAX

input:        -1
binary:       11111111111111111111111111111111
bindec():     4294967295
NOTE:         interpretado como o maior inteiro sem sinal
```

Saída do exemplo acima em máquinas de 64 bits:

```
input:        4611686018427387903
binary:       0011111111111111111111111111111111111111111111111111111111111111
bindec():     4611686018427387903

input:        4611686018427387904
binary:       0100000000000000000000000000000000000000000000000000000000000000
bindec():     4611686018427387904
NOTE:         Percebeu a rolagem?  Veja da próxima vez...

input:        9223372036854775807
binary:       0111111111111111111111111111111111111111111111111111111111111111
bindec():     9223372036854775807
NOTE:         PHP_INT_MAX

input:        -9223372036854775808
binary:       1000000000000000000000000000000000000000000000000000000000000000
bindec():     9223372036854775808
NOTE:         interpretado como um a mais que PHP_INT_MAX

input:        -1
binary:       1111111111111111111111111111111111111111111111111111111111111111
bindec():     18446744073709551616
NOTE:         interpretado como o maior inteiro sem sinal
              (18446744073709551615) porém distorcido pela precisão de float
```

### Notas

> **Nota**:
>
> A função pode converter números que são grandes demais para caber no tipo
> [int](language.types.integer.md) da plataforma, valores maiores são retornados como [float](language.types.float.md)
> neste caso.

### Veja também

- [decbin()](function.decbin.md) - Decimal para binário
- [octdec()](function.octdec.md) - Octal para decimal
- [hexdec()](function.hexdec.md) - Hexadecimal para decimal
- [base\_convert()](function.base-convert.md) - Converte um número entre bases arbitrárias

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
