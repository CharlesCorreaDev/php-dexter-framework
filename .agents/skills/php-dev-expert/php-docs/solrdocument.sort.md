# Classifica os campos do documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.sort.php

---

# SolrDocument::sort

(PECL solr >= 0.9.2)

SolrDocument::sort — Classifica os campos do documento

### Descrição

public function **SolrDocument::sort**([int](language.types.integer.md) `$sortOrderBy`, [int](language.types.integer.md) `$sortDirection` = SolrDocument::SORT\_ASC): [bool](language.types.boolean.md)

```
Os campos são reorganizados de acordo com os critérios especificados e a direção de classificação.

   Os campos podem ser classificados por valores de impulso, nomes de campos e número de valores.

   O parâmetro sortOrderBy deve ser um dos seguintes:

   * SolrDocument::SORT_FIELD_NAME
   * SolrDocument::SORT_FIELD_BOOST_VALUE
   * SolrDocument::SORT_FIELD_VALUE_COUNT

   O sortDirection pode ser um dos seguintes:

   * SolrDocument::SORT_DEFAULT
   * SolrDocument::SORT_ASC
   * SolrDocument::SORT_DESC

   O padrão é classificar em ordem crescente.
```

### Parâmetros

`sortOrderBy`
:   Os critérios de classificação.

`sortDirection`
:   A direção da classificação.

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
