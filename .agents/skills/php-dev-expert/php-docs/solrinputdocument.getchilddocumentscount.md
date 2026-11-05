# Retorna o número de documentos filhos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.getchilddocumentscount.php

---

# SolrInputDocument::getChildDocumentsCount

(PECL solr >= 2.3.0)

SolrInputDocument::getChildDocumentsCount — Retorna o número de documentos filhos

### Descrição

public function **SolrInputDocument::getChildDocumentsCount**(): [int](language.types.integer.md)

Retorna o número de documentos filhos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrInputDocument::addChildDocument()](solrinputdocument.addchilddocument.md) - Adiciona um documento filho para indexação de bloco
- [SolrInputDocument::addChildDocuments()](solrinputdocument.addchilddocuments.md) - Adiciona um array de documentos filhos
- [SolrInputDocument::hasChildDocuments()](solrinputdocument.haschilddocuments.md) - Verifica se o documento possui algum documento filho
- [SolrInputDocument::getChildDocuments()](solrinputdocument.getchilddocuments.md) - Retorna um array de documentos filhos (SolrInputDocument)

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
