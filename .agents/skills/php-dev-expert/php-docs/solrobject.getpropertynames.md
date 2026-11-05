# Retorna um array com todos os nomes das propriedades

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrobject.getpropertynames.php

---

# SolrObject::getPropertyNames

(PECL solr >= 0.9.2)

SolrObject::getPropertyNames — Retorna um array com todos os nomes das propriedades

### Descrição

public function **SolrObject::getPropertyNames**(): [array](language.types.array.md)

Retorna um array com todos os nomes das propriedades.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array.

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
