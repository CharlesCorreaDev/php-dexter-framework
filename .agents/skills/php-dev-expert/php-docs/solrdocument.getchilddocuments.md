# Retorna um array de documentos filhos (SolrDocument)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.getchilddocuments.php

---

# SolrDocument::getChildDocuments

(PECL solr >= 2.3.0)

SolrDocument::getChildDocuments — Retorna um array de documentos filhos (SolrDocument)

### Descrição

public function **SolrDocument::getChildDocuments**(): [array](language.types.array.md)

Retorna um array de documentos filhos (SolrDocument).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrDocument::hasChildDocuments()](solrdocument.haschilddocuments.md) - Verifica se o documento possui algum documento filho
- [SolrDocument::getChildDocumentsCount()](solrdocument.getchilddocumentscount.md) - Retorna o número de documentos filhos

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
