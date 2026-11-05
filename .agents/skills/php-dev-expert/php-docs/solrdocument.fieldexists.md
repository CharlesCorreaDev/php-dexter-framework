# Verifica se um campo existe no documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.fieldexists.php

---

# SolrDocument::fieldExists

(PECL solr >= 0.9.2)

SolrDocument::fieldExists — Verifica se um campo existe no documento

### Descrição

public function **SolrDocument::fieldExists**([string](language.types.string.md) `$fieldName`): [bool](language.types.boolean.md)

Verifica se o campo solicitado é um nome de campo válido no documento.

### Parâmetros

`fieldName`
:   O nome do campo.

### Valor Retornado

Retorna **`true`** se o campo estiver presente e **`false`** se não estiver.

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
