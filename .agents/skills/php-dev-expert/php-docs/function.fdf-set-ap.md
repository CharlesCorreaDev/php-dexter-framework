# Define a aparência de um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-set-ap.php

---

# fdf\_set\_ap

(PHP 4, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_set\_ap — Define a aparência de um campo

### Descrição

function **fdf\_set\_ap**(  
    [resource](language.types.resource.md) `$fdf_document`,  
    [string](language.types.string.md) `$field_name`,  
    [int](language.types.integer.md) `$face`,  
    [string](language.types.string.md) `$filename`,  
    [int](language.types.integer.md) `$page_number`  
): [bool](language.types.boolean.md)

Define a aparência de um campo (ou seja, o valor da
chave `/AP`).

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

`field_name`

`face`
:   Os valores possíveis são **`FDFNormalAP`**,
    **`FDFRolloverAP`** e
    **`FDFDownAP`**.

`filename`

`page_number`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
