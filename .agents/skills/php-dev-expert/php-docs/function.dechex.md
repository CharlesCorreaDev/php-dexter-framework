# Decimal para hexadecimal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dechex.php

---

# dechex

(PHP 4, PHP 5, PHP 7, PHP 8)

dechex — Decimal para hexadecimal

### Descrição

function **dechex**([int](language.types.integer.md) `$num`): [string](language.types.string.md)

Retorna uma string contendo uma representação hexadecimal do
argumento sem sinal `num` fornecido.

O maior número que pode ser convertido é
**`PHP_INT_MAX`** `* 2 + 1` (ou
`-1`): em plataformas de 32 bits, será
`4294967295` em decimal, que resulta em
**dechex()** retornando `ffffffff`.

### Parâmetros

`num`
:   O valor decimal a ser convertido

    Como o tipo [int](language.types.integer.md) do PHP tem sinal, mas
    **dechex()** lida com inteiros sem sinal, inteiros
    negativos serão tratados como se fossem sem sinal.

### Valor Retornado

Representação de `num` em string hexadecimal.

### Examples

**Exemplo #1 Exemplo de **dechex()****

```
<?php
echo dechex(10) . "\n";
echo dechex(47);
?>
```

O exemplo acima produzirá:

```
a
2f
```

**Exemplo #2 Exemplo de **dechex()** com inteiros grandes**

```
<?php
// A saída abaixo assume uma plataforma de 32 bits.
// Note que a saída é a mesma para todos os valores.
echo dechex(-1)."\n";
echo dechex(PHP_INT_MAX * 2 + 1)."\n";
echo dechex(pow(2, 32) - 1)."\n";
?>
```

O exemplo acima produzirá:

```
ffffffff
ffffffff
ffffffff
```

### Veja também

- [hexdec()](function.hexdec.md) - Hexadecimal para decimal
- [decbin()](function.decbin.md) - Decimal para binário
- [decoct()](function.decoct.md) - Decimal para octal
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
