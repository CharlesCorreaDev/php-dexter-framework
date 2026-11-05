# Retorna informações internas de onde a exceção foi lançada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrillegalargumentexception.getinternalinfo.php

---

# SolrIllegalArgumentException::getInternalInfo

(PECL solr >= 0.9.2)

SolrIllegalArgumentException::getInternalInfo — Retorna informações internas de onde a exceção foi lançada

### Descrição

public function **SolrIllegalArgumentException::getInternalInfo**(): [array](language.types.array.md)

Retorna informações internas de onde a exceção foi lançada.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array contendo informações internas onde o erro foi gerado. Usado apenas para depuração por desenvolvedores de extensões.

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
