# Retorna um valor de parâmetro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrparams.getparam.php

---

# SolrParams::getParam

(PECL solr >= 0.9.2)

SolrParams::getParam — Retorna um valor de parâmetro

### Descrição

final public function **SolrParams::getParam**([string](language.types.string.md) `$param_name` = ?): [mixed](language.types.mixed.md)

Retorna um parâmetro com nome `param_name`.

### Parâmetros

`param_name`
:   O nome do parâmetro.

### Valor Retornado

Retorna um [string](language.types.string.md) ou um [array](language.types.array.md) dependendo do tipo do parâmetro.

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
