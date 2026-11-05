# Obtém a aparência de um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-get-ap.php

---

# fdf\_get\_ap

(PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_get\_ap — Obtém a aparência de um campo

### Descrição

function **fdf\_get\_ap**(  
    [resource](language.types.resource.md) `$fdf_document`,  
    [string](language.types.string.md) `$field`,  
    [int](language.types.integer.md) `$face`,  
    [string](language.types.string.md) `$filename`  
): [bool](language.types.boolean.md)

Obtém a aparência de um campo informado no parâmetro `field` (ou seja, o valor da
chave /AP) e o armazena em um arquivo.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

`field`

`face`
:   Os valores possíveis são **`FDFNormalAP`**,
    **`FDFRolloverAP`** e **`FDFDownAP`**.

`filename`
:   A aparência será armazenada neste parâmetro.

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
