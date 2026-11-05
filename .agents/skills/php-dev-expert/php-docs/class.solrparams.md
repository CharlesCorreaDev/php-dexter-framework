# A classe SolrParams

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.solrparams.php

---

# A classe SolrParams

(PECL solr >= 0.9.2)

## Introdução

Representa uma coleção de pares nome-valor enviados ao servidor Solr durante uma solicitação.

## Resumo da classe

abstract
class **SolrParams**
implements
[Serializable](class.serializable.md) {

/\* Métodos \*/

final public function [add](solrparams.add.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [SolrParams](class.solrparams.md)

public function [addParam](solrparams.addparam.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [SolrParams](class.solrparams.md)

final public function [get](solrparams.get.md)([string](language.types.string.md) `$param_name`): [mixed](language.types.mixed.md)

final public function [getParam](solrparams.getparam.md)([string](language.types.string.md) `$param_name` = ?): [mixed](language.types.mixed.md)

final public function [getParams](solrparams.getparams.md)(): [array](language.types.array.md)

final public function [getPreparedParams](solrparams.getpreparedparams.md)(): [array](language.types.array.md)

final public function [serialize](solrparams.serialize.md)(): [string](language.types.string.md)

final public function [set](solrparams.set.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [void](language.types.void.md)

public function [setParam](solrparams.setparam.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [SolrParams](class.solrparams.md)

final public function [toString](solrparams.tostring.md)([bool](language.types.boolean.md) `$url_encode` = **`false`**): [string](language.types.string.md)

final public function [unserialize](solrparams.unserialize.md)([string](language.types.string.md) `$serialized`): [void](language.types.void.md)

}

## Índice

- [SolrParams::add](solrparams.add.md) — Sinônimo de SolrParams::addParam
- [SolrParams::addParam](solrparams.addparam.md) — Adiciona um parâmetro ao objeto
- [SolrParams::get](solrparams.get.md) — Sinônimo de SolrParams::getParam
- [SolrParams::getParam](solrparams.getparam.md) — Retorna um valor de parâmetro
- [SolrParams::getParams](solrparams.getparams.md) — Retorna um array de parâmetros não codificados em URL
- [SolrParams::getPreparedParams](solrparams.getpreparedparams.md) — Retorna um array de parâmetros codificados em URL
- [SolrParams::serialize](solrparams.serialize.md) — Usado para serialização personalizada
- [SolrParams::set](solrparams.set.md) — Sinônimo de SolrParams::setParam
- [SolrParams::setParam](solrparams.setparam.md) — Define o parâmetro para o valor especificado
- [SolrParams::toString](solrparams.tostring.md) — Retorna todos os parâmetros do par nome-valor no objeto
- [SolrParams::unserialize](solrparams.unserialize.md) — Usado para desserialização personalizada

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
