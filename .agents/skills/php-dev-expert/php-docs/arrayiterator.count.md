# Conta os elementos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.count.php

---

# ArrayIterator::count

(PHP 5, PHP 7, PHP 8)

ArrayIterator::count — Conta os elementos

### Descrição

public function **ArrayIterator::count**(): [int](language.types.integer.md)

Retorna o número de elementos no [array](language.types.array.md), ou o número de
atributos públicos no [object](language.types.object.md).

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número de elementos ou atributos públicos no
[array](language.types.array.md) ou [object](language.types.object.md), respectivamente.

### Veja também

- [ArrayIterator::getFlags()](arrayiterator.getflags.md) - Retorna as flags de comportamento

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
