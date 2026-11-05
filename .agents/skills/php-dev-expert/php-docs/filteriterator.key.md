# Retorna a chave do elemento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filteriterator.key.php

---

# FilterIterator::key

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

FilterIterator::key — Retorna a chave do elemento atual

### Descrição

public function **FilterIterator::key**(): [mixed](language.types.mixed.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Obtém a chave atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A chave atual.

### Veja também

- [FilterIterator::next()](filteriterator.next.md) - Avança o iterador
- [FilterIterator::current()](filteriterator.current.md) - Retorna o valor do elemento atual

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
