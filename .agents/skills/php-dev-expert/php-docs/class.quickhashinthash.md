# A classe QuickHashIntHash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.quickhashinthash.php

---

# A classe QuickHashIntHash

(PECL quickhash >= Unknown)

## Introdução

Esta classe encapsula um hash contendo números inteiros, onde os
valores também são números inteiros. Hashes também estão disponíveis como
implementação da interface [ArrayAccess](class.arrayaccess.md).

Hashes também podem ser iterados com [`foreach`](control-structures.foreach.md), já que a interface [Iterator](class.iterator.md) também é
implementada. A ordem em que os elementos são retornados não é
garantida.

## Resumo da classe

class **QuickHashIntHash**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[CHECK\_FOR\_DUPES](class.quickhashinthash.md#quickhashinthash.constants.check-for-dupes) = 1;

const
[int](language.types.integer.md)
[DO\_NOT\_USE\_ZEND\_ALLOC](class.quickhashinthash.md#quickhashinthash.constants.do-not-use-zend-alloc) = 2;

const
[int](language.types.integer.md)
[HASHER\_NO\_HASH](class.quickhashinthash.md#quickhashinthash.constants.hasher-no-hash) = 256;

const
[int](language.types.integer.md)
[HASHER\_JENKINS1](class.quickhashinthash.md#quickhashinthash.constants.hasher-jenkins1) = 512;

const
[int](language.types.integer.md)
[HASHER\_JENKINS2](class.quickhashinthash.md#quickhashinthash.constants.hasher-jenkins2) = 1024;

/\* Métodos \*/

public function [add](quickhashinthash.add.md)([int](language.types.integer.md) `$key`, [int](language.types.integer.md) `$value` = ?): [bool](language.types.boolean.md)

public function [\_\_construct](quickhashinthash.construct.md)([int](language.types.integer.md) `$size`, [int](language.types.integer.md) `$options` = ?)

public function [delete](quickhashinthash.delete.md)([int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

public function [exists](quickhashinthash.exists.md)([int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

public function [get](quickhashinthash.get.md)([int](language.types.integer.md) `$key`): [int](language.types.integer.md)

public function [getSize](quickhashinthash.getsize.md)(): [int](language.types.integer.md)

public static function [loadFromFile](quickhashinthash.loadfromfile.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$options` = ?): [QuickHashIntHash](class.quickhashinthash.md)

public static function [loadFromString](quickhashinthash.loadfromstring.md)([string](language.types.string.md) `$contents`, [int](language.types.integer.md) `$options` = ?): [QuickHashIntHash](class.quickhashinthash.md)

public function [saveToFile](quickhashinthash.savetofile.md)([string](language.types.string.md) `$filename`): [void](language.types.void.md)

public function [saveToString](quickhashinthash.savetostring.md)(): [string](language.types.string.md)

public function [set](quickhashinthash.set.md)([int](language.types.integer.md) `$key`, [int](language.types.integer.md) `$value`): [int](language.types.integer.md)

public function [update](quickhashinthash.update.md)([int](language.types.integer.md) `$key`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`QuickHashIntHash::CHECK_FOR_DUPES`**
:   Se habilitada, adicionar elementos duplicados a um conjunto (por meio de [QuickHashIntHash::add()](quickhashinthash.add.md) ou
    [QuickHashIntHash::loadFromFile()](quickhashinthash.loadfromfile.md)) fará com que esses elementos sejam removidos do
    conjunto. Isso consumirá mais tempo, portanto, será usado apenas quando necessário.

**`QuickHashIntHash::DO_NOT_USE_ZEND_ALLOC`**
:   Desativa o uso do gerenciador de memória interno do PHP para estruturas de conjuntos
    internos. Com esta opção habilitada, as alocações internas não
    contarão para as configurações de [memory\_limit](ini.core.md#ini.memory-limit).

**`QuickHashIntHash::HASHER_NO_HASH`**
:   Seleciona não usar uma função de hash, mas apenas usar um módulo para
    encontrar o índice da lista de buckets. Isso não é mais rápido que o hash normal e
    gera mais colisões.

**`QuickHashIntHash::HASHER_JENKINS1`**
:   Esta é a função de hash padrão para transformar hashes inteiros
    em índices de lista de buckets.

**`QuickHashIntHash::HASHER_JENKINS2`**
:   Seleciona um algoritmo de hash variante.

## Índice

- [QuickHashIntHash::add](quickhashinthash.add.md) — Este método adiciona uma nova entrada ao hash
- [QuickHashIntHash::\_\_construct](quickhashinthash.construct.md) — Cria um novo objeto QuickHashIntHash
- [QuickHashIntHash::delete](quickhashinthash.delete.md) — Este método exclui uma entrada do hash
- [QuickHashIntHash::exists](quickhashinthash.exists.md) — Este método verifica se uma chave faz parte do hash
- [QuickHashIntHash::get](quickhashinthash.get.md) — Este método recupera um valor do hash por sua chave
- [QuickHashIntHash::getSize](quickhashinthash.getsize.md) — Retorna o número de elementos no hash
- [QuickHashIntHash::loadFromFile](quickhashinthash.loadfromfile.md) — Este método de fábrica cria um hash de um arquivo
- [QuickHashIntHash::loadFromString](quickhashinthash.loadfromstring.md) — Este método de fábrica cria um hash a partir de uma string
- [QuickHashIntHash::saveToFile](quickhashinthash.savetofile.md) — Este método armazena um hash na memória no disco
- [QuickHashIntHash::saveToString](quickhashinthash.savetostring.md) — Este método retorna uma versão serializada do hash
- [QuickHashIntHash::set](quickhashinthash.set.md) — Este método atualiza uma entrada no hash com um novo valor, ou
  adiciona um novo se a entrada não existir
- [QuickHashIntHash::update](quickhashinthash.update.md) — Este método atualiza uma entrada no hash com um novo valor

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
