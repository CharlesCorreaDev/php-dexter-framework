# Funções Matemáticas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.math.php

---

# Funções Matemáticas

# Introdução

Estas funções matemáticas lidam apenas com valores dentro dos limites dos
tipos [int](language.types.integer.md) e [float](language.types.float.md).
Para manipular números maiores, consulte [matemática com precisão arbitrária](book.bc.md) ou
[funções GNU de precisão múltipla](book.gmp.md).

## Veja também

- [Operadores aritméticos](language.operators.arithmetic.md)
- [Funções matemáticas com precisão arbitrária](book.bc.md)
- [Funções GNU de precisão múltipla](book.gmp.md)

- [Constantes predefinidas](math.constants.md)
- [RoundingMode](enum.roundingmode.md) — A enumeração RoundingMode
- [Funções de Math](ref.math.md)
  - [abs](function.abs.md) — Valor absoluto
  - [acos](function.acos.md) — Arco cosseno
  - [acosh](function.acosh.md) — Arco cosseno hiperbólico
  - [asin](function.asin.md) — Arco seno
  - [asinh](function.asinh.md) — Arco seno hiperbólico
  - [atan](function.atan.md) — Arco tangente
  - [atan2](function.atan2.md) — Arco tangente de duas variáveis
  - [atanh](function.atanh.md) — Arco tangente hiperbólico
  - [base\_convert](function.base-convert.md) — Converte um número entre bases arbitrárias
  - [bindec](function.bindec.md) — Binário para decimal
  - [ceil](function.ceil.md) — Arredonda frações para cima
  - [clamp](function.clamp.md) — Return the given value if in range, else return the nearest bound
  - [cos](function.cos.md) — Cosseno
  - [cosh](function.cosh.md) — Cosseno hiperbólico
  - [decbin](function.decbin.md) — Decimal para binário
  - [dechex](function.dechex.md) — Decimal para hexadecimal
  - [decoct](function.decoct.md) — Decimal para octal
  - [deg2rad](function.deg2rad.md) — Converte o número em graus para o equivalente em radianos
  - [exp](function.exp.md) — Calcula o expoente de e
  - [expm1](function.expm1.md) — Retorna exp($num) - 1, computado de forma precisa mesmo
    quando o valor do número está próximo de zero.
  - [fdiv](function.fdiv.md) — Divide dois números de acordo com a IEEE 754
  - [floor](function.floor.md) — Arredonda frações para baixo
  - [fmod](function.fmod.md) — Retorna o resto (módulo) em ponto flutuante da divisão
    dos argumentos
  - [fpow](function.fpow.md) — Eleva um número à potência de outro, de acordo com a IEEE 754
  - [hexdec](function.hexdec.md) — Hexadecimal para decimal
  - [hypot](function.hypot.md) — Calcula o comprimento da hipotenusa de triângulo retângulo
  - [intdiv](function.intdiv.md) — Divisão de inteiros
  - [is\_finite](function.is-finite.md) — Verifica se um float é finito
  - [is\_infinite](function.is-infinite.md) — Verifica se um float é infinito
  - [is\_nan](function.is-nan.md) — Verifica se um float é NAN
  - [log](function.log.md) — Logaritmo natural
  - [log10](function.log10.md) — Logaritmo na base 10
  - [log1p](function.log1p.md) — Retorna log(1 + número), calculado de forma que seja preciso mesmo quando
    o valor do número seja próximo de zero.
  - [max](function.max.md) — Localiza o maior valor
  - [min](function.min.md) — Encontra o menor valor
  - [octdec](function.octdec.md) — Octal para decimal
  - [pi](function.pi.md) — Obtém o valor de pi
  - [pow](function.pow.md) — Expressão exponencial
  - [rad2deg](function.rad2deg.md) — Converte o número em radianos para o equivalente em graus
  - [round](function.round.md) — Arredonda um float
  - [sin](function.sin.md) — Seno
  - [sinh](function.sinh.md) — Seno hiperbólico
  - [sqrt](function.sqrt.md) — Raiz quadrada
  - [tan](function.tan.md) — Tangente
  - [tanh](function.tanh.md) — Tangente hiperbólica

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
