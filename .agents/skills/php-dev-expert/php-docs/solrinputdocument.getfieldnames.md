# Retorna um array contendo todos os campos do documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.getfieldnames.php

---

# SolrInputDocument::getFieldNames

(PECL solr >= 0.9.2)

SolrInputDocument::getFieldNames — Retorna um array contendo todos os campos do documento

### Descrição

public function **SolrInputDocument::getFieldNames**(): [array](language.types.array.md)

Retorna um array contendo todos os campos do documento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array em caso de sucesso e **`false`** em caso de falha.

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
