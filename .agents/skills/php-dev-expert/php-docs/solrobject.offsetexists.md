# Verifica se a propriedade existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrobject.offsetexists.php

---

# SolrObject::offsetExists

(PECL solr >= 0.9.2)

SolrObject::offsetExists — Verifica se a propriedade existe

### Descrição

public function **SolrObject::offsetExists**([string](language.types.string.md) `$property_name`): [bool](language.types.boolean.md)

Verifica se a propriedade existe. Isso é usado quando o objeto é tratado como um array.

### Parâmetros

`property_name`
:   O nome da propriedade.

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
