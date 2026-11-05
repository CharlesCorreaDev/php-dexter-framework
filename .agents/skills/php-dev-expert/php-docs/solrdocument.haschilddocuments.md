# Verifica se o documento possui algum documento filho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.haschilddocuments.php

---

# SolrDocument::hasChildDocuments

(PECL solr >= 2.3.0)

SolrDocument::hasChildDocuments — Verifica se o documento possui algum documento filho

### Descrição

public function **SolrDocument::hasChildDocuments**(): [bool](language.types.boolean.md)

Verifica se o documento possui algum documento filho.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrDocument::getChildDocuments()](solrdocument.getchilddocuments.md) - Retorna um array de documentos filhos (SolrDocument)
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
