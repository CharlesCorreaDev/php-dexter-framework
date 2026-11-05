# A classe SolrCollapseFunction

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.solrcollapsefunction.php

---

# A classe SolrCollapseFunction

(PECL solr >= 2.2.0)

## Introdução

## Resumo da classe

class **SolrCollapseFunction**
{

/\* Constantes \*/

const
[string](language.types.string.md)
[NULLPOLICY\_IGNORE](class.solrcollapsefunction.md#solrcollapsefunction.constants.nullpolicy-ignore) = ignore;

const
[string](language.types.string.md)
[NULLPOLICY\_EXPAND](class.solrcollapsefunction.md#solrcollapsefunction.constants.nullpolicy-expand) = expand;

const
[string](language.types.string.md)
[NULLPOLICY\_COLLAPSE](class.solrcollapsefunction.md#solrcollapsefunction.constants.nullpolicy-collapse) = collapse;

/\* Métodos \*/

public function [\_\_construct](solrcollapsefunction.construct.md)([string](language.types.string.md) `$field` = ?)

public function [getField](solrcollapsefunction.getfield.md)(): [string](language.types.string.md)

public function [getHint](solrcollapsefunction.gethint.md)(): [string](language.types.string.md)

public function [getMax](solrcollapsefunction.getmax.md)(): [string](language.types.string.md)

public function [getMin](solrcollapsefunction.getmin.md)(): [string](language.types.string.md)

public function [getNullPolicy](solrcollapsefunction.getnullpolicy.md)(): [string](language.types.string.md)

public function [getSize](solrcollapsefunction.getsize.md)(): [int](language.types.integer.md)

public function [setField](solrcollapsefunction.setfield.md)([string](language.types.string.md) `$fieldName`): [SolrCollapseFunction](class.solrcollapsefunction.md)

public function [setHint](solrcollapsefunction.sethint.md)([string](language.types.string.md) `$hint`): [SolrCollapseFunction](class.solrcollapsefunction.md)

public function [setMax](solrcollapsefunction.setmax.md)([string](language.types.string.md) `$max`): [SolrCollapseFunction](class.solrcollapsefunction.md)

public function [setMin](solrcollapsefunction.setmin.md)([string](language.types.string.md) `$min`): [SolrCollapseFunction](class.solrcollapsefunction.md)

public function [setNullPolicy](solrcollapsefunction.setnullpolicy.md)([string](language.types.string.md) `$nullPolicy`): [SolrCollapseFunction](class.solrcollapsefunction.md)

public function [setSize](solrcollapsefunction.setsize.md)([int](language.types.integer.md) `$size`): [SolrCollapseFunction](class.solrcollapsefunction.md)

public function [\_\_toString](solrcollapsefunction.tostring.md)(): [string](language.types.string.md)

}

## Constantes predefinidas

**`SolrCollapseFunction::NULLPOLICY_IGNORE`**

**`SolrCollapseFunction::NULLPOLICY_EXPAND`**

**`SolrCollapseFunction::NULLPOLICY_COLLAPSE`**

## Índice

- [SolrCollapseFunction::\_\_construct](solrcollapsefunction.construct.md) — Construtor
- [SolrCollapseFunction::getField](solrcollapsefunction.getfield.md) — Retorna o campo que está sendo colapsado
- [SolrCollapseFunction::getHint](solrcollapsefunction.gethint.md) — Retorna dica de colapso
- [SolrCollapseFunction::getMax](solrcollapsefunction.getmax.md) — Retorna o parâmetro "max"
- [SolrCollapseFunction::getMin](solrcollapsefunction.getmin.md) — Retorna o parâmetro "min"
- [SolrCollapseFunction::getNullPolicy](solrcollapsefunction.getnullpolicy.md) — Retorna política para NULL
- [SolrCollapseFunction::getSize](solrcollapsefunction.getsize.md) — Retorna o parâmetro de tamanho
- [SolrCollapseFunction::setField](solrcollapsefunction.setfield.md) — Define o campo para ser colapsado
- [SolrCollapseFunction::setHint](solrcollapsefunction.sethint.md) — Define dica de colapso
- [SolrCollapseFunction::setMax](solrcollapsefunction.setmax.md) — Seleciona os cabeçalhos dos grupos pelo valor máximo de um campo numérico ou consulta de função
- [SolrCollapseFunction::setMin](solrcollapsefunction.setmin.md) — Define o tamanho inicial das estruturas de dados colapsadas ao recolher apenas em um campo numérico
- [SolrCollapseFunction::setNullPolicy](solrcollapsefunction.setnullpolicy.md) — Define a política para NULL
- [SolrCollapseFunction::setSize](solrcollapsefunction.setsize.md) — Define o tamanho inicial das estruturas de dados colapsadas ao colapsar apenas em um campo numérico
- [SolrCollapseFunction::\_\_toString](solrcollapsefunction.tostring.md) — Retorna uma string representando a função de colapso construída

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
