# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random.constants.php

---

# Constantes predefinidas

As constantes abaixo estão sempre disponíveis como parte do núcleo do PHP.

**`MT_RAND_MT19937`** ([int](language.types.integer.md))
:   Indica que a implementação correta de [» Mt19937](https://www.math.sci.hiroshima-u.ac.jp/m-mat/MT/ARTICLES/mt.pdf) (Mersenne Twister)
    será usada pelo algoritmo, ao criar um [Random\Engine\Mt19937](class.random-engine-mt19937.md)
    usando [Random\Engine\Mt19937::\_\_construct()](random-engine-mt19937.construct.md) ou propagando o Mersenne Twister global
    com [mt\_srand()](function.mt-srand.md).

**`MT_RAND_PHP`** ([int](language.types.integer.md))
:   Indica que uma implementação incorreta do Mersenne Twister será usada pelo algoritmo, ao
    criar uma instância [Random\Engine\Mt19937](class.random-engine-mt19937.md) usando [Random\Engine\Mt19937::\_\_construct()](random-engine-mt19937.construct.md)
    ou propagando o global Mersenne Twister com [mt\_srand()](function.mt-srand.md).

    A implementação incorreta está disponível para compatibilidade retroativa com
    [mt\_srand()](function.mt-srand.md) anteriores ao PHP 7.1.0.

    **Aviso**

    Este recurso foi
    *DESCONTINUADO* a partir do PHP 8.3.0. O uso deste recurso
    é fortemente desencorajado.

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
