# Inicia Iteração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursiveiteratoriterator.beginiteration.php

---

# RecursiveIteratorIterator::beginIteration

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveIteratorIterator::beginIteration — Inicia Iteração

### Descrição

public function **RecursiveIteratorIterator::beginIteration**(): [void](language.types.void.md)

Chamado quando a iteração começa (após a primeira chamada de
[RecursiveIteratorIterator::rewind()](recursiveiteratoriterator.rewind.md)).

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

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
