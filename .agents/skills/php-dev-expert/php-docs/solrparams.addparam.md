# Adiciona um parâmetro ao objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrparams.addparam.php

---

# SolrParams::addParam

(PECL solr >= 0.9.2)

SolrParams::addParam — Adiciona um parâmetro ao objeto

### Descrição

public function **SolrParams::addParam**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [SolrParams](class.solrparams.md)

Adiciona um parâmetro ao objeto. Isso é usado para parâmetros que podem ser especificados diversas vezes.

### Parâmetros

`name`
:   Nome do parâmetro

`value`
:   Valor do parâmetro

### Valor Retornado

Retorna um objeto SolrParam em caso de sucesso e **`false`** em caso de falha.

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
