# Verifica se a posição atual é válida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/internaliterator.valid.php

---

# InternalIterator::valid

(PHP 8)

InternalIterator::valid — Verifica se a posição atual é válida

### Descrição

public function **InternalIterator::valid**(): [bool](language.types.boolean.md)

Verifica se a posição atual é válida.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna verdadeiro se a posição atual é válida, falso se inválida.

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
