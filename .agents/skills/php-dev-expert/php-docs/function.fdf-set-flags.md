# Define um sinalizador de um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-set-flags.php

---

# fdf\_set\_flags

(PHP 4 >= 4.0.2, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_set\_flags — Define um sinalizador de um campo

### Descrição

function **fdf\_set\_flags**(  
    [resource](language.types.resource.md) `$fdf_document`,  
    [string](language.types.string.md) `$fieldname`,  
    [int](language.types.integer.md) `$whichFlags`,  
    [int](language.types.integer.md) `$newFlags`  
): [bool](language.types.boolean.md)

Define determinados sinalizadores do campo fornecido.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

`fieldname`
:   Nome do campo FDF, como uma string.

`whichFlags`

`newFlags`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [fdf\_set\_opt()](function.fdf-set-opt.md) - Define uma opção de um campo

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
