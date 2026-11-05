# A classe Random\Engine\Xoshiro256StarStar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.random-engine-xoshiro256starstar.php

---

# A classe Random\Engine\Xoshiro256StarStar

(PHP 8 >= 8.2.0)

## Introdução

Implementa o algoritmo [» xoshiro256\*\*](https://prng.di.unimi.it/).

## Resumo da classe

namespace **Random\Engine**;

final
class ****Xoshiro256StarStar****
implements
[Random\Engine](class.random-engine.md) {

/\* Métodos \*/

public function [\_\_construct](random-engine-xoshiro256starstar.construct.md)([string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md) `$seed` = **`null`**)

public function [\_\_debugInfo](random-engine-xoshiro256starstar.debuginfo.md)(): [array](language.types.array.md)

public function [generate](random-engine-xoshiro256starstar.generate.md)(): [string](language.types.string.md)

public function [jump](random-engine-xoshiro256starstar.jump.md)(): [void](language.types.void.md)

public function [jumpLong](random-engine-xoshiro256starstar.jumplong.md)(): [void](language.types.void.md)

public function [\_\_serialize](random-engine-xoshiro256starstar.serialize.md)(): [array](language.types.array.md)

public function [\_\_unserialize](random-engine-xoshiro256starstar.unserialize.md)([array](language.types.array.md) `$data`): [void](language.types.void.md)

}

## Índice

- [Random\Engine\Xoshiro256StarStar::\_\_construct](random-engine-xoshiro256starstar.construct.md) — Constrói um novo mecanismo xoshiro256\*\*
- [Random\Engine\Xoshiro256StarStar::\_\_debugInfo](random-engine-xoshiro256starstar.debuginfo.md) — Retorna o estado interno do mecanismo
- [Random\Engine\Xoshiro256StarStar::generate](random-engine-xoshiro256starstar.generate.md) — Gera 64 bits de aleatoriedade
- [Random\Engine\Xoshiro256StarStar::jump](random-engine-xoshiro256starstar.jump.md) — Move o mecanismo com eficiência para frente em passos de 2^128
- [Random\Engine\Xoshiro256StarStar::jumpLong](random-engine-xoshiro256starstar.jumplong.md) — Avança eficientemente o mecanismo em 2^192 passos
- [Random\Engine\Xoshiro256StarStar::\_\_serialize](random-engine-xoshiro256starstar.serialize.md) — Serializa o objeto Xoshiro256StarStar
- [Random\Engine\Xoshiro256StarStar::\_\_unserialize](random-engine-xoshiro256starstar.unserialize.md) — Desserializa o parâmetro data em um objeto Xoshiro256StarStar

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
