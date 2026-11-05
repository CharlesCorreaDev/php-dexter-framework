# Funções matemáticas de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.bc.php

---

# Funções matemáticas de precisão arbitrária

# Introdução

Para matemática de precisão arbitrária, o PHP oferece BCMath, que
suporta números de qualquer tamanho e com precisão de até `2147483647` (ou `0x7FFFFFFF`) dígitos decimais,
até a memória disponível, representadas como strings.

Números válidos (ou bem formados) são strings que concordam com a expressão regular
`/^[+-]?[0-9]*(\.[0-9]*)?$/`.

**Cuidado**

Passar valores de tipo [float](language.types.float.md) para uma função BCMath, que espera
um operando [string](language.types.string.md) pode não funcionar como esperado dado que
o PHP converte valores [float](language.types.float.md) para [string](language.types.string.md), especificamente
que a [string](language.types.string.md) convertida pode estar numa notação exponencial (que não é
suportado no BCMath), e dado que, anteriormente ao PHP 8.0.0, o separador decimal depende da locale configurada
(enquanto BCMath sempre trabalha com ponto).

```
<?php
$num1 = 0; // (string) 0 => '0'
$num2 = -0.000005; // (string) -0.000005 => '-5.05E-6'
echo bcadd($num1, $num2, 6); // => '0.000000'

setlocale(LC_NUMERIC, 'de_DE'); // usa uma vírgula como separador de decimais
$num2 = 1.2; // (string) 1.2 => '1,2'
echo bcsub($num1, $num2, 1); // => '0.0'
?>
```

- [Instalação/Configuração](bc.setup.md)
  - [Instalação](bc.installation.md)
  - [Configurações de Execução](bc.configuration.md)
- [BC Math Funções](ref.bc.md)
  - [bcadd](function.bcadd.md) — Adiciona dois números de precisão arbitrária
  - [bcceil](function.bcceil.md) — Arredonda para cima um número de precisão arbitrária
  - [bccomp](function.bccomp.md) — Compara dois números de precisão arbitrária
  - [bcdiv](function.bcdiv.md) — Divide dois números de precisão arbitrária
  - [bcdivmod](function.bcdivmod.md) — Obtém o quociente e o módulo de um número de precisão arbitrário
  - [bcfloor](function.bcfloor.md) — Arredonda para baixo um número de precisão arbitrária
  - [bcmod](function.bcmod.md) — Obtém o resto de uma divisão com precisão arbitrária
  - [bcmul](function.bcmul.md) — Multiplica dois números de precisão arbitrária
  - [bcpow](function.bcpow.md) — Eleva um número de precisão arbitrária a outro
  - [bcpowmod](function.bcpowmod.md) — Eleva um número de precisão arbitrária para outro, reduzido por um módulo especificado
  - [bcround](function.bcround.md) — Arredonda número de precisão arbitrária
  - [bcscale](function.bcscale.md) — Configura ou obtêm o parâmetro escala para todas as funções bc
  - [bcsqrt](function.bcsqrt.md) — Obtém a raiz quadrada de um número de precisão arbitrária
  - [bcsub](function.bcsub.md) — Subtrai um número de precisão arbitrária de outro
- [BcMath\Number](class.bcmath-number.md) — A classe BcMath\Number
  - [BcMath\Number::add](bcmath-number.add.md) — Adiciona um número de precisão arbitrária
  - [BcMath\Number::ceil](bcmath-number.ceil.md) — Arredonda para cima um número de precisão arbitrária
  - [BcMath\Number::compare](bcmath-number.compare.md) — Compara dois números de precisão arbitrária
  - [BcMath\Number::\_\_construct](bcmath-number.construct.md) — Cria um objeto BcMath\Number
  - [BcMath\Number::div](bcmath-number.div.md) — Divide por um número de precisão arbitrária
  - [BcMath\Number::divmod](bcmath-number.divmod.md) — Obtém quociente e resto de um número de precisão arbitrária
  - [BcMath\Number::floor](bcmath-number.floor.md) — Arredonda para baixo um número de precisão arbitrária
  - [BcMath\Number::mod](bcmath-number.mod.md) — Obtém o resto de um número de precisão arbitrária
  - [BcMath\Number::mul](bcmath-number.mul.md) — Multiplica um número de precisão arbitrária
  - [BcMath\Number::pow](bcmath-number.pow.md) — Eleva um número de precisão arbitrária
  - [BcMath\Number::powmod](bcmath-number.powmod.md) — Eleva um número de precisão arbitrária, reduzido por um módulo especificado
  - [BcMath\Number::round](bcmath-number.round.md) — Arredonda um número de precisão arbitrária
  - [BcMath\Number::\_\_serialize](bcmath-number.serialize.md) — Serializa um objeto BcMath\Number
  - [BcMath\Number::sqrt](bcmath-number.sqrt.md) — Obtém a raiz quadrada de um número de precisão arbitrária
  - [BcMath\Number::sub](bcmath-number.sub.md) — Subtrai um número de precisão arbitrária
  - [BcMath\Number::\_\_toString](bcmath-number.tostring.md) — Converte BcMath\Number em uma string
  - [BcMath\Number::\_\_unserialize](bcmath-number.unserialize.md) — Desserializa um parâmetro de dados em um objeto BcMath\Number

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
