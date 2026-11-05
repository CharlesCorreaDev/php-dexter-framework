# A classe WeakMap

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.weakmap.php

---

# A classe WeakMap

(PHP 8)

## Introdução

Um **WeakMap** é um mapa (ou dicionário) que aceita objetos como chaves. Entretanto, diferentemente do
objeto similar [SplObjectStorage](class.splobjectstorage.md), um objeto em uma chave de um **WeakMap**
não contribui com a contagem de referência do objeto. Isto é, se em algum ponto a única referência restante
a um objeto é a chave de um **WeakMap**, o objeto sofrerá uma coleta de lixo e será removido
do **WeakMap**. Seu caso de uso primário é construir caches de dados derivados de
um objeto que não precisam durar mais que o objeto.

**WeakMap** implementa [ArrayAccess](class.arrayaccess.md),
[Traversable](class.traversable.md) (via [IteratorAggregate](class.iteratoraggregate.md))
e [Countable](class.countable.md), por isso na maioria dos casos pode ser usada da mesma forma que um array associativo.

## Resumo da classe

final
class ****WeakMap****
implements
[ArrayAccess](class.arrayaccess.md),
[Countable](class.countable.md),
[IteratorAggregate](class.iteratoraggregate.md) {

/\* Métodos \*/

public function [count](weakmap.count.md)(): [int](language.types.integer.md)

public function [getIterator](weakmap.getiterator.md)(): [Iterator](class.iterator.md)

public function [offsetExists](weakmap.offsetexists.md)([object](language.types.object.md) `$object`): [bool](language.types.boolean.md)

public function [offsetGet](weakmap.offsetget.md)([object](language.types.object.md) `$object`): [mixed](language.types.mixed.md)

public function [offsetSet](weakmap.offsetset.md)([object](language.types.object.md) `$object`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [offsetUnset](weakmap.offsetunset.md)([object](language.types.object.md) `$object`): [void](language.types.void.md)

}

## Examples

**Exemplo #1 Exemplo de uso de **WeakMap****

```
<?php
$wm = new WeakMap();

$o = new stdClass;

class A {
    public function __destruct() {
        echo "Dead!\n";
    }
}

$wm[$o] = new A;

var_dump(count($wm));
echo "Unsetting...\n";
unset($o);
echo "Done\n";
var_dump(count($wm));
```

O exemplo acima produzirá:

```
int(1)
Unsetting...
Dead!
Done
int(0)
```

## Índice

- [WeakMap::count](weakmap.count.md) — Conta o número de entradas ativas no mapa
- [WeakMap::getIterator](weakmap.getiterator.md) — Obtém um iterador externo
- [WeakMap::offsetExists](weakmap.offsetexists.md) — Verifica se um certo objeto está no mapa
- [WeakMap::offsetGet](weakmap.offsetget.md) — Retorna o valor apontado por um certo objeto
- [WeakMap::offsetSet](weakmap.offsetset.md) — Atualiza o mapa com um novo par chave-valor
- [WeakMap::offsetUnset](weakmap.offsetunset.md) — Remove uma entrada do mapa

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
