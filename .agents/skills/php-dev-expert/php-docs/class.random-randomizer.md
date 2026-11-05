# A classe Random\Randomizer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.random-randomizer.php

---

# A classe Random\Randomizer

(PHP 8 >= 8.2.0)

## Introdução

Fornece uma API de alto nível para a aleatoriedade fornecida por um [Random\Engine](class.random-engine.md).

## Resumo da classe

namespace **Random**;

final
class ****Randomizer****
{

/\* Propriedades \*/

public
readonly
[Random\Engine](class.random-engine.md)
[$engine](class.random-randomizer.md#random-randomizer.props.engine);

/\* Métodos \*/

public function [\_\_construct](random-randomizer.construct.md)([?](language.types.null.md)[Random\Engine](class.random-engine.md) `$engine` = **`null`**)

public function [getBytes](random-randomizer.getbytes.md)([int](language.types.integer.md) `$length`): [string](language.types.string.md)

public function [getBytesFromString](random-randomizer.getbytesfromstring.md)([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$length`): [string](language.types.string.md)

public function [getFloat](random-randomizer.getfloat.md)([float](language.types.float.md) `$min`, [float](language.types.float.md) `$max`, [Random\IntervalBoundary](enum.random-intervalboundary.md) `$boundary` = **`Random\IntervalBoundary::ClosedOpen`**): [float](language.types.float.md)

public function [getInt](random-randomizer.getint.md)([int](language.types.integer.md) `$min`, [int](language.types.integer.md) `$max`): [int](language.types.integer.md)

public function [nextFloat](random-randomizer.nextfloat.md)(): [float](language.types.float.md)

public function [nextInt](random-randomizer.nextint.md)(): [int](language.types.integer.md)

public function [pickArrayKeys](random-randomizer.pickarraykeys.md)([array](language.types.array.md) `$array`, [int](language.types.integer.md) `$num`): [array](language.types.array.md)

public function [\_\_serialize](random-randomizer.serialize.md)(): [array](language.types.array.md)

public function [shuffleArray](random-randomizer.shufflearray.md)([array](language.types.array.md) `$array`): [array](language.types.array.md)

public function [shuffleBytes](random-randomizer.shufflebytes.md)([string](language.types.string.md) `$bytes`): [string](language.types.string.md)

public function [\_\_unserialize](random-randomizer.unserialize.md)([array](language.types.array.md) `$data`): [void](language.types.void.md)

}

## Propriedades

engine
:   A fonte de aleatoriedade de baixo nível para os métodos [Random\Randomizer](class.random-randomizer.md).

## Índice

- [Random\Randomizer::\_\_construct](random-randomizer.construct.md) — Constrói um novo Randomizer
- [Random\Randomizer::getBytes](random-randomizer.getbytes.md) — Obtém bytes aleatórios
- [Random\Randomizer::getBytesFromString](random-randomizer.getbytesfromstring.md) — Obtém bytes aleatórios de uma string de origem
- [Random\Randomizer::getFloat](random-randomizer.getfloat.md) — Obtém um float selecionado uniformemente
- [Random\Randomizer::getInt](random-randomizer.getint.md) — Obtém um inteiro selecionado uniformemente
- [Random\Randomizer::nextFloat](random-randomizer.nextfloat.md) — Obtém um float do intervalo aberto à direita [0,0, 1,0)
- [Random\Randomizer::nextInt](random-randomizer.nextint.md) — Obtém um inteiro positivo
- [Random\Randomizer::pickArrayKeys](random-randomizer.pickarraykeys.md) — Seleciona chaves aleatórias de um array
- [Random\Randomizer::\_\_serialize](random-randomizer.serialize.md) — Serializa o objeto Randomizer
- [Random\Randomizer::shuffleArray](random-randomizer.shufflearray.md) — Obtém uma permutação de um array
- [Random\Randomizer::shuffleBytes](random-randomizer.shufflebytes.md) — Obtém uma permutação byte a byte de uma string
- [Random\Randomizer::\_\_unserialize](random-randomizer.unserialize.md) — Desserializa o parâmetro data em um objeto Randomizer

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
