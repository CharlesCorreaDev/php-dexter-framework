# Retorna o elemento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/iterator.current.php

---

# Iterator::current

(PHP 5, PHP 7, PHP 8)

Iterator::current — Retorna o elemento atual

### Descrição

public function **Iterator::current**(): [mixed](language.types.mixed.md)

Retorna o elemento atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Pode retornar qualquer tipo.

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
