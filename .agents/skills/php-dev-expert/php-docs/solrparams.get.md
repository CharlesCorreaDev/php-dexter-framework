# Sinônimo de SolrParams::getParam

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrparams.get.php

---

# SolrParams::get

(PECL solr >= 0.9.2)

SolrParams::get — Sinônimo de [SolrParams::getParam()](solrparams.getparam.md)

### Descrição

final public function **SolrParams::get**([string](language.types.string.md) `$param_name`): [mixed](language.types.mixed.md)

Este é um sinônimo para SolrParams::getParam().

### Parâmetros

`param_name`
:   O nome do parâmetro

### Valor Retornado

Retorna um array ou string dependendo do tipo de parâmetro.

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
