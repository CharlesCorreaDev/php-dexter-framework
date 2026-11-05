# Sinônimo de SolrParams::setParam

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrparams.set.php

---

# SolrParams::set

(PECL solr >= 0.9.2)

SolrParams::set — Sinônimo de [SolrParams::setParam()](solrparams.setparam.md)

### Descrição

final public function **SolrParams::set**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [void](language.types.void.md)

Um sinônimo de SolrParams::setParam().

### Parâmetros

`name`
:   O nome do parâmetro.

`value`
:   O valor do parâmetro.

### Valor Retornado

Retorna uma instância do objeto SolrParams em caso de sucesso.

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
