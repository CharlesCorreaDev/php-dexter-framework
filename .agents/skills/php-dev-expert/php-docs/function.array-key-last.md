# Obtém a última chave de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-key-last.php

---

# array\_key\_last

(PHP 7 >= 7.3.0, PHP 8)

array\_key\_last — Obtém a última chave de um array

### Descrição

function **array\_key\_last**([array](language.types.array.md) `$array`): [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md)

Obtém a última chave do `array` fornecido sem afetar
o ponteiro do array interno.

### Parâmetros

`array`
:   Um array.

### Valor Retornado

Retorna a última chave do `array` se o array não estiver vazio;
**`null`** caso contrário.

### Veja também

- [array\_last()](function.array-last.md) - Obtém o último valor de um array
- [array\_key\_first()](function.array-key-first.md) - Obtém a primeira chave de um array
- [end()](function.end.md) - Define o ponteiro interno de um array para seu último elemento

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
