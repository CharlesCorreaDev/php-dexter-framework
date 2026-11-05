# Define uma opção de um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-set-opt.php

---

# fdf\_set\_opt

(PHP 4 >= 4.0.2, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_set\_opt — Define uma opção de um campo

### Descrição

function **fdf\_set\_opt**(  
    [resource](language.types.resource.md) `$fdf_document`,  
    [string](language.types.string.md) `$fieldname`,  
    [int](language.types.integer.md) `$element`,  
    [string](language.types.string.md) `$str1`,  
    [string](language.types.string.md) `$str2`  
): [bool](language.types.boolean.md)

Define opções do campo fornecido.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

`fieldname`
:   Nome do campo FDF, como uma string.

`element`

`str1`

`str2`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [fdf\_set\_flags()](function.fdf-set-flags.md) - Define um sinalizador de um campo

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
