# Arredonda para cima um número de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bcmath-number.ceil.php

---

# BcMath\Number::ceil

(PHP 8 >= 8.4.0)

BcMath\Number::ceil — Arredonda para cima um número de precisão arbitrária

### Descrição

public function **BcMath\Number::ceil**(): [BcMath\Number](class.bcmath-number.md)

Retorna o próximo maior valor inteiro arredondando para cima o valor de
$this se necessário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o resultado como um novo objeto [BcMath\Number](class.bcmath-number.md).
A propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado será sempre `0`.

### Examples

**Exemplo #1 Exemplo de **BcMath\Number::ceil()****

```
<?php
$num1 = new BcMath\Number('4.3')->ceil();
$num2 = new BcMath\Number('9.999')->ceil();
$num3 = new BcMath\Number('-3.14')->ceil();

var_dump($num1, $num2, $num3);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(1) "5"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(2) "10"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(2) "-3"
  ["scale"]=>
  int(0)
}
```

### Veja também

- [bcceil()](function.bcceil.md) - Arredonda para cima um número de precisão arbitrária
- [BcMath\Number::floor()](bcmath-number.floor.md) - Arredonda para baixo um número de precisão arbitrária
- [BcMath\Number::round()](bcmath-number.round.md) - Arredonda um número de precisão arbitrária

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
