# Define o modo de sobreimpressão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-setoverprintmode.php

---

# ps\_setoverprintmode

(PECL ps >= 1.3.0)

ps\_setoverprintmode — Define o modo de sobreimpressão

### Descrição

function **ps\_setoverprintmode**([resource](language.types.resource.md) `$psdoc`, [int](language.types.integer.md) `$mode`): [bool](language.types.boolean.md)

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`mode`

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
