# A classe SolrObject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.solrobject.php

---

# A classe SolrObject

(PECL solr >= 0.9.2)

## Introdução

Este é um objeto cujas propriedades também podem ser acessadas usando a sintaxe de array. Todas as suas propriedades são somente leitura.

## Resumo da classe

final
class **SolrObject**
implements
[ArrayAccess](class.arrayaccess.md) {

/\* Métodos \*/

public function [\_\_construct](solrobject.construct.md)()

public function [getPropertyNames](solrobject.getpropertynames.md)(): [array](language.types.array.md)

public function [offsetExists](solrobject.offsetexists.md)([string](language.types.string.md) `$property_name`): [bool](language.types.boolean.md)

public function [offsetGet](solrobject.offsetget.md)([string](language.types.string.md) `$property_name`): [mixed](language.types.mixed.md)

public function [offsetSet](solrobject.offsetset.md)([string](language.types.string.md) `$property_name`, [string](language.types.string.md) `$property_value`): [void](language.types.void.md)

public function [offsetUnset](solrobject.offsetunset.md)([string](language.types.string.md) `$property_name`): [void](language.types.void.md)

public function [\_\_destruct](solrobject.destruct.md)()

}

## Índice

- [SolrObject::\_\_construct](solrobject.construct.md) — Cria um objeto Solr
- [SolrObject::\_\_destruct](solrobject.destruct.md) — Destrutor
- [SolrObject::getPropertyNames](solrobject.getpropertynames.md) — Retorna um array com todos os nomes das propriedades
- [SolrObject::offsetExists](solrobject.offsetexists.md) — Verifica se a propriedade existe
- [SolrObject::offsetGet](solrobject.offsetget.md) — Recupera o valor de uma propriedade
- [SolrObject::offsetSet](solrobject.offsetset.md) — Define o valor de uma propriedade
- [SolrObject::offsetUnset](solrobject.offsetunset.md) — Desativa o valor da propriedade

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
