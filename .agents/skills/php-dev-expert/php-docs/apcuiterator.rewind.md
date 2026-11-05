# Rebobina o iterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/apcuiterator.rewind.php

---

# APCUIterator::rewind

(PECL apcu >= 5.0.0)

APCUIterator::rewind — Rebobina o iterador

### Descrição

public function **APCUIterator::rewind**(): [void](language.types.void.md)

Retrocede o iterador para o primeiro elemento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [APCUIterator::next()](apcuiterator.next.md) - Move o ponteiro para o próximo item
- [Iterator::next()](iterator.next.md) - Move para o próximo elemento

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
