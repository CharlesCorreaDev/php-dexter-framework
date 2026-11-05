# Obtém a raiz quadrada de um número de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bcmath-number.sqrt.php

---

# BcMath\Number::sqrt

(PHP 8 >= 8.4.0)

BcMath\Number::sqrt — Obtém a raiz quadrada de um número de precisão arbitrária

### Descrição

public function **BcMath\Number::sqrt**([?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [BcMath\Number](class.bcmath-number.md)

Retorna a raiz quadrada de $this.

### Parâmetros

`scale`
:   A propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) especifica explicitamente a escala para os resultados de cálculo.
    Se for **`null`**, a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado do cálculo será definida automaticamente.

### Valor Retornado

Retorna a raiz quadrada como um novo objeto [BcMath\Number](class.bcmath-number.md).

Quando a propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do objeto resultante é definida automaticamente,
a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) de $this é usada. Entretanto, em casos como
uma divisão indivisível, a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado é expandida.
A expansão é feita apenas quando necessário, até um limite de `+10`.
Este comportamento é o mesmo de [BcMath\Number::div()](bcmath-number.div.md), consulte este método para detalhes.

Ou seja, se a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) de $this for `5`,
a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado estará entre `5` e
`15`.

### Erros/Exceções

Este método lança uma exceção [ValueError](class.valueerror.md) nos seguintes casos:

- $this é um valor negativo
- `scale` está fora do intervalo válido
- [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do objeto resultante está fora do intervalo válido

### Examples

**Exemplo #1 Exemplo de **BcMath\Number::sqrt()****

```
<?php
var_dump(
    new BcMath\Number('2')->sqrt(),
    new BcMath\Number('2')->sqrt(3),
    new BcMath\Number('4')->sqrt(),
    new BcMath\Number('4')->sqrt(3),
);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(12) "1.4142135623"
  ["scale"]=>
  int(10)
}
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(5) "1.414"
  ["scale"]=>
  int(3)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(1) "2"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#5 (2) {
  ["value"]=>
  string(5) "2.000"
  ["scale"]=>
  int(3)
}
```

### Veja também

- [bcsqrt()](function.bcsqrt.md) - Obtém a raiz quadrada de um número de precisão arbitrária
- [BcMath\Number::div()](bcmath-number.div.md) - Divide por um número de precisão arbitrária
- [BcMath\Number::pow()](bcmath-number.pow.md) - Eleva um número de precisão arbitrária

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
