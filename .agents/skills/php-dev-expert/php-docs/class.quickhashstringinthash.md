# A classe QuickHashStringIntHash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.quickhashstringinthash.php

---

# A classe QuickHashStringIntHash

(No version information available, might only be in Git)

## Introdução

Esta classe encapsula um hash contendo strings, onde os
valores são números inteiros. Hashes também estão disponíveis como
implementação da interface [ArrayAccess](class.arrayaccess.md).

Hashes também podem ser iterados com [`foreach`](control-structures.foreach.md), já que a interface [Iterator](class.iterator.md) também é
implementada. A ordem em que os elementos são retornados não é
garantida.

## Resumo da classe

class **QuickHashStringIntHash**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[CHECK\_FOR\_DUPES](class.quickhashstringinthash.md#quickhashstringinthash.constants.check-for-dupes) = 1;

const
[int](language.types.integer.md)
[DO\_NOT\_USE\_ZEND\_ALLOC](class.quickhashstringinthash.md#quickhashstringinthash.constants.do-not-use-zend-alloc) = 2;

/\* Métodos \*/

public function [add](quickhashstringinthash.add.md)([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

public function [\_\_construct](quickhashstringinthash.construct.md)([int](language.types.integer.md) `$size`, [int](language.types.integer.md) `$options` = 0)

public function [delete](quickhashstringinthash.delete.md)([string](language.types.string.md) `$key`): [bool](language.types.boolean.md)

public function [exists](quickhashstringinthash.exists.md)([string](language.types.string.md) `$key`): [bool](language.types.boolean.md)

public function [get](quickhashstringinthash.get.md)([string](language.types.string.md) `$key`): [mixed](language.types.mixed.md)

public function [getSize](quickhashstringinthash.getsize.md)(): [int](language.types.integer.md)

public static function [loadFromFile](quickhashstringinthash.loadfromfile.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$size` = 0, [int](language.types.integer.md) `$options` = 0): [QuickHashStringIntHash](class.quickhashstringinthash.md)

public static function [loadFromString](quickhashstringinthash.loadfromstring.md)([string](language.types.string.md) `$contents`, [int](language.types.integer.md) `$size` = 0, [int](language.types.integer.md) `$options` = 0): [QuickHashStringIntHash](class.quickhashstringinthash.md)

public function [saveToFile](quickhashstringinthash.savetofile.md)([string](language.types.string.md) `$filename`): [void](language.types.void.md)

public function [saveToString](quickhashstringinthash.savetostring.md)(): [string](language.types.string.md)

public function [set](quickhashstringinthash.set.md)([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$value`): [int](language.types.integer.md)

public function [update](quickhashstringinthash.update.md)([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`QuickHashStringIntHash::CHECK_FOR_DUPES`**
:   Se habilitada, adicionar elementos duplicados a um conjunto (por meio de [QuickHashStringIntHash::add()](quickhashstringinthash.add.md) ou
    [QuickHashStringIntHash::loadFromFile()](quickhashstringinthash.loadfromfile.md)) fará com que esses elementos sejam removidos do
    conjunto. Isso consumirá mais tempo, portanto, será usado apenas quando necessário.

**`QuickHashStringIntHash::DO_NOT_USE_ZEND_ALLOC`**
:   Desativa o uso do gerenciador de memória interno do PHP para estruturas de conjuntos
    internos. Com esta opção habilitada, as alocações internas não
    contarão para as configurações de [memory\_limit](ini.core.md#ini.memory-limit).

## Índice

- [QuickHashStringIntHash::add](quickhashstringinthash.add.md) — Este método adiciona uma nova entrada ao hash
- [QuickHashStringIntHash::\_\_construct](quickhashstringinthash.construct.md) — Cria um novo objeto QuickHashStringIntHash
- [QuickHashStringIntHash::delete](quickhashstringinthash.delete.md) — Este método exclui uma entrada do hash
- [QuickHashStringIntHash::exists](quickhashstringinthash.exists.md) — Este método verifica se uma chave faz parte do hash
- [QuickHashStringIntHash::get](quickhashstringinthash.get.md) — Este método recupera um valor do hash por sua chave
- [QuickHashStringIntHash::getSize](quickhashstringinthash.getsize.md) — Retorna o número de elementos no hash
- [QuickHashStringIntHash::loadFromFile](quickhashstringinthash.loadfromfile.md) — Este método de fábrica cria um hash de um arquivo
- [QuickHashStringIntHash::loadFromString](quickhashstringinthash.loadfromstring.md) — Este método de fábrica cria um hash a partir de uma string
- [QuickHashStringIntHash::saveToFile](quickhashstringinthash.savetofile.md) — Este método armazena um hash na memória no disco
- [QuickHashStringIntHash::saveToString](quickhashstringinthash.savetostring.md) — Este método retorna uma versão serializada do hash
- [QuickHashStringIntHash::set](quickhashstringinthash.set.md) — Este método atualiza uma entrada no hash com um novo valor, ou
  adiciona um novo se a entrada não existir
- [QuickHashStringIntHash::update](quickhashstringinthash.update.md) — Este método atualiza uma entrada no hash com um novo valor

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
