# Retorna o número de campos do documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.getfieldcount.php

---

# SolrInputDocument::getFieldCount

(PECL solr >= 0.9.2)

SolrInputDocument::getFieldCount — Retorna o número de campos do documento

### Descrição

public function **SolrInputDocument::getFieldCount**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o número de campos do documento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um número inteiro em caso de sucesso ou **`false`** em caso de falha.

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
