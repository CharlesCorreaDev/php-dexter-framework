# Recupera o valor de uma propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrobject.offsetget.php

---

# SolrObject::offsetGet

(PECL solr >= 0.9.2)

SolrObject::offsetGet — Recupera o valor de uma propriedade

### Descrição

public function **SolrObject::offsetGet**([string](language.types.string.md) `$property_name`): [mixed](language.types.mixed.md)

Usado para obter o valor de uma propriedade. Isso é usado quando o objeto é tratado como um array.

### Parâmetros

`property_name`
:   Nome da propriedade.

### Valor Retornado

Retorna o valor da propriedade.

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
