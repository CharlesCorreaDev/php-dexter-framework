# Adiciona um campo ao documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.addfield.php

---

# SolrInputDocument::addField

(PECL solr >= 0.9.2)

SolrInputDocument::addField — Adiciona um campo ao documento

### Descrição

public function **SolrInputDocument::addField**([string](language.types.string.md) `$fieldName`, [string](language.types.string.md) `$fieldValue`, [float](language.types.float.md) `$fieldBoostValue` = 0.0): [bool](language.types.boolean.md)

Para campos de vários valores, se um valor de aumento válido for especificado, o valor especificado será multiplicado pelo valor de aumento atual para este campo.

### Parâmetros

`fieldName`
:   O nome do campo.

`fieldValue`
:   O valor do campo.

`fieldBoostValue`
:   O impulso no momento de indexação para o campo. Embora não possa ser negativo, ainda podem ser passados passar valores menores que 1.0, mas eles devem ser maiores que zero.

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
