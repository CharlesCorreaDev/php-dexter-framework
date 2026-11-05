# Finaliza Iteração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursiveiteratoriterator.enditeration.php

---

# RecursiveIteratorIterator::endIteration

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveIteratorIterator::endIteration — Finaliza Iteração

### Descrição

public function **RecursiveIteratorIterator::endIteration**(): [void](language.types.void.md)

Chamado quando a iteração termina (quando [RecursiveIteratorIterator::valid()](recursiveiteratoriterator.valid.md)
retorna pela primeira vez **`false`**).

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
