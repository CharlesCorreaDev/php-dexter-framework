# Classifica os campos dentro do documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.sort.php

---

# SolrInputDocument::sort

(PECL solr >= 0.9.2)

SolrInputDocument::sort — Classifica os campos dentro do documento

### Descrição

public function **SolrInputDocument::sort**([int](language.types.integer.md) `$sortOrderBy`, [int](language.types.integer.md) `$sortDirection` = SolrInputDocument::SORT\_ASC): [bool](language.types.boolean.md)

```
Os campos são reorganizados de acordo com os critérios especificados e a direção de classificação

   Os campos podem ser classificados por valores de impulso, nomes de campos e número de valores.

   O parâmetro $order_by deve ser um dos seguintes:

   * SolrInputDocument::SORT_FIELD_NAME
   * SolrInputDocument::SORT_FIELD_BOOST_VALUE
   * SolrInputDocument::SORT_FIELD_VALUE_COUNT

   A direção de classificação pode ser uma das seguintes:

   * SolrInputDocument::SORT_DEFAULT
   * SolrInputDocument::SORT_ASC
   * SolrInputDocument::SORT_DESC
```

### Parâmetros

`sortOrderBy`
:   Os critérios de classificação

`sortDirection`
:   A direção de classificação

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
