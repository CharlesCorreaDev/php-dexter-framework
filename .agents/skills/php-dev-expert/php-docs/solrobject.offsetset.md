# Define o valor de uma propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrobject.offsetset.php

---

# SolrObject::offsetSet

(PECL solr >= 0.9.2)

SolrObject::offsetSet — Define o valor de uma propriedade

### Descrição

public function **SolrObject::offsetSet**([string](language.types.string.md) `$property_name`, [string](language.types.string.md) `$property_value`): [void](language.types.void.md)

Define o valor de uma propriedade. Isso é usado quando o objeto é tratado como um array. Este objeto é somente leitura. Isso nunca deve ser tentado.

### Parâmetros

`property_name`
:   O nome da propriedade.

`property_value`
:   O novo valor.

### Valor Retornado

Nenhum.

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
