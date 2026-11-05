# Verifica se o elemento atual é válido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/iteratoriterator.valid.php

---

# IteratorIterator::valid

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

IteratorIterator::valid — Verifica se o elemento atual é válido

### Descrição

public function **IteratorIterator::valid**(): [bool](language.types.boolean.md)

Verifica se o elemento atual é válido.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o elemento atual for válido, caso contrário **`false`**

### Veja também

- [iterator\_count()](function.iterator-count.md) - Conta os elementos em um iterador
- [IteratorIterator::current()](iteratoriterator.current.md) - Obtém o valor atual

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
