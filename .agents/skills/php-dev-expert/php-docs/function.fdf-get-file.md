# Obtém o valor da chave /F

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-get-file.php

---

# fdf\_get\_file

(PHP 4, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_get\_file — Obtém o valor da chave /F

### Descrição

function **fdf\_get\_file**([resource](language.types.resource.md) `$fdf_document`): [string](language.types.string.md)

Obtém o valor da chave `/F`.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

### Valor Retornado

Retorna o valor da chave, como uma string.

### Veja também

- [fdf\_set\_file()](function.fdf-set-file.md) - Define o documento PDF para exibição de dados FDF

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
