# Hexadecimal para decimal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hexdec.php

---

# hexdec

(PHP 4, PHP 5, PHP 7, PHP 8)

hexdec — Hexadecimal para decimal

### Descrição

function **hexdec**([string](language.types.string.md) `$hex_string`): [int](language.types.integer.md)|[float](language.types.float.md)

Retorna o equivalente em decimal do número hexadecimal
representado pelo argumento `hex_string`.
**hexdec()** converte uma string hexadecimal para um
número decimal.

**hexdec()** irá ignorar qualquer caractere não
hexadecimal que encontrar.
A partir do PHP 7.4.0 fornecer caracteres inválidos foi descontinuado.

### Parâmetros

`hex_string`
:   A string hexadecimal a ser convertida

### Valor Retornado

A representação decimal de `hex_string`

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | Passar caracteres inválidos agora irá gerar uma nota de descontinuação. O resultado ainda será computado como se os caracteres inválidos não existissem. |

### Examples

**Exemplo #1 Exemplo de **hexdec()****

```
<?php
var_dump(hexdec("ee")); // exibe "int(238)"
var_dump(hexdec("a0")); // exibe "int(160)"
?>
```

**Exemplo #2 **hexdec()** com caracteres inválidos**

```
<?php
var_dump(hexdec("See"));  // print "int(238)"
var_dump(hexdec("that")); // mostra "int(10)"
?>
```

### Notas

> **Nota**:
>
> A função pode converter números que são longos demais para caber nos tipos
> [int](language.types.integer.md) das plataformas, valores maiores são retornados como [float](language.types.float.md) neste
> caso.

### Veja também

- [dechex()](function.dechex.md) - Decimal para hexadecimal
- [bindec()](function.bindec.md) - Binário para decimal
- [octdec()](function.octdec.md) - Octal para decimal
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
