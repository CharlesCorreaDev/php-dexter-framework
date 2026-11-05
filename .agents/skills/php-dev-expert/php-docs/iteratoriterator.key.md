# Obtém a chave do elemento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/iteratoriterator.key.php

---

# IteratorIterator::key

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

IteratorIterator::key — Obtém a chave do elemento atual

### Descrição

public function **IteratorIterator::key**(): [mixed](language.types.mixed.md)

Obtém a chave do elemento atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A chave do elemento atual.

### Veja também

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
