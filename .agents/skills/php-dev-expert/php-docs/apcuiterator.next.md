# Move o ponteiro para o próximo item

> **Fonte / Source:** https://www.php.net/manual/pt_BR/apcuiterator.next.php

---

# APCUIterator::next

(PECL apcu >= 5.0.0)

APCUIterator::next — Move o ponteiro para o próximo item

### Descrição

public function **APCUIterator::next**(): [bool](language.types.boolean.md)

Move o ponteiro do iterador para o próximo elemento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [APCUIterator::current()](apcuiterator.current.md) - Obtém o item atual
- [APCUIterator::rewind()](apcuiterator.rewind.md) - Rebobina o iterador
- [Iterator::next()](iterator.next.md) - Move para o próximo elemento

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
