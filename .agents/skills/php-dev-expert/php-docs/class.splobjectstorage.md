# A classe SplObjectStorage

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.splobjectstorage.php

---

# A classe SplObjectStorage

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

A classe SplObjectStorage fornece um mapa de objetos para dados ou, ao
ignorar os dados, um conjunto de objetos. Esse propósito duplo pode ser útil em muitos
casos que envolvem a necessidade de identificar objetos de forma única.

## Resumo da classe

class ****SplObjectStorage****
implements
[Countable](class.countable.md),
[SeekableIterator](class.seekableiterator.md),
[Serializable](class.serializable.md),
[ArrayAccess](class.arrayaccess.md) {

/\* Métodos \*/

public function [addAll](splobjectstorage.addall.md)([SplObjectStorage](class.splobjectstorage.md) `$storage`): [int](language.types.integer.md)

#[[\Deprecated](class.deprecated.md)]  
public function [attach](splobjectstorage.attach.md)([object](language.types.object.md) `$object`, [mixed](language.types.mixed.md) `$info` = [null](reserved.constants.md#constant.null)): [void](language.types.void.md)

#[[\Deprecated](class.deprecated.md)]  
public function [contains](splobjectstorage.contains.md)([object](language.types.object.md) `$object`): [bool](language.types.boolean.md)

public function [count](splobjectstorage.count.md)([int](language.types.integer.md) `$mode` = [COUNT\_NORMAL](array.constants.md#constant.count-normal)): [int](language.types.integer.md)

public function [current](splobjectstorage.current.md)(): [object](language.types.object.md)

#[[\Deprecated](class.deprecated.md)]  
public function [detach](splobjectstorage.detach.md)([object](language.types.object.md) `$object`): [void](language.types.void.md)

public function [getHash](splobjectstorage.gethash.md)([object](language.types.object.md) `$object`): [string](language.types.string.md)

public function [getInfo](splobjectstorage.getinfo.md)(): [mixed](language.types.mixed.md)

public function [key](splobjectstorage.key.md)(): [int](language.types.integer.md)

public function [next](splobjectstorage.next.md)(): [void](language.types.void.md)

public function [offsetExists](splobjectstorage.offsetexists.md)([object](language.types.object.md) `$object`): [bool](language.types.boolean.md)

public function [offsetGet](splobjectstorage.offsetget.md)([object](language.types.object.md) `$object`): [mixed](language.types.mixed.md)

public function [offsetSet](splobjectstorage.offsetset.md)([object](language.types.object.md) `$object`, [mixed](language.types.mixed.md) `$info` = [null](reserved.constants.md#constant.null)): [void](language.types.void.md)

public function [offsetUnset](splobjectstorage.offsetunset.md)([object](language.types.object.md) `$object`): [void](language.types.void.md)

public function [removeAll](splobjectstorage.removeall.md)([SplObjectStorage](class.splobjectstorage.md) `$storage`): [int](language.types.integer.md)

public function [removeAllExcept](splobjectstorage.removeallexcept.md)([SplObjectStorage](class.splobjectstorage.md) `$storage`): [int](language.types.integer.md)

public function [rewind](splobjectstorage.rewind.md)(): [void](language.types.void.md)

public function [seek](splobjectstorage.seek.md)([int](language.types.integer.md) `$offset`): [void](language.types.void.md)

public function [serialize](splobjectstorage.serialize.md)(): [string](language.types.string.md)

public function [setInfo](splobjectstorage.setinfo.md)([mixed](language.types.mixed.md) `$info`): [void](language.types.void.md)

public function [unserialize](splobjectstorage.unserialize.md)([string](language.types.string.md) `$data`): [void](language.types.void.md)

public function [valid](splobjectstorage.valid.md)(): [bool](language.types.boolean.md)

}

## Examples

**Exemplo #1 **SplObjectStorage** como um conjunto**

```
<?php
// Como um conjunto de objetos
$s = new SplObjectStorage();

$o1 = new stdClass;
$o2 = new stdClass;
$o3 = new stdClass;

$s->attach($o1);
$s->attach($o2);

var_dump($s->contains($o1));
var_dump($s->contains($o2));
var_dump($s->contains($o3));

$s->detach($o2);

var_dump($s->contains($o1));
var_dump($s->contains($o2));
var_dump($s->contains($o3));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(false)
bool(true)
bool(false)
bool(false)
```

**Exemplo #2 **SplObjectStorage** como um mapa**

```
<?php
// Como um mapa de objetos para dados
$s = new SplObjectStorage();

$o1 = new stdClass;
$o2 = new stdClass;
$o3 = new stdClass;

$s[$o1] = "data for object 1";
$s[$o2] = array(1,2,3);

if (isset($s[$o2])) {
    var_dump($s[$o2]);
}
?>
```

O exemplo acima produzirá:

```
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
```

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Implementa [SeekableIterator](class.seekableiterator.md), anteriormente somente [Iterator](class.iterator.md) estava implementado. |

## Índice

- [SplObjectStorage::addAll](splobjectstorage.addall.md) — Adiciona todos os objetos de outro armazenamento
- [SplObjectStorage::attach](splobjectstorage.attach.md) — Adiciona um objeto no armazenamento
- [SplObjectStorage::contains](splobjectstorage.contains.md) — Verifica se no armazenamento contém um objeto específico
- [SplObjectStorage::count](splobjectstorage.count.md) — Retorna o número de objetos no armazenamento
- [SplObjectStorage::current](splobjectstorage.current.md) — Retorna a entrada atual do armazenamento
- [SplObjectStorage::detach](splobjectstorage.detach.md) — Remove um object do armazenamento
- [SplObjectStorage::getHash](splobjectstorage.gethash.md) — Calcula um identificador único para os objetos contidos
- [SplObjectStorage::getInfo](splobjectstorage.getinfo.md) — Retorna os dados associados à entrada atual do iterador
- [SplObjectStorage::key](splobjectstorage.key.md) — Retorna o índice em que o iterador está atualmente
- [SplObjectStorage::next](splobjectstorage.next.md) — Move para a próxima entrada
- [SplObjectStorage::offsetExists](splobjectstorage.offsetexists.md) — Verifica se um objeto existe no armazenamento
- [SplObjectStorage::offsetGet](splobjectstorage.offsetget.md) — Retorna os dados associados a um object
- [SplObjectStorage::offsetSet](splobjectstorage.offsetset.md) — Associa dados a um objeto no armazenamento
- [SplObjectStorage::offsetUnset](splobjectstorage.offsetunset.md) — Remove um objeto do armazenamento
- [SplObjectStorage::removeAll](splobjectstorage.removeall.md) — Remove objetos contidos em outro armazenamento do armazenamento atual
- [SplObjectStorage::removeAllExcept](splobjectstorage.removeallexcept.md) — Remove todos os objetos, exceto aqueles contidos em outro armazenamento, do armazenamento atual
- [SplObjectStorage::rewind](splobjectstorage.rewind.md) — Retrocede o iterador para o primeiro elemento do armazenamento
- [SplObjectStorage::seek](splobjectstorage.seek.md) — Aponta o iterador para uma posição
- [SplObjectStorage::serialize](splobjectstorage.serialize.md) — Serializa o armazenamento
- [SplObjectStorage::setInfo](splobjectstorage.setinfo.md) — Define os dados associados à entrada atual do iterador
- [SplObjectStorage::unserialize](splobjectstorage.unserialize.md) — Desserializa um armazenamento a partir de sua representação de string
- [SplObjectStorage::valid](splobjectstorage.valid.md) — Retorna se a entrada atual do iterador é válida

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
