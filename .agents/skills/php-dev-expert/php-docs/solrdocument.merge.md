# Mescla o documento de origem com o SolrDocument atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.merge.php

---

# SolrDocument::merge

(PECL solr >= 0.9.2)

SolrDocument::merge — Mescla o documento de origem com o SolrDocument atual

### Descrição

public function **SolrDocument::merge**([SolrDocument](class.solrdocument.md) `$sourceDoc`, [bool](language.types.boolean.md) `$overwrite` = **`true`**): [bool](language.types.boolean.md)

Mescla o documento de origem com o SolrDocument atual.

### Parâmetros

`sourceDoc`
:   O documento de origem.

`overwrite`
:   Se isso for **`true`** então os campos com o mesmo nome no documento de destino serão substituídos.

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
