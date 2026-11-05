# Define o modo de análise

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrresponse.setparsemode.php

---

# SolrResponse::setParseMode

(PECL solr >= 0.9.2)

SolrResponse::setParseMode — Define o modo de análise

### Descrição

public function **SolrResponse::setParseMode**([int](language.types.integer.md) `$parser_mode` = 0): [bool](language.types.boolean.md)

Define o modo de análise.

### Parâmetros

`parser_mode`
:   SolrResponse::PARSE\_SOLR\_DOC analisa documentos em instâncias SolrDocument. SolrResponse::PARSE\_SOLR\_OBJ analisa o documento em SolrObjects.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
