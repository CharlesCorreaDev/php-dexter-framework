# Define planicidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-setflat.php

---

# ps\_setflat

(PECL ps >= 1.1.0)

ps\_setflat — Define planicidade

### Descrição

function **ps\_setflat**([resource](language.types.resource.md) `$psdoc`, [float](language.types.float.md) `$value`): [bool](language.types.boolean.md)

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`value`
:   O parâmetro `value` deve estar entre 0.2 e 1.

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
