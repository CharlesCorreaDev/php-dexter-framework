# Verifica se existe um campo específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.offsetexists.php

---

# SolrDocument::offsetExists

(PECL solr >= 0.9.2)

SolrDocument::offsetExists — Verifica se existe um campo específico

### Descrição

public function **SolrDocument::offsetExists**([string](language.types.string.md) `$fieldName`): [bool](language.types.boolean.md)

Verifica se existe um campo específico. Isso é usado quando o objeto é tratado como um array.

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
