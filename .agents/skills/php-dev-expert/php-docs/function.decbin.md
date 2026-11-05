# Decimal para binário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.decbin.php

---

# decbin

(PHP 4, PHP 5, PHP 7, PHP 8)

decbin — Decimal para binário

### Descrição

function **decbin**([int](language.types.integer.md) `$num`): [string](language.types.string.md)

Retorna uma string contendo uma representação binária do argumento
`num` informado.

### Parâmetros

`num`
:   Valor decimal a ser convertido

    **Limites de entrada em máquinas de 32 bits**

    | `num` positivo | `num` negativo | valor de retorno |
    | --- | --- | --- |
    | 0 |  | 0 |
    | 1 |  | 1 |
    | 2 |  | 10 |
    | ... progressão normal ... | | |
    | 2147483646 |  | 1111111111111111111111111111110 |
    | 2147483647 (maior inteiro com sinal) |  | 1111111111111111111111111111111 (31 números 1) |
    | 2147483648 | -2147483648 | 10000000000000000000000000000000 |
    | ... progressão normal ... | | |
    | 4294967294 | -2 | 11111111111111111111111111111110 |
    | 4294967295 (maior inteiro sem sinal) | -1 | 11111111111111111111111111111111 (32 números 1) |

    **Limites de entrada em máquinas de 64 bits**

    | `num` positivo | `num` negativo | valor de retorno |
    | --- | --- | --- |
    | 0 |  | 0 |
    | 1 |  | 1 |
    | 2 |  | 10 |
    | ... progressão normal ... | | |
    | 9223372036854775806 |  | 111111111111111111111111111111111111111111111111111111111111110 |
    | 9223372036854775807 (maior inteiro com sinal) |  | 111111111111111111111111111111111111111111111111111111111111111 (63 números 1) |
    |  | -9223372036854775808 | 1000000000000000000000000000000000000000000000000000000000000000 |
    | ... progressão normal ... | | |
    |  | -2 | 1111111111111111111111111111111111111111111111111111111111111110 |
    |  | -1 | 1111111111111111111111111111111111111111111111111111111111111111 (64 números 1) |

### Valor Retornado

Representação de `num` em string binária.

### Examples

**Exemplo #1 Exemplo de **decbin()****

```
<?php
echo decbin(12) . "\n";
echo decbin(26);
?>
```

O exemplo acima produzirá:

```
1100
11010
```

### Veja também

- [bindec()](function.bindec.md) - Binário para decimal
- [decoct()](function.decoct.md) - Decimal para octal
- [dechex()](function.dechex.md) - Decimal para hexadecimal
- [base\_convert()](function.base-convert.md) - Converte um número entre bases arbitrárias
- [printf()](function.printf.md) - Envia uma string formatada para a saída, usando `%b`,
  `%032b` ou `%064b` como formato
- [sprintf()](function.sprintf.md) - Retona uma string formatada, usando `%b`,
  `%032b` ou `%064b` como formato

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
