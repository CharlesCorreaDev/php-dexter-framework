# Retrocede o Iterator para o primeiro elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/internaliterator.rewind.php

---

# InternalIterator::rewind

(PHP 8)

InternalIterator::rewind — Retrocede o Iterator para o primeiro elemento

### Descrição

public function **InternalIterator::rewind**(): [void](language.types.void.md)

Retrocede para o primeiro elemento do Iterator.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

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
