# Retorna um array de documentos filhos (SolrInputDocument)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.getchilddocuments.php

---

# SolrInputDocument::getChildDocuments

(PECL solr >= 2.3.0)

SolrInputDocument::getChildDocuments — Retorna um array de documentos filhos (SolrInputDocument)

### Descrição

public function **SolrInputDocument::getChildDocuments**(): [array](language.types.array.md)

Retorna um array de documentos filhos (SolrInputDocument).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrInputDocument::addChildDocument()](solrinputdocument.addchilddocument.md) - Adiciona um documento filho para indexação de bloco
- [SolrInputDocument::addChildDocuments()](solrinputdocument.addchilddocuments.md) - Adiciona um array de documentos filhos
- [SolrInputDocument::hasChildDocuments()](solrinputdocument.haschilddocuments.md) - Verifica se o documento possui algum documento filho
- [SolrInputDocument::getChildDocumentsCount()](solrinputdocument.getchilddocumentscount.md) - Retorna o número de documentos filhos

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
