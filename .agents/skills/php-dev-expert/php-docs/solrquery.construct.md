# Construtor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.construct.php

---

# SolrQuery::\_\_construct

(PECL solr >= 0.9.2)

SolrQuery::\_\_construct — Construtor

### Descrição

public function **SolrQuery::\_\_construct**([string](language.types.string.md) `$q` = ?)

Construtor.

### Parâmetros

`q`
:   Consulta de pesquisa opcional

### Valor Retornado

Nenhum

### Erros/Exceções

Lança [SolrIllegalArgumentException](class.solrillegalargumentexception.md) caso um parâmetro inválido tenha sido passado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL solr 2.0.0 | Se `q` for inválido, uma [SolrIllegalArgumentException](class.solrillegalargumentexception.md) é lançada. Anteriormente, um erro era emitido. |

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
