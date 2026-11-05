# Arredonda para baixo um número de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bcmath-number.floor.php

---

# BcMath\Number::floor

(PHP 8 >= 8.4.0)

BcMath\Number::floor — Arredonda para baixo um número de precisão arbitrária

### Descrição

public function **BcMath\Number::floor**(): [BcMath\Number](class.bcmath-number.md)

Retorna o próximo maior valor inteiro arredondando para baixo
$this se necessário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o resultado como um novo objeto [BcMath\Number](class.bcmath-number.md).
A propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado será sempre `0`.

### Examples

**Exemplo #1 Exemplo de **BcMath\Number::floor()****

```
<?php
$num1 = new BcMath\Number('4.3')->floor();
$num2 = new BcMath\Number('9.999')->floor();
$num3 = new BcMath\Number('-3.14')->floor();

var_dump($num1, $num2, $num3);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(1) "4"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(1) "9"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(2) "-4"
  ["scale"]=>
  int(0)
}
```

### Veja também

- [bcfloor()](function.bcfloor.md) - Arredonda para baixo um número de precisão arbitrária
- [BcMath\Number::ceil()](bcmath-number.ceil.md) - Arredonda para cima um número de precisão arbitrária
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
