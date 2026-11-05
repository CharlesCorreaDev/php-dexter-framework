# Define profundidade máxima

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursiveiteratoriterator.setmaxdepth.php

---

# RecursiveIteratorIterator::setMaxDepth

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveIteratorIterator::setMaxDepth — Define profundidade máxima

### Descrição

public function **RecursiveIteratorIterator::setMaxDepth**([int](language.types.integer.md) `$maxDepth` = -1): [void](language.types.void.md)

Define a profundidade máxima permitida.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`maxDepth`
:   A profundidade máxima permitida. `-1` é usado
    para qualquer profundidade.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Emite uma [Exception](class.exception.md) se `maxDepth` for menor que `-1`.

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
