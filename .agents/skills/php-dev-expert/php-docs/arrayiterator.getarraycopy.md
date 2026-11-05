# Obtém cópia do array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.getarraycopy.php

---

# ArrayIterator::getArrayCopy

(PHP 5, PHP 7, PHP 8)

ArrayIterator::getArrayCopy — Obtém cópia do array

### Descrição

public function **ArrayIterator::getArrayCopy**(): [array](language.types.array.md)

Obtém uma cópia de um array.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma cópia do [array](language.types.array.md), ou um array de propriedades públicas
se o ArrayIterator referir-se a um [object](language.types.object.md).

### Veja também

- [ArrayIterator::valid()](arrayiterator.valid.md) - Verifica se o iterador de array contém mais entradas

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
