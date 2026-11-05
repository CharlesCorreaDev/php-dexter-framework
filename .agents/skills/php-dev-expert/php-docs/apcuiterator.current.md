# Obtém o item atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/apcuiterator.current.php

---

# APCUIterator::current

(PECL apcu >= 5.0.0)

APCUIterator::current — Obtém o item atual

### Descrição

public function **APCUIterator::current**(): [mixed](language.types.mixed.md)

Obtém o item atual da pilha do [APCUIterator](class.apcuiterator.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o item atual em caso de sucesso; ou **`false`** se não
existirem mais itens ou em caso de falha.

### Veja também

- [APCUIterator::next()](apcuiterator.next.md) - Move o ponteiro para o próximo item
- [Iterator::current()](iterator.current.md) - Retorna o elemento atual

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
