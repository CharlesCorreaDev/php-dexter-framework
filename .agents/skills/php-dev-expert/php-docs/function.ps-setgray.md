# Define o valor de cinza

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-setgray.php

---

# ps\_setgray

(PECL ps >= 1.1.0)

ps\_setgray — Define o valor de cinza

### Descrição

function **ps\_setgray**([resource](language.types.resource.md) `$psdoc`, [float](language.types.float.md) `$gray`): [bool](language.types.boolean.md)

Define o valor de cinza para todas as operações de desenho seguintes.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`gray`
:   O valor deve estar entre 0 (branco) e 1 (preto).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_setcolor()](function.ps-setcolor.md) - Define a cor atual

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
