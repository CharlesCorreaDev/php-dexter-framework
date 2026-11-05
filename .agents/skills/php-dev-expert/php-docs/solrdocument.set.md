# Adiciona outro campo ao documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.set.php

---

# SolrDocument::\_\_set

(PECL solr >= 0.9.2)

SolrDocument::\_\_set — Adiciona outro campo ao documento

### Descrição

public function **SolrDocument::\_\_set**([string](language.types.string.md) `$fieldName`, [string](language.types.string.md) `$fieldValue`): [bool](language.types.boolean.md)

Adiciona outro campo ao documento. Usado para definir os campos como novas propriedades.

### Parâmetros

`fieldName`
:   Nome do campo.

`fieldValue`
:   Valor do campo.

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
