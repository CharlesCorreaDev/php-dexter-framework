# Define uma ação de envio de formulário de um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-set-submit-form-action.php

---

# fdf\_set\_submit\_form\_action

(PHP 4 >= 4.0.2, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_set\_submit\_form\_action — Define uma ação de envio de formulário de um campo

### Descrição

function **fdf\_set\_submit\_form\_action**(  
    [resource](language.types.resource.md) `$fdf_document`,  
    [string](language.types.string.md) `$fieldname`,  
    [int](language.types.integer.md) `$trigger`,  
    [string](language.types.string.md) `$script`,  
    [int](language.types.integer.md) `$flags`  
): [bool](language.types.boolean.md)

Define uma ação de envio de formulário para o campo fornecido.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

`fieldname`
:   Nome do campo FDF, como uma string.

`trigger`

`script`

`flags`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [fdf\_set\_javascript\_action()](function.fdf-set-javascript-action.md) - Define uma ação javascript de um campo

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
