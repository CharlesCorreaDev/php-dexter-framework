# Requer correspondência de campo durante o destaque

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlightrequirefieldmatch.php

---

# SolrQuery::setHighlightRequireFieldMatch

(PECL solr >= 0.9.2)

SolrQuery::setHighlightRequireFieldMatch — Requer correspondência de campo durante o destaque

### Descrição

public function **SolrQuery::setHighlightRequireFieldMatch**([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

Se **`true`**, um campo só será destacado se a consulta corresponder a esse campo específico.

Isso só funcionará se SolrQuery::setHighlightUsePhraseHighlighter() estiver definido como **`true`**.

### Parâmetros

`flag`
:   **`true`** ou **`false`**

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
