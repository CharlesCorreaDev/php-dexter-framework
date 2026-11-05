# A classe BcMath\Number

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.bcmath-number.php

---

# A classe BcMath\Number

(PHP 8 >= 8.4.0)

## Introdução

Uma classe para número de precisão arbitrária.
Estes objetos suportam sobrecarga de operadores
[aritméticos](language.operators.arithmetic.md) e
[comparativos](language.operators.comparison.md).

> **Nota**:
>
> Esta classe não é afetada pela diretiva INI
> [bcmath.scale](bc.configuration.md#ini.bcmath.scale)
> definida no php.ini.

> **Nota**:
>
> O comportamento de um operador sobrecarregado é o mesmo que especificar **`null`** para o
> parâmetro `scale` no método correspondente.

## Resumo da classe

namespace **BcMath**;

final
readonly
class ****Number****
implements
[Stringable](class.stringable.md) {

/\* Propriedades \*/

public
[string](language.types.string.md)
[$value](class.bcmath-number.md#bcmath-number.props.value);

public
[int](language.types.integer.md)
[$scale](class.bcmath-number.md#bcmath-number.props.scale);

/\* Métodos \*/

public function [\_\_construct](bcmath-number.construct.md)([string](language.types.string.md)|[int](language.types.integer.md) `$num`)

public function [add](bcmath-number.add.md)([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$num`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [BcMath\Number](class.bcmath-number.md)

public function [ceil](bcmath-number.ceil.md)(): [BcMath\Number](class.bcmath-number.md)

public function [compare](bcmath-number.compare.md)([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$num`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [int](language.types.integer.md)

public function [div](bcmath-number.div.md)([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$num`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [BcMath\Number](class.bcmath-number.md)

public function [divmod](bcmath-number.divmod.md)([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$num`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [array](language.types.array.md)

public function [floor](bcmath-number.floor.md)(): [BcMath\Number](class.bcmath-number.md)

public function [mod](bcmath-number.mod.md)([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$num`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [BcMath\Number](class.bcmath-number.md)

public function [mul](bcmath-number.mul.md)([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$num`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [BcMath\Number](class.bcmath-number.md)

public function [pow](bcmath-number.pow.md)([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$exponent`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [BcMath\Number](class.bcmath-number.md)

public function [powmod](bcmath-number.powmod.md)([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$exponent`, [BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$modulus`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [BcMath\Number](class.bcmath-number.md)

public function [round](bcmath-number.round.md)([int](language.types.integer.md) `$precision` = 0, [RoundingMode](enum.roundingmode.md) `$mode` = **`RoundingMode::HalfAwayFromZero`**): [BcMath\Number](class.bcmath-number.md)

public function [\_\_serialize](bcmath-number.serialize.md)(): [array](language.types.array.md)

public function [sqrt](bcmath-number.sqrt.md)([?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [BcMath\Number](class.bcmath-number.md)

public function [sub](bcmath-number.sub.md)([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$num`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [BcMath\Number](class.bcmath-number.md)

public function [\_\_toString](bcmath-number.tostring.md)(): [string](language.types.string.md)

public function [\_\_unserialize](bcmath-number.unserialize.md)([array](language.types.array.md) `$data`): [void](language.types.void.md)

}

## Propriedades

value
:   Uma representação string de um número de precisão arbitrária.

scale
:   O valor de escala atualmente definido no objeto.
    Para objetos resultantes de cálculos, este valore é computado e definido automaticamente,
    a menos que o parâmetro `scale` tenha sido definido no método de cálculo.

## Índice

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
