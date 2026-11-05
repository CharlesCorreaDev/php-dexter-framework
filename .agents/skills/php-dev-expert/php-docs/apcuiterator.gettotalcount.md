# Obtém a contagem total

> **Fonte / Source:** https://www.php.net/manual/pt_BR/apcuiterator.gettotalcount.php

---

# APCUIterator::getTotalCount

(PECL apcu >= 5.0.0)

APCUIterator::getTotalCount — Obtém a contagem total

### Descrição

public function **APCUIterator::getTotalCount**(): [int](language.types.integer.md)

Obtém a contagem total.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A contagem total.

### Veja também

- [APCUIterator::getTotalHits()](apcuiterator.gettotalhits.md) - Obtém o total de entradas de cache
- [APCUIterator::getTotalSize()](apcuiterator.gettotalsize.md) - Obtém o tamanho total do cache
- [apcu\_cache\_info()](function.apcu-cache-info.md) - Recupera informação em cache a partir do armazenamento de dados do APCu

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
