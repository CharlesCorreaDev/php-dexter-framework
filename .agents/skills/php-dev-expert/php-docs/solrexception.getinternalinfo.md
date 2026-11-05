# Retorna informações internas de onde a exceção foi lançada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrexception.getinternalinfo.php

---

# SolrException::getInternalInfo

(PECL solr >= 0.9.2)

SolrException::getInternalInfo — Retorna informações internas de onde a exceção foi lançada

### Descrição

public function **SolrException::getInternalInfo**(): [array](language.types.array.md)

Retorna informações internas de onde a exceção foi lançada

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array contendo informações internas de onde o erro foi gerado. Usado apenas para depuração por desenvolvedores de extensões.

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
