# A classe SolrModifiableParams

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.solrmodifiableparams.php

---

# A classe SolrModifiableParams

(PECL solr >= 0.9.2)

## Introdução

Representa uma coleção de pares nome-valor enviados ao servidor Solr durante uma solicitação.

## Resumo da classe

class **SolrModifiableParams**

extends
[SolrParams](class.solrparams.md)
implements
[Serializable](class.serializable.md) {

/\* Métodos \*/

public function [\_\_construct](solrmodifiableparams.construct.md)()

public function [\_\_destruct](solrmodifiableparams.destruct.md)()

/\* Métodos herdados \*/

final public function [SolrParams::add](solrparams.add.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [SolrParams](class.solrparams.md)

public function [SolrParams::addParam](solrparams.addparam.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [SolrParams](class.solrparams.md)

final public function [SolrParams::get](solrparams.get.md)([string](language.types.string.md) `$param_name`): [mixed](language.types.mixed.md)

final public function [SolrParams::getParam](solrparams.getparam.md)([string](language.types.string.md) `$param_name` = ?): [mixed](language.types.mixed.md)

final public function [SolrParams::getParams](solrparams.getparams.md)(): [array](language.types.array.md)

final public function [SolrParams::getPreparedParams](solrparams.getpreparedparams.md)(): [array](language.types.array.md)

final public function [SolrParams::serialize](solrparams.serialize.md)(): [string](language.types.string.md)

final public function [SolrParams::set](solrparams.set.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [void](language.types.void.md)

public function [SolrParams::setParam](solrparams.setparam.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [SolrParams](class.solrparams.md)

final public function [SolrParams::toString](solrparams.tostring.md)([bool](language.types.boolean.md) `$url_encode` = **`false`**): [string](language.types.string.md)

final public function [SolrParams::unserialize](solrparams.unserialize.md)([string](language.types.string.md) `$serialized`): [void](language.types.void.md)

}

## Índice

- [SolrModifiableParams::\_\_construct](solrmodifiableparams.construct.md) — Construtor
- [SolrModifiableParams::\_\_destruct](solrmodifiableparams.destruct.md) — Destrutor

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
