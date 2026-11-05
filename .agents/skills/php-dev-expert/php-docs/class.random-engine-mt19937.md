# A classe Random\Engine\Mt19937

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.random-engine-mt19937.php

---

# A classe Random\Engine\Mt19937

(PHP 8 >= 8.2.0)

## Introdução

Implementa o algoritmo [» Mt19937](https://www.math.sci.hiroshima-u.ac.jp/m-mat/MT/ARTICLES/mt.pdf) (“Mersenne Twister”).

## Resumo da classe

namespace **Random\Engine**;

final
class ****Mt19937****
implements
[Random\Engine](class.random-engine.md) {

/\* Métodos \*/

public function [\_\_construct](random-engine-mt19937.construct.md)([?](language.types.null.md)[int](language.types.integer.md) `$seed` = **`null`**, [int](language.types.integer.md) `$mode` = **`MT_RAND_MT19937`**)

public function [\_\_debugInfo](random-engine-mt19937.debuginfo.md)(): [array](language.types.array.md)

public function [generate](random-engine-mt19937.generate.md)(): [string](language.types.string.md)

public function [\_\_serialize](random-engine-mt19937.serialize.md)(): [array](language.types.array.md)

public function [\_\_unserialize](random-engine-mt19937.unserialize.md)([array](language.types.array.md) `$data`): [void](language.types.void.md)

}

## Índice

- [Random\Engine\Mt19937::\_\_construct](random-engine-mt19937.construct.md) — Constrói um novo mecanismo Mt19937
- [Random\Engine\Mt19937::\_\_debugInfo](random-engine-mt19937.debuginfo.md) — Retorna o estado interno do mecanismo
- [Random\Engine\Mt19937::generate](random-engine-mt19937.generate.md) — Gerar 32 bits de aleatoriedade
- [Random\Engine\Mt19937::\_\_serialize](random-engine-mt19937.serialize.md) — Serializa o objeto Mt19937
- [Random\Engine\Mt19937::\_\_unserialize](random-engine-mt19937.unserialize.md) — Desserializa o parâmetro data em um objeto Mt19937

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
