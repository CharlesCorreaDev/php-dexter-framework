# Obtém quociente e resto de um número de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bcmath-number.divmod.php

---

# BcMath\Number::divmod

(PHP 8 >= 8.4.0)

BcMath\Number::divmod — Obtém quociente e resto de um número de precisão arbitrária

### Descrição

public function **BcMath\Number::divmod**([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$num`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [array](language.types.array.md)

Obtém quociente e resto da divisão de $this por `num`.

### Parâmetros

`num`
:   O divisor.

`scale`
:   A propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) especifica explicitamente a escala para os resultados de cálculo.
    Se for **`null`**, a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado do cálculo será definida automaticamente.

### Valor Retornado

Retorna um [array](language.types.array.md) indexado onde o primeiro elemento é o quociente como um novo
objeto [BcMath\Number](class.bcmath-number.md) e o segundo elemento é o resto como um novo
objeto [BcMath\Number](class.bcmath-number.md).

O quociente é sempre um valor inteiro, portanto a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do quociente será
sempre `0`, independente se `scale` foi definido explicitamente.

Se `scale` for definido explicitamente, a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do
resto será o valor especificado.
Quando a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do objeto de resto do resultado for definida automaticamente,
a maior [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) dos dois números usados para a operação de resto é usada.

Isto é, se as [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale)s de dois valores forem `2`
e `5` respectivamente, a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resto
será `5`.

### Erros/Exceções

Este método lança uma exceção [ValueError](class.valueerror.md) nos seguintes casos:

- `num` é [string](language.types.string.md) e não é uma string numérica BCMath bem formada
- `scale` está fora do intervalo válido

Este método lança uma exceção [DivisionByZeroError](class.divisionbyzeroerror.md) se
`num` for `0`.

### Examples

**Exemplo #1 Exemplo de **BcMath\Number::divmod()** quando `scale` não for especificado**

```
<?php
echo '8.3 / 2.22' . PHP_EOL;
[$quot, $rem] = new BcMath\Number('8')->divmod(new BcMath\Number('2.22'));
var_dump($quot, $rem);

echo PHP_EOL . '8.3 / 8.3' . PHP_EOL;
[$quot, $rem] = new BcMath\Number('8.3')->divmod('8.3');
var_dump($quot, $rem);

echo PHP_EOL . '10 / -3' . PHP_EOL;
[$quot, $rem] = new BcMath\Number('10')->divmod(-3);
var_dump($quot, $rem);
?>
```

O exemplo acima produzirá:

```
8.3 / 2.22
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(1) "3"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(4) "1.34"
  ["scale"]=>
  int(2)
}

8.3 / 8.3
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(1) "1"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#5 (2) {
  ["value"]=>
  string(3) "0.0"
  ["scale"]=>
  int(1)
}

10 / -3
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(2) "-3"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#1 (2) {
  ["value"]=>
  string(1) "1"
  ["scale"]=>
  int(0)
}
```

**Exemplo #2 Exemplo de **BcMath\Number::divmod()** especificando `scale` explicitamente**

```
<?php
echo '8.3 / 2.22' . PHP_EOL;
[$quot, $rem] = new BcMath\Number('8')->divmod(new BcMath\Number('2.22'), 1);
var_dump($quot, $rem);

echo PHP_EOL . '8.3 / 8.3' . PHP_EOL;
[$quot, $rem] = new BcMath\Number('8.3')->divmod('8.3', 4);
var_dump($quot, $rem);

echo PHP_EOL . '10 / -3' . PHP_EOL;
[$quot, $rem] = new BcMath\Number('10')->divmod(-3, 5);
var_dump($quot, $rem);
?>
```

O exemplo acima produzirá:

```
8.3 / 2.22
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(1) "3"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(3) "1.3"
  ["scale"]=>
  int(1)
}

8.3 / 8.3
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(1) "1"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#5 (2) {
  ["value"]=>
  string(6) "0.0000"
  ["scale"]=>
  int(4)
}

10 / -3
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(2) "-3"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#1 (2) {
  ["value"]=>
  string(7) "1.00000"
  ["scale"]=>
  int(5)
}
```

### Veja também

- [bcdivmod()](function.bcdivmod.md) - Obtém o quociente e o módulo de um número de precisão arbitrário
- [BcMath\Number::div()](bcmath-number.div.md) - Divide por um número de precisão arbitrária
- [BcMath\Number::mod()](bcmath-number.mod.md) - Obtém o resto de um número de precisão arbitrária

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
