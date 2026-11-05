# Fecha um documento FDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-close.php

---

# fdf\_close

(PHP 4, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_close — Fecha um documento FDF

### Descrição

function **fdf\_close**([resource](language.types.resource.md) `$fdf_document`): [void](language.types.void.md)

Fecha o documento FDF

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [fdf\_open()](function.fdf-open.md) - Abre um documento FDF

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
