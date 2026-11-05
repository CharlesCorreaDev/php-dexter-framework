# Sinônimo de SolrParams::addParam

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrparams.add.php

---

# SolrParams::add

(PECL solr >= 0.9.2)

SolrParams::add — Sinônimo de [SolrParams::addParam()](solrparams.addparam.md)

### Descrição

final public function **SolrParams::add**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [SolrParams](class.solrparams.md)

Este é um sinônimo para SolrParams::addParam().

### Parâmetros

`name`
:   O nome do parâmetro

`value`
:   O valor do parâmetro

### Valor Retornado

Retorna uma instância SolrParams em caso de sucesso.

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
