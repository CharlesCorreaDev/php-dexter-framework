# Adiciona um campo ao documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.addfield.php

---

# SolrDocument::addField

(PECL solr >= 0.9.2)

SolrDocument::addField — Adiciona um campo ao documento

### Descrição

public function **SolrDocument::addField**([string](language.types.string.md) `$fieldName`, [string](language.types.string.md) `$fieldValue`): [bool](language.types.boolean.md)

Este método adiciona um campo à instância SolrDocument.

### Parâmetros

`fieldName`
:   O nome do campo.

`fieldValue`
:   O valor do campo.

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
