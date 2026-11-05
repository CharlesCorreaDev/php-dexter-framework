# A classe ArrayObject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.arrayobject.php

---

# A classe ArrayObject

(PHP 5, PHP 7, PHP 8)

## Introdução

Esta classe permite que objetos funcionem como arrays.

> **Nota**:
>
> Empacotar objetos com esta classe tem uma falha fundamental e portanto seu uso com objetos é desencorajado.

## Resumo da classe

class ****ArrayObject****
implements
[IteratorAggregate](class.iteratoraggregate.md),
[ArrayAccess](class.arrayaccess.md),
[Serializable](class.serializable.md),
[Countable](class.countable.md) {

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[STD\_PROP\_LIST](class.arrayobject.md#arrayobject.constants.std-prop-list);

public
const
[int](language.types.integer.md)
[ARRAY\_AS\_PROPS](class.arrayobject.md#arrayobject.constants.array-as-props);

/\* Métodos \*/

public function [\_\_construct](arrayobject.construct.md)([array](language.types.array.md)|[object](language.types.object.md) `$array` = [], [int](language.types.integer.md) `$flags` = 0, [string](language.types.string.md) `$iteratorClass` = **`ArrayIterator::class`**)

public function [append](arrayobject.append.md)([mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [asort](arrayobject.asort.md)([int](language.types.integer.md) `$flags` = **`SORT_REGULAR`**): [true](language.types.singleton.md)

public function [count](arrayobject.count.md)(): [int](language.types.integer.md)

public function [exchangeArray](arrayobject.exchangearray.md)([array](language.types.array.md)|[object](language.types.object.md) `$array`): [array](language.types.array.md)

public function [getArrayCopy](arrayobject.getarraycopy.md)(): [array](language.types.array.md)

public function [getFlags](arrayobject.getflags.md)(): [int](language.types.integer.md)

public function [getIterator](arrayobject.getiterator.md)(): [Iterator](class.iterator.md)

public function [getIteratorClass](arrayobject.getiteratorclass.md)(): [string](language.types.string.md)

public function [ksort](arrayobject.ksort.md)([int](language.types.integer.md) `$flags` = **`SORT_REGULAR`**): [true](language.types.singleton.md)

public function [natcasesort](arrayobject.natcasesort.md)(): [true](language.types.singleton.md)

public function [natsort](arrayobject.natsort.md)(): [true](language.types.singleton.md)

public function [offsetExists](arrayobject.offsetexists.md)([mixed](language.types.mixed.md) `$key`): [bool](language.types.boolean.md)

public function [offsetGet](arrayobject.offsetget.md)([mixed](language.types.mixed.md) `$key`): [mixed](language.types.mixed.md)

public function [offsetSet](arrayobject.offsetset.md)([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [offsetUnset](arrayobject.offsetunset.md)([mixed](language.types.mixed.md) `$key`): [void](language.types.void.md)

public function [serialize](arrayobject.serialize.md)(): [string](language.types.string.md)

public function [setFlags](arrayobject.setflags.md)([int](language.types.integer.md) `$flags`): [void](language.types.void.md)

public function [setIteratorClass](arrayobject.setiteratorclass.md)([string](language.types.string.md) `$iteratorClass`): [void](language.types.void.md)

public function [uasort](arrayobject.uasort.md)([callable](language.types.callable.md) `$callback`): [true](language.types.singleton.md)

public function [uksort](arrayobject.uksort.md)([callable](language.types.callable.md) `$callback`): [true](language.types.singleton.md)

public function [unserialize](arrayobject.unserialize.md)([string](language.types.string.md) `$data`): [void](language.types.void.md)

}

## Constantes predefinidas

## Flags do ArrayObject

**`ArrayObject::STD_PROP_LIST`**
:   As propriedades do objeto têm sua funcionalidade normal quando
    acessadas como lista ([var\_dump()](function.var-dump.md), [`foreach`](control-structures.foreach.md), etc.).

**`ArrayObject::ARRAY_AS_PROPS`**
:   As entradas podem ser acessadas como propriedades (leitura e escrita). A
    classe **ArrayObject** usa sua própria lógica para acessar
    propriedades, portanto, nenhum aviso ou erro é gerado ao tentar ler ou
    escrever propriedades dinâmicas.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [ArrayObject::append](arrayobject.append.md) — Anexa o valor
- [ArrayObject::asort](arrayobject.asort.md) — Ordenar as entradas por valor
- [ArrayObject::\_\_construct](arrayobject.construct.md) — Constrói um novo objeto de array
- [ArrayObject::count](arrayobject.count.md) — Obtém o número de propriedades públicas no ArrayObject
- [ArrayObject::exchangeArray](arrayobject.exchangearray.md) — Troca o array por outro
- [ArrayObject::getArrayCopy](arrayobject.getarraycopy.md) — Cria uma cópia do ArrayObject
- [ArrayObject::getFlags](arrayobject.getflags.md) — Obtém as flags de comportamento
- [ArrayObject::getIterator](arrayobject.getiterator.md) — Retorna o iterador do ArrayObject
- [ArrayObject::getIteratorClass](arrayobject.getiteratorclass.md) — Obtém o nome da classe do iterador para o ArrayObject
- [ArrayObject::ksort](arrayobject.ksort.md) — Ordena as entradas pela chave
- [ArrayObject::natcasesort](arrayobject.natcasesort.md) — Ordena um array usando um algoritmo de "ordem natural" insensível a maiúsculas e minúsculas
- [ArrayObject::natsort](arrayobject.natsort.md) — Ordena as entradas usando um algoritmo de "ordem natural"
- [ArrayObject::offsetExists](arrayobject.offsetexists.md) — Retorna se o índice solicitado existe
- [ArrayObject::offsetGet](arrayobject.offsetget.md) — Retorna o valor no índice especificado
- [ArrayObject::offsetSet](arrayobject.offsetset.md) — Define o valor no índice especificado para novo valor
- [ArrayObject::offsetUnset](arrayobject.offsetunset.md) — Remove o valor no índice especificado
- [ArrayObject::serialize](arrayobject.serialize.md) — Serializa um ArrayObject
- [ArrayObject::setFlags](arrayobject.setflags.md) — Define as opções de comportamento
- [ArrayObject::setIteratorClass](arrayobject.setiteratorclass.md) — Define a classe do iterador para o ArrayObject
- [ArrayObject::uasort](arrayobject.uasort.md) — Ordena as entradas com uma função de comparação definida pelo usuário e mantém a associação de chaves
- [ArrayObject::uksort](arrayobject.uksort.md) — Ordena as entradas pelas chaves usando uma função de comparação definida pelo usuário
- [ArrayObject::unserialize](arrayobject.unserialize.md) — Desserializa um ArrayObject

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
