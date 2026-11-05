# Divide uma string multibyte usando expressão regular

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-split.php

---

# mb\_split

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

mb\_split — Divide uma string multibyte usando expressão regular

### Descrição

function **mb\_split**([string](language.types.string.md) `$pattern`, [string](language.types.string.md) `$string`, [int](language.types.integer.md) `$limit` = -1): [array](language.types.array.md)|[false](language.types.singleton.md)

Divide uma
`string` multibyte usando expressão regular
`pattern` e retorna o resultado como um
[array](language.types.array.md).

### Parâmetros

`pattern`
:   O padrão da expressão regular.

`string`
:   A [string](language.types.string.md) sendo dividida.

`limit`
:   Se o parâmetro opcional `limit` for especificado,
    ele será dividido em `limit` elementos no
    máximo.

### Valor Retornado

O resultado como um [array](language.types.array.md), ou **`false`** em caso de falha.

### Notas

> **Nota**:
>
> A
> codificação de caracteres especificada por [mb\_regex\_encoding()](function.mb-regex-encoding.md)
> será usada como a codificação de caracteres para esta função por padrão.

### Veja também

- [mb\_regex\_encoding()](function.mb-regex-encoding.md) - Define/Obtém codificação de caracteres para regex multibyte
- [mb\_ereg()](function.mb-ereg.md) - Correspondência de expressão regular com suporte multibyte
- [explode()](function.explode.md) - Divide uma string com base em outra string

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
