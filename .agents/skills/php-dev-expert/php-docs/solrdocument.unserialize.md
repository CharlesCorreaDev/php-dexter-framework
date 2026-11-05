# Serialização personalizada de objetos SolrDocument

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.unserialize.php

---

# SolrDocument::unserialize

(PECL solr >= 0.9.2)

SolrDocument::unserialize — Serialização personalizada de objetos SolrDocument

### Descrição

public function **SolrDocument::unserialize**([string](language.types.string.md) `$serialized`): [void](language.types.void.md)

Serialização personalizada de objetos SolrDocument.

### Parâmetros

`serialized`
:   Uma representação XML do documento.

### Valor Retornado

Nenhum.

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
