# Analisa uma string XML de resposta em um SolrObject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrutils.digestxmlresponse.php

---

# SolrUtils::digestXmlResponse

(PECL solr >= 0.9.2)

SolrUtils::digestXmlResponse — Analisa uma string XML de resposta em um SolrObject

### Descrição

public static function **SolrUtils::digestXmlResponse**([string](language.types.string.md) `$xmlresponse`, [int](language.types.integer.md) `$parse_mode` = 0): [SolrObject](class.solrobject.md)

Este método analisa uma string XML de resposta do servidor Apache Solr em um SolrObject. Ele lança uma SolrException se houver um erro.

### Parâmetros

`xmlresponse`
:   A string de resposta XML do servidor Solr.

`parse_mode`
:   Use SolrResponse::PARSE\_SOLR\_OBJ ou SolrResponse::PARSE\_SOLR\_DOC.

### Valor Retornado

Retorna o SolrObject que representa a resposta XML.

Se o parâmetro parse\_mode estiver definido como SolrResponse::PARSE\_SOLR\_OBJ, os documentos Solr serão analisados ​​como instâncias SolrObject.

Se estiver definido como SolrResponse::PARSE\_SOLR\_DOC, eles serão analisados ​​como instâncias SolrDocument.

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
