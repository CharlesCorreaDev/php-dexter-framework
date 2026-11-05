# A classe QuickHashIntStringHash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.quickhashintstringhash.php

---

# A classe QuickHashIntStringHash

(PECL quickhash >= Unknown)

## Introdução

Esta classe encapsula um hash contendo números inteiros, onde os
valores são strings. Hashes também estão disponíveis como implementação da
interface [ArrayAccess](class.arrayaccess.md).

Hashes também podem ser iterados com [`foreach`](control-structures.foreach.md), já que a interface [Iterator](class.iterator.md) também é
implementada. A ordem em que os elementos são retornados não é
garantida.

## Resumo da classe

class **QuickHashIntStringHash**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[CHECK\_FOR\_DUPES](class.quickhashintstringhash.md#quickhashintstringhash.constants.check-for-dupes) = 1;

const
[int](language.types.integer.md)
[DO\_NOT\_USE\_ZEND\_ALLOC](class.quickhashintstringhash.md#quickhashintstringhash.constants.do-not-use-zend-alloc) = 2;

const
[int](language.types.integer.md)
[HASHER\_NO\_HASH](class.quickhashintstringhash.md#quickhashintstringhash.constants.hasher-no-hash) = 256;

const
[int](language.types.integer.md)
[HASHER\_JENKINS1](class.quickhashintstringhash.md#quickhashintstringhash.constants.hasher-jenkins1) = 512;

const
[int](language.types.integer.md)
[HASHER\_JENKINS2](class.quickhashintstringhash.md#quickhashintstringhash.constants.hasher-jenkins2) = 1024;

/\* Métodos \*/

public function [add](quickhashintstringhash.add.md)([int](language.types.integer.md) `$key`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

public function [\_\_construct](quickhashintstringhash.construct.md)([int](language.types.integer.md) `$size`, [int](language.types.integer.md) `$options` = 0)

public function [delete](quickhashintstringhash.delete.md)([int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

public function [exists](quickhashintstringhash.exists.md)([int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

public function [get](quickhashintstringhash.get.md)([int](language.types.integer.md) `$key`): [mixed](language.types.mixed.md)

public function [getSize](quickhashintstringhash.getsize.md)(): [int](language.types.integer.md)

public static function [loadFromFile](quickhashintstringhash.loadfromfile.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$size` = 0, [int](language.types.integer.md) `$options` = 0): [QuickHashIntStringHash](class.quickhashintstringhash.md)

public static function [loadFromString](quickhashintstringhash.loadfromstring.md)([string](language.types.string.md) `$contents`, [int](language.types.integer.md) `$size` = 0, [int](language.types.integer.md) `$options` = 0): [QuickHashIntStringHash](class.quickhashintstringhash.md)

public function [saveToFile](quickhashintstringhash.savetofile.md)([string](language.types.string.md) `$filename`): [void](language.types.void.md)

public function [saveToString](quickhashintstringhash.savetostring.md)(): [string](language.types.string.md)

public function [set](quickhashintstringhash.set.md)([int](language.types.integer.md) `$key`, [string](language.types.string.md) `$value`): [int](language.types.integer.md)

public function [update](quickhashintstringhash.update.md)([int](language.types.integer.md) `$key`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`QuickHashIntStringHash::CHECK_FOR_DUPES`**
:   Se habilitada, adicionar elementos duplicados a um conjunto (por meio de [QuickHashIntStringHash::add()](quickhashintstringhash.add.md) ou
    [QuickHashIntStringHash::loadFromFile()](quickhashintstringhash.loadfromfile.md)) fará com que esses elementos sejam removidos do
    conjunto. Isso consumirá mais tempo, portanto, será usado apenas quando necessário.

**`QuickHashIntStringHash::DO_NOT_USE_ZEND_ALLOC`**
:   Desativa o uso do gerenciador de memória interno do PHP para estruturas de conjuntos
    internos. Com esta opção habilitada, as alocações internas não
    contarão para as configurações de [memory\_limit](ini.core.md#ini.memory-limit).

**`QuickHashIntStringHash::HASHER_NO_HASH`**
:   Seleciona não usar uma função de hash, mas apenas usar um módulo para
    encontrar o índice da lista de buckets. Isso não é mais rápido que o hash normal e
    gera mais colisões.

**`QuickHashIntStringHash::HASHER_JENKINS1`**
:   Esta é a função de hash padrão para transformar hashes inteiros
    em índices de lista de buckets.

**`QuickHashIntStringHash::HASHER_JENKINS2`**
:   Seleciona um algoritmo de hash variante.

## Índice

- [QuickHashIntStringHash::add](quickhashintstringhash.add.md) — Este método adiciona uma nova entrada ao hash
- [QuickHashIntStringHash::\_\_construct](quickhashintstringhash.construct.md) — Cria um novo objeto QuickHashIntStringHash
- [QuickHashIntStringHash::delete](quickhashintstringhash.delete.md) — Este método exclui uma entrada do hash
- [QuickHashIntStringHash::exists](quickhashintstringhash.exists.md) — Este método verifica se uma chave faz parte do hash
- [QuickHashIntStringHash::get](quickhashintstringhash.get.md) — Este método recupera um valor do hash por sua chave
- [QuickHashIntStringHash::getSize](quickhashintstringhash.getsize.md) — Retorna o número de elementos no hash
- [QuickHashIntStringHash::loadFromFile](quickhashintstringhash.loadfromfile.md) — Este método de fábrica cria um hash de um arquivo
- [QuickHashIntStringHash::loadFromString](quickhashintstringhash.loadfromstring.md) — Este método de fábrica cria um hash a partir de uma string
- [QuickHashIntStringHash::saveToFile](quickhashintstringhash.savetofile.md) — Este método armazena um hash na memória no disco
- [QuickHashIntStringHash::saveToString](quickhashintstringhash.savetostring.md) — Este método retorna uma versão serializada do hash
- [QuickHashIntStringHash::set](quickhashintstringhash.set.md) — Este método atualiza uma entrada no hash com um novo valor, ou
  adiciona um novo se a entrada não existir
- [QuickHashIntStringHash::update](quickhashintstringhash.update.md) — Este método atualiza uma entrada no hash com um novo valor

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
