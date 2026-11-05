# Retorna um array de nomes de campos no documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.getfieldnames.php

---

# SolrDocument::getFieldNames

(PECL solr >= 0.9.2)

SolrDocument::getFieldNames — Retorna um array de nomes de campos no documento

### Descrição

public function **SolrDocument::getFieldNames**(): [array](language.types.array.md)

Retorna um array de nomes de campos no documento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array contendo os nomes dos campos deste documento.

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
