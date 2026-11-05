# Obtém o total de entradas de cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/apcuiterator.gettotalhits.php

---

# APCUIterator::getTotalHits

(PECL apcu >= 5.0.0)

APCUIterator::getTotalHits — Obtém o total de entradas de cache

### Descrição

public function **APCUIterator::getTotalHits**(): [int](language.types.integer.md)

Obtém o número total de entradas de cache.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número de entradas em caso de sucesso, ou **`false`** em caso de falha.

### Veja também

- [APCUIterator::getTotalCount()](apcuiterator.gettotalcount.md) - Obtém a contagem total
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
