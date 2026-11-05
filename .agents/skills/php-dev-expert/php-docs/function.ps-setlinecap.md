# Define a aparência das extremidades da linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-setlinecap.php

---

# ps\_setlinecap

(PECL ps >= 1.1.0)

ps\_setlinecap — Define a aparência das extremidades da linha

### Descrição

function **ps\_setlinecap**([resource](language.types.resource.md) `$psdoc`, [int](language.types.integer.md) `$type`): [bool](language.types.boolean.md)

Define a aparência das extremidades da linha.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`type`
:   O tipo de extremidades da linha. Os valores possíveis são
    `PS_LINECAP_BUTT`,
    `PS_LINECAP_ROUND` ou
    `PS_LINECAP_SQUARED`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_setlinejoin()](function.ps-setlinejoin.md) - Define como as linhas conectadas são unidas
- [ps\_setlinewidth()](function.ps-setlinewidth.md) - Define a largura de uma linha
- [ps\_setmiterlimit()](function.ps-setmiterlimit.md) - Define o limite de esquadria

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
