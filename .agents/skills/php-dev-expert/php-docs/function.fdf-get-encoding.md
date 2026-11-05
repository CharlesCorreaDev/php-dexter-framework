# Obtém o valor da chave /Encoding

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-get-encoding.php

---

# fdf\_get\_encoding

(PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_get\_encoding — Obtém o valor da chave /Encoding

### Descrição

function **fdf\_get\_encoding**([resource](language.types.resource.md) `$fdf_document`): [string](language.types.string.md)

Obtém o valor da chave `/Encoding`.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

### Valor Retornado

Retorna a codificação como uma string. Uma string vazia é retornada se o
esquema `PDFDocEncoding/Unicode` padrão for usado.

### Veja também

- [fdf\_set\_encoding()](function.fdf-set-encoding.md) - Define a codificação de caracteres FDF

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
