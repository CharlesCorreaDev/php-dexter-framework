# Verifica se um campo existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.fieldexists.php

---

# SolrInputDocument::fieldExists

(PECL solr >= 0.9.2)

SolrInputDocument::fieldExists — Verifica se um campo existe

### Descrição

public function **SolrInputDocument::fieldExists**([string](language.types.string.md) `$fieldName`): [bool](language.types.boolean.md)

Verifica se um campo existe.

### Parâmetros

`fieldName`
:   Nome do campo.

### Valor Retornado

Retorna **`true`** se o campo for encontrado e **`false`** se não for.

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
