# Verifica se a posição atual é válida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/apcuiterator.valid.php

---

# APCUIterator::valid

(PECL apcu >= 5.0.0)

APCUIterator::valid — Verifica se a posição atual é válida

### Descrição

public function **APCUIterator::valid**(): [bool](language.types.boolean.md)

Verifica se a posição atual do iterador é válida.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a posição atual do iterador for válida, caso contrário retorna **`false`**.

### Veja também

- [APCUIterator::current()](apcuiterator.current.md) - Obtém o item atual
- [Iterator::valid()](iterator.valid.md) - Verifica se a posição atual é válida

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
