# Obtém o valor da chave /STATUS

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-get-status.php

---

# fdf\_get\_status

(PHP 4, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_get\_status — Obtém o valor da chave /STATUS

### Descrição

function **fdf\_get\_status**([resource](language.types.resource.md) `$fdf_document`): [string](language.types.string.md)

Obtém o valor da chave `/STATUS`.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

### Valor Retornado

Retorna o valor da chave, como uma string.

### Veja também

- [fdf\_set\_status()](function.fdf-set-status.md) - Define o valor da chave /STATUS

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
