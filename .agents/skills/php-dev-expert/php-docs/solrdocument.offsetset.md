# Adiciona um campo ao documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.offsetset.php

---

# SolrDocument::offsetSet

(PECL solr >= 0.9.2)

SolrDocument::offsetSet — Adiciona um campo ao documento

### Descrição

public function **SolrDocument::offsetSet**([string](language.types.string.md) `$fieldName`, [string](language.types.string.md) `$fieldValue`): [void](language.types.void.md)

Usado quando o objeto é tratado como um array para adicionar um campo ao documento.

### Parâmetros

`fieldName`
:   O nome do campo.

`fieldValue`
:   O valor deste campo.

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
