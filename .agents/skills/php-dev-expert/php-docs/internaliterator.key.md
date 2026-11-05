# Retorna a chave do elemento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/internaliterator.key.php

---

# InternalIterator::key

(PHP 8)

InternalIterator::key — Retorna a chave do elemento atual

### Descrição

public function **InternalIterator::key**(): [mixed](language.types.mixed.md)

Retorna a chave do elemento atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a chave do elemento atual.

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
