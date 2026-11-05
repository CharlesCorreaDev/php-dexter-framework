# Define o valor de impulso para este documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.setboost.php

---

# SolrInputDocument::setBoost

(PECL solr >= 0.9.2)

SolrInputDocument::setBoost — Define o valor de impulso para este documento

### Descrição

public function **SolrInputDocument::setBoost**([float](language.types.float.md) `$documentBoostValue`): [bool](language.types.boolean.md)

Define o valor de impulso para este documento.

### Parâmetros

`documentBoostValue`
:   O valor de impulso no momento da indexação para este documento.

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
