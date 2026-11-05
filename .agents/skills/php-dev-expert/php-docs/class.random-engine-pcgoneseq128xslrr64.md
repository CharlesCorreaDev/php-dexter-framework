# A classe Random\Engine\PcgOneseq128XslRr64

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.random-engine-pcgoneseq128xslrr64.php

---

# A classe Random\Engine\PcgOneseq128XslRr64

(PHP 8 >= 8.2.0)

## Introdução

Implementa um [» gerador congruente permutado (PCG)](https://www.pcg-random.org/) com
128 bits de estado, transformações de saída XSL e RR e 64 bits de saída.

## Resumo da classe

namespace **Random\Engine**;

final
class ****PcgOneseq128XslRr64****
implements
[Random\Engine](class.random-engine.md) {

/\* Métodos \*/

public function [\_\_construct](random-engine-pcgoneseq128xslrr64.construct.md)([string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md) `$seed` = **`null`**)

public function [\_\_debugInfo](random-engine-pcgoneseq128xslrr64.debuginfo.md)(): [array](language.types.array.md)

public function [generate](random-engine-pcgoneseq128xslrr64.generate.md)(): [string](language.types.string.md)

public function [jump](random-engine-pcgoneseq128xslrr64.jump.md)([int](language.types.integer.md) `$advance`): [void](language.types.void.md)

public function [\_\_serialize](random-engine-pcgoneseq128xslrr64.serialize.md)(): [array](language.types.array.md)

public function [\_\_unserialize](random-engine-pcgoneseq128xslrr64.unserialize.md)([array](language.types.array.md) `$data`): [void](language.types.void.md)

}

## Índice

- [Random\Engine\PcgOneseq128XslRr64::\_\_construct](random-engine-pcgoneseq128xslrr64.construct.md) — Constrói um novo mecanismo PCG Oneseq 128 XSL RR 64
- [Random\Engine\PcgOneseq128XslRr64::\_\_debugInfo](random-engine-pcgoneseq128xslrr64.debuginfo.md) — Retorna o estado interno do mecanismo
- [Random\Engine\PcgOneseq128XslRr64::generate](random-engine-pcgoneseq128xslrr64.generate.md) — Gera 64 bits de aleatoriedade
- [Random\Engine\PcgOneseq128XslRr64::jump](random-engine-pcgoneseq128xslrr64.jump.md) — Move o mecanismo com eficiência para frente em várias etapas
- [Random\Engine\PcgOneseq128XslRr64::\_\_serialize](random-engine-pcgoneseq128xslrr64.serialize.md) — Serializa o objeto PcgOneseq128XslRr64
- [Random\Engine\PcgOneseq128XslRr64::\_\_unserialize](random-engine-pcgoneseq128xslrr64.unserialize.md) — Desserializa o parâmetro data em um objeto PcgOneseq128XslRr64

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
