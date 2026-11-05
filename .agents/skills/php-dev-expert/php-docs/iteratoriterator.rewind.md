# Rebobina para o primeiro elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/iteratoriterator.rewind.php

---

# IteratorIterator::rewind

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

IteratorIterator::rewind — Rebobina para o primeiro elemento

### Descrição

public function **IteratorIterator::rewind**(): [void](language.types.void.md)

Rebobina para o primeiro elemento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [IteratorIterator::next()](iteratoriterator.next.md) - Avança para o próximo elemento
- [IteratorIterator::valid()](iteratoriterator.valid.md) - Verifica se o elemento atual é válido

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
