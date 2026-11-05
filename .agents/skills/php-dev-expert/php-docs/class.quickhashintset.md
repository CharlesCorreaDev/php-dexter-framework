# A classe QuickHashIntSet

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.quickhashintset.php

---

# A classe QuickHashIntSet

(PECL quickhash >= Unknown)

## Introdução

Esta classe encapsula um conjunto contendo números inteiros.

Conjuntos também podem ser iterados com [`foreach`](control-structures.foreach.md), já que a interface [Iterator](class.iterator.md) também é
implementada. A ordem em que os elementos são retornados não é
garantida.

## Resumo da classe

class **QuickHashIntSet**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[CHECK\_FOR\_DUPES](class.quickhashintset.md#quickhashintset.constants.check-for-dupes) = 1;

const
[int](language.types.integer.md)
[DO\_NOT\_USE\_ZEND\_ALLOC](class.quickhashintset.md#quickhashintset.constants.do-not-use-zend-alloc) = 2;

const
[int](language.types.integer.md)
[HASHER\_NO\_HASH](class.quickhashintset.md#quickhashintset.constants.hasher-no-hash) = 256;

const
[int](language.types.integer.md)
[HASHER\_JENKINS1](class.quickhashintset.md#quickhashintset.constants.hasher-jenkins1) = 512;

const
[int](language.types.integer.md)
[HASHER\_JENKINS2](class.quickhashintset.md#quickhashintset.constants.hasher-jenkins2) = 1024;

/\* Métodos \*/

public function [add](quickhashintset.add.md)([int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

public function [\_\_construct](quickhashintset.construct.md)([int](language.types.integer.md) `$size`, [int](language.types.integer.md) `$options` = ?)

public function [delete](quickhashintset.delete.md)([int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

public function [exists](quickhashintset.exists.md)([int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

publicfunction [getSize](quickhashintset.getsize.md)(): [int](language.types.integer.md)

public static function [loadFromFile](quickhashintset.loadfromfile.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$size` = ?, [int](language.types.integer.md) `$options` = ?): [QuickHashIntSet](class.quickhashintset.md)

public static function [loadFromString](quickhashintset.loadfromstring.md)([string](language.types.string.md) `$contents`, [int](language.types.integer.md) `$size` = ?, [int](language.types.integer.md) `$options` = ?): [QuickHashIntSet](class.quickhashintset.md)

public function [saveToFile](quickhashintset.savetofile.md)([string](language.types.string.md) `$filename`): [void](language.types.void.md)

public function [saveToString](quickhashintset.savetostring.md)(): [string](language.types.string.md)

}

## Constantes predefinidas

**`QuickHashIntSet::CHECK_FOR_DUPES`**
:   Se habilitada, adicionar elementos duplicados a um conjunto (por meio de [QuickHashIntSet::add()](quickhashintset.add.md) ou
    [QuickHashIntSet::loadFromFile()](quickhashintset.loadfromfile.md)) fará com que esses elementos sejam removidos do
    conjunto. Isso consumirá mais tempo, portanto, será usado apenas quando necessário.

**`QuickHashIntSet::DO_NOT_USE_ZEND_ALLOC`**
:   Desativa o uso do gerenciador de memória interno do PHP para estruturas de conjuntos
    internos. Com esta opção habilitada, as alocações internas não
    contarão para as configurações de [memory\_limit](ini.core.md#ini.memory-limit).

**`QuickHashIntSet::HASHER_NO_HASH`**
:   Seleciona não usar uma função de hash, mas apenas usar um módulo para
    encontrar o índice da lista de buckets. Isso não é mais rápido que o hash normal e
    gera mais colisões.

**`QuickHashIntSet::HASHER_JENKINS1`**
:   Esta é a função de hash padrão para transformar hashes inteiros
    em índices de lista de buckets.

**`QuickHashIntSet::HASHER_JENKINS2`**
:   Seleciona um algoritmo de hash variante.

## Índice

- [QuickHashIntSet::add](quickhashintset.add.md) — Este método adiciona uma nova entrada ao conjunto
- [QuickHashIntSet::\_\_construct](quickhashintset.construct.md) — Cria um novo objeto QuickHashIntSet
- [QuickHashIntSet::delete](quickhashintset.delete.md) — Este método exclui uma entrada do conjunto
- [QuickHashIntSet::exists](quickhashintset.exists.md) — Este método verifica se uma chave faz parte do conjunto
- [QuickHashIntSet::getSize](quickhashintset.getsize.md) — Retorna o número de elementos no conjunto
- [QuickHashIntSet::loadFromFile](quickhashintset.loadfromfile.md) — Este método de fábrica cria um conjunto a partir de um arquivo
- [QuickHashIntSet::loadFromString](quickhashintset.loadfromstring.md) — Este método de fábrica cria um conjunto a partir de uma string
- [QuickHashIntSet::saveToFile](quickhashintset.savetofile.md) — Este método armazena um conjunto na memória do disco
- [QuickHashIntSet::saveToString](quickhashintset.savetostring.md) — Este método retorna uma versão serializada do conjunto

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
