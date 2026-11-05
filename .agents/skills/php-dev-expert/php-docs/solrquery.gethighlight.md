# Retorna o estado do parâmetro hl

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gethighlight.php

---

# SolrQuery::getHighlight

(PECL solr >= 0.9.2)

SolrQuery::getHighlight — Retorna o estado do parâmetro hl

### Descrição

public function **SolrQuery::getHighlight**(): [bool](language.types.boolean.md)

Retorna um booleano que indica se é necessário ativar a geração de trechos destacados na resposta da consulta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um booleano em caso de sucesso e **`null`** se não estiver definido.

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
