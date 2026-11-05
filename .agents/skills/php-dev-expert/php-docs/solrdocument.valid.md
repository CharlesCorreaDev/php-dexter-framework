# Verifica se a posição atual internamente ainda é válida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.valid.php

---

# SolrDocument::valid

(PECL solr >= 0.9.2)

SolrDocument::valid — Verifica se a posição atual internamente ainda é válida

### Descrição

public function **SolrDocument::valid**(): [bool](language.types.boolean.md)

Verifica se a posição atual internamente ainda é válida. É usado durante operações foreach.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso e **`false`** se a posição atual não for mais válida.

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
