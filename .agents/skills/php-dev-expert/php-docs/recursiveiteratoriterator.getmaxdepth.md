# Obtém a profundidade máxima

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursiveiteratoriterator.getmaxdepth.php

---

# RecursiveIteratorIterator::getMaxDepth

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveIteratorIterator::getMaxDepth — Obtém a profundidade máxima

### Descrição

public function **RecursiveIteratorIterator::getMaxDepth**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém a profundidade máxima permitida.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A profundidade máxima aceita, ou **`false`** se qualquer profundidade for permitida.

### Veja também

- [RecursiveIteratorIterator::setMaxDepth()](recursiveiteratoriterator.setmaxdepth.md) - Define profundidade máxima

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
