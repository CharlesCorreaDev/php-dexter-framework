# Obtém o tamanho total do cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/apcuiterator.gettotalsize.php

---

# APCUIterator::getTotalSize

(PECL apcu >= 5.0.0)

APCUIterator::getTotalSize — Obtém o tamanho total do cache

### Descrição

public function **APCUIterator::getTotalSize**(): [int](language.types.integer.md)

Obtém o tamanho total do cache.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O tamanho total do cache.

### Veja também

- [APCUIterator::getTotalCount()](apcuiterator.gettotalcount.md) - Obtém a contagem total
- [APCUIterator::getTotalHits()](apcuiterator.gettotalhits.md) - Obtém o total de entradas de cache
- **apc\_cache\_info()**

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
