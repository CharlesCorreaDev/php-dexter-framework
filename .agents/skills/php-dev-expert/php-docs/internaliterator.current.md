# Retorna o elemento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/internaliterator.current.php

---

# InternalIterator::current

(PHP 8)

InternalIterator::current — Retorna o elemento atual

### Descrição

public function **InternalIterator::current**(): [mixed](language.types.mixed.md)

Retorna o elemento atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o elemento atual.

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
