# Retorna o valor do elemento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filteriterator.current.php

---

# FilterIterator::current

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

FilterIterator::current — Retorna o valor do elemento atual

### Descrição

public function **FilterIterator::current**(): [mixed](language.types.mixed.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Obtém o valor do atual elemento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor do elemento atual.

### Veja também

- [FilterIterator::key()](filteriterator.key.md) - Retorna a chave do elemento atual
- [FilterIterator::next()](filteriterator.next.md) - Avança o iterador

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
