# Retorna a versão atual da extensão Solr

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrutils.getsolrversion.php

---

# SolrUtils::getSolrVersion

(PECL solr >= 0.9.2)

SolrUtils::getSolrVersion — Retorna a versão atual da extensão Solr

### Descrição

public static function **SolrUtils::getSolrVersion**(): [string](language.types.string.md)

Retorna a versão atual da extensão Solr.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A versão atual da extensão Apache Solr.

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
