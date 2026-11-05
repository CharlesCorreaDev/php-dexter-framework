# Octal para decimal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.octdec.php

---

# octdec

(PHP 4, PHP 5, PHP 7, PHP 8)

octdec — Octal para decimal

### Descrição

function **octdec**([string](language.types.string.md) `$octal_string`): [int](language.types.integer.md)|[float](language.types.float.md)

Retorna o decimal equivalente do número octal
representado pelo argumento `octal_string`.

### Parâmetros

`octal_string`
:   A string octal a ser convertida.
    Quaisquer caracteres inválidos em `octal_string` são ignorados silenciosamente.
    A partir do PHP 7.4.0, informar caracteres inválidos foi descontinuado.

### Valor Retornado

A representação decimal de `octal_string`

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | Passar caracteres inválidos gerará um aviso de descontinuação. O resultado será calculado como se os caracteres inválidos não existissem. |

### Examples

**Exemplo #1 Exemplo da **octdec()****

```
<?php
echo octdec('77') . "\n";
echo octdec(decoct(45));
?>
```

O exemplo acima produzirá:

```
63
45
```

### Notas

> **Nota**:
>
> A função pode converter números que são muito grandes para caber no tipo
> [int](language.types.integer.md) da plataforma, e nesse caso os valores são retornados como
> [float](language.types.float.md).

### Veja também

- [decoct()](function.decoct.md) - Decimal para octal
- [bindec()](function.bindec.md) - Binário para decimal
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
