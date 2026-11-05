# Usado para desserialização personalizada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrparams.unserialize.php

---

# SolrParams::unserialize

(PECL solr >= 0.9.2)

SolrParams::unserialize — Usado para desserialização personalizada

### Descrição

final public function **SolrParams::unserialize**([string](language.types.string.md) `$serialized`): [void](language.types.void.md)

Usado para desserialização personalizada.

### Parâmetros

`serialized`
:   A representação serializada do objeto.

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
