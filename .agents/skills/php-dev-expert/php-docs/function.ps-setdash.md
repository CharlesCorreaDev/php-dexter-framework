# Define a aparência de uma linha tracejada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-setdash.php

---

# ps\_setdash

(PECL ps >= 1.1.0)

ps\_setdash — Define a aparência de uma linha tracejada

### Descrição

function **ps\_setdash**([resource](language.types.resource.md) `$psdoc`, [float](language.types.float.md) `$on`, [float](language.types.float.md) `$off`): [bool](language.types.boolean.md)

Define o comprimento das partes preta e branca de uma linha tracejada.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`on`
:   O comprimento do traço.

`off`
:   O comprimento do espaço entre os traços.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_setpolydash()](function.ps-setpolydash.md) - Define a aparência de uma linha tracejada

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
