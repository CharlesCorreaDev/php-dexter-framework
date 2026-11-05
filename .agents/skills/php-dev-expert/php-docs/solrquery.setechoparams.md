# Determina que tipo de parâmetros são incluídos na resposta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setechoparams.php

---

# SolrQuery::setEchoParams

(PECL solr >= 0.9.2)

SolrQuery::setEchoParams — Determina que tipo de parâmetros são incluídos na resposta

### Descrição

public function **SolrQuery::setEchoParams**([string](language.types.string.md) `$type`): [SolrQuery](class.solrquery.md)

Informa ao Solr quais tipos de parâmetros de solicitação devem ser incluídos na resposta para fins de depuração. Os valores legais incluem:

```
- none - não inclui nenhum parâmetro de solicitação para depuração
- explicit - inclui os parâmetros especificados explicitamente pelo cliente na solicitação
- all - inclui todos os parâmetros envolvidos nesta solicitação, especificados explicitamente pelo cliente ou implícitos devido à configuração do manipulador de solicitações
```

### Parâmetros

`type`
:   O tipo de parâmetros a serem incluídos.

### Valor Retornado

Retorna o objeto SolrQuery atual, se o valor de retorno for usado.

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
