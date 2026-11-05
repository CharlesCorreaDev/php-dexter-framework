# Decimal para octal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.decoct.php

---

# decoct

(PHP 4, PHP 5, PHP 7, PHP 8)

decoct — Decimal para octal

### Descrição

function **decoct**([int](language.types.integer.md) `$num`): [string](language.types.string.md)

Retorna uma string contendo uma representação octal do argumento
`num` fornecido. O maior número que pode ser
convertido depende da plataforma em uso. Para plataformas de 32 bits é
normalmente `4294967295` em decimal, resultando em
`37777777777`. Para plataformas de 64 bits é normalmente
`9223372036854775807` em decimal resultando em
`777777777777777777777`.

### Parâmetros

`num`
:   Valor decimal a ser convertido

### Valor Retornado

Representação de `num` em string octal.

### Examples

**Exemplo #1 Exemplo de **decoct()****

```
<?php
echo decoct(15) . "\n";
echo decoct(264);
?>
```

O exemplo acima produzirá:

```
17
410
```

### Veja também

- [octdec()](function.octdec.md) - Octal para decimal
- [decbin()](function.decbin.md) - Decimal para binário
- [dechex()](function.dechex.md) - Decimal para hexadecimal
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
