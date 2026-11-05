# Recupera o valor de impulso para um campo específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.getfieldboost.php

---

# SolrInputDocument::getFieldBoost

(PECL solr >= 0.9.2)

SolrInputDocument::getFieldBoost — Recupera o valor de impulso para um campo específico

### Descrição

public function **SolrInputDocument::getFieldBoost**([string](language.types.string.md) `$fieldName`): [float](language.types.float.md)

Recupera o valor de impulso para um campo específico.

### Parâmetros

`fieldName`
:   O nome do campo.

### Valor Retornado

Retorna o valor de impulso do campo ou **`false`** se houver um erro.

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
