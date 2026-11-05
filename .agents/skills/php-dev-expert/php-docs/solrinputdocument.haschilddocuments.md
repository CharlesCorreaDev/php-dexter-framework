# Verifica se o documento possui algum documento filho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.haschilddocuments.php

---

# SolrInputDocument::hasChildDocuments

(PECL solr >= 2.3.0)

SolrInputDocument::hasChildDocuments — Verifica se o documento possui algum documento filho

### Descrição

public function **SolrInputDocument::hasChildDocuments**(): [bool](language.types.boolean.md)

Verifica se o documento possui algum documento filho

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrInputDocument::addChildDocument()](solrinputdocument.addchilddocument.md) - Adiciona um documento filho para indexação de bloco
- [SolrInputDocument::addChildDocuments()](solrinputdocument.addchilddocuments.md) - Adiciona um array de documentos filhos
- [SolrInputDocument::getChildDocuments()](solrinputdocument.getchilddocuments.md) - Retorna um array de documentos filhos (SolrInputDocument)
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
