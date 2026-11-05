# Retorna o número de documentos filhos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.getchilddocumentscount.php

---

# SolrDocument::getChildDocumentsCount

(PECL solr >= 2.3.0)

SolrDocument::getChildDocumentsCount — Retorna o número de documentos filhos

### Descrição

public function **SolrDocument::getChildDocumentsCount**(): [int](language.types.integer.md)

Retorna o número de documentos filhos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrDocument::hasChildDocuments()](solrdocument.haschilddocuments.md) - Verifica se o documento possui algum documento filho
- [SolrDocument::getChildDocuments()](solrdocument.getchilddocuments.md) - Retorna um array de documentos filhos (SolrDocument)

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
