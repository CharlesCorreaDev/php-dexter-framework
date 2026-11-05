# Avança para o próximo elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/iteratoriterator.next.php

---

# IteratorIterator::next

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

IteratorIterator::next — Avança para o próximo elemento

### Descrição

public function **IteratorIterator::next**(): [void](language.types.void.md)

Avança para o próximo elemento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [IteratorIterator::rewind()](iteratoriterator.rewind.md) - Rebobina para o primeiro elemento
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
