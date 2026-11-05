# Define o valor de impulso no momento da indexação para um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.setfieldboost.php

---

# SolrInputDocument::setFieldBoost

(PECL solr >= 0.9.2)

SolrInputDocument::setFieldBoost — Define o valor de impulso no momento da indexação para um campo

### Descrição

public function **SolrInputDocument::setFieldBoost**([string](language.types.string.md) `$fieldName`, [float](language.types.float.md) `$fieldBoostValue`): [bool](language.types.boolean.md)

Define o valor de impulso no momento da indexação para um campo. Isso substitui o valor de impulso atual para este campo.

### Parâmetros

`fieldName`
:   O nome do campo.

`fieldBoostValue`
:   O valor de impulso no momento da indexação.

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
