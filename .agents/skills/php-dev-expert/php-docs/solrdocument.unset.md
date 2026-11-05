# Remove um campo do documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.unset.php

---

# SolrDocument::\_\_unset

(PECL solr >= 0.9.2)

SolrDocument::\_\_unset — Remove um campo do documento

### Descrição

public function **SolrDocument::\_\_unset**([string](language.types.string.md) `$fieldName`): [bool](language.types.boolean.md)

Remove um campo do documento quando o campo é acessado como uma propriedade do objeto.

### Parâmetros

`fieldName`
:   O nome do campo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
