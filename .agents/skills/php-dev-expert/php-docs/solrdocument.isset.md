# Verifica se um campo existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.isset.php

---

# SolrDocument::\_\_isset

(PECL solr >= 0.9.2)

SolrDocument::\_\_isset — Verifica se um campo existe

### Descrição

public function **SolrDocument::\_\_isset**([string](language.types.string.md) `$fieldName`): [bool](language.types.boolean.md)

Verifica se um campo existe.

### Parâmetros

`fieldName`
:   Nome do campo.

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
