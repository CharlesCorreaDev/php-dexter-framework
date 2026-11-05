# Obtém o valor atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/iteratoriterator.current.php

---

# IteratorIterator::current

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

IteratorIterator::current — Obtém o valor atual

### Descrição

public function **IteratorIterator::current**(): [mixed](language.types.mixed.md)

Obtém o valor do elemento atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor do elemento atual.

### Veja também

- [IteratorIterator::key()](iteratoriterator.key.md) - Obtém a chave do elemento atual

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
