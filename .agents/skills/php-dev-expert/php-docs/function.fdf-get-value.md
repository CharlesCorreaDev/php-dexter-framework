# Obtém o valor de um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-get-value.php

---

# fdf\_get\_value

(PHP 4, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_get\_value — Obtém o valor de um campo

### Descrição

function **fdf\_get\_value**([resource](language.types.resource.md) `$fdf_document`, [string](language.types.string.md) `$fieldname`, [int](language.types.integer.md) `$which` = -1): [mixed](language.types.mixed.md)

Obtém o valor do campo solicitado.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

`fieldname`
:   Nome do campo FDF, como uma string.

`which`
:   Elementos de um campo array podem ser recuperados passando este parâmetro
    opcional, começando em zero. Para campos não array, este parâmetro será
    ignorado.

### Valor Retornado

Retorna o valor do campo.

### Veja também

- [fdf\_set\_value()](function.fdf-set-value.md) - Define o valor de um campo

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
