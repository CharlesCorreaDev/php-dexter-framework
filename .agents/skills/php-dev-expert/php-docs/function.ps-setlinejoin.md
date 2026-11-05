# Define como as linhas conectadas são unidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-setlinejoin.php

---

# ps\_setlinejoin

(PECL ps >= 1.1.0)

ps\_setlinejoin — Define como as linhas conectadas são unidas

### Descrição

function **ps\_setlinejoin**([resource](language.types.resource.md) `$psdoc`, [int](language.types.integer.md) `$type`): [bool](language.types.boolean.md)

Define como as linhas são unidas.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`type`
:   A maneira como as linhas são unidas. Os valores possíveis são
    `PS_LINEJOIN_MITER`,
    `PS_LINEJOIN_ROUND` ou
    `PS_LINEJOIN_BEVEL`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_setlinecap()](function.ps-setlinecap.md) - Define a aparência das extremidades da linha
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
