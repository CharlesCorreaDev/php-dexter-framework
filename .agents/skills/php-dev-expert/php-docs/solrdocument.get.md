# Acessa o campo como uma propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.get.php

---

# SolrDocument::\_\_get

(PECL solr >= 0.9.2)

SolrDocument::\_\_get — Acessa o campo como uma propriedade

### Descrição

public function **SolrDocument::\_\_get**([string](language.types.string.md) `$fieldName`): [SolrDocumentField](class.solrdocumentfield.md)

Método mágico para acessar o campo como propriedade.

### Parâmetros

`fieldName`
:   O nome do campo.

### Valor Retornado

Retorna uma instância SolrDocumentField.

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
