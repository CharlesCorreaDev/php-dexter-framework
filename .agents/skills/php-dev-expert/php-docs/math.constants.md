# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/math.constants.php

---

# Constantes predefinidas

As constantes abaixo estão sempre disponíveis como parte do núcleo do PHP.

**Constantes matemáticas**

**`M_PI`** ([float](language.types.float.md))
:   Aproximação do número π (pi).
    (`3.14159265358979323846`).

**`M_E`** ([float](language.types.float.md))
:   Aproximação do número de Euler `e`
    (`2.7182818284590452354`).

**`M_LOG2E`** ([float](language.types.float.md))
:   Aproximação de `log2(e)`
    (`1.4426950408889634074`).

**`M_LOG10E`** ([float](language.types.float.md))
:   Aproximação de `log10(e)`
    (`0.43429448190325182765`).

**`M_LN2`** ([float](language.types.float.md))
:   Aproximação de `ln(2)`
    (`0.69314718055994530942`).

**`M_LN10`** ([float](language.types.float.md))
:   Aproximação de `ln(10)`
    (`2.30258509299404568402`).

**`M_PI_2`** ([float](language.types.float.md))
:   Aproximação de `π/2`
    (`1.57079632679489661923`).

**`M_PI_4`** ([float](language.types.float.md))
:   Aproximação de `π/4`
    (`0.78539816339744830962`).

**`M_1_PI`** ([float](language.types.float.md))
:   Aproximação de `1/π`
    (`0.31830988618379067154`).

**`M_2_PI`** ([float](language.types.float.md))
:   Aproximação de `2/π`
    (`0.63661977236758134308`).

**`M_SQRTPI`** ([float](language.types.float.md))
:   Aproximação de `sqrt(π)`
    (`1.77245385090551602729`).

**`M_2_SQRTPI`** ([float](language.types.float.md))
:   Aproximação de `2/sqrt(π)`
    (`1.12837916709551257390`).

**`M_SQRT2`** ([float](language.types.float.md))
:   Aproximação de `sqrt(2)`
    (`1.41421356237309504880`).

**`M_SQRT3`** ([float](language.types.float.md))
:   Aproximação de `sqrt(3)`
    (`1.73205080756887729352`).

**`M_SQRT1_2`** ([float](language.types.float.md))
:   Aproximação de `1/sqrt(2)`
    (`0.70710678118654752440`).

**`M_LNPI`** ([float](language.types.float.md))
:   Aproximação de `ln(π)`
    (`1.14472988584940017414`).

**`M_EULER`** ([float](language.types.float.md))
:   Aproximação da constante de Euler γ
    (`0.57721566490153286061`).

**Constantes de ponto flutuante IEEE 754**

**`NAN`** ([float](language.types.float.md))
:   Um não-número (Not A Number)

**`INF`** ([float](language.types.float.md))
:   Infinito

**Constantes de arredondamento**
> **Nota**:
>
> A partir do PHP 8.4.0, é recomendado usar a
> enumeração
> RoundingMode no lugar destas constantes.

**`PHP_ROUND_HALF_UP`** ([int](language.types.integer.md))
:   Arredonda a metade na direção oposta ao zero.

**`PHP_ROUND_HALF_DOWN`** ([int](language.types.integer.md))
:   Arredonda a metade na direção do zero.

**`PHP_ROUND_HALF_EVEN`** ([int](language.types.integer.md))
:   Arredonda a metade para o número par.

**`PHP_ROUND_HALF_ODD`** ([int](language.types.integer.md))
:   Arredonda a metade para o número ímpar.

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
