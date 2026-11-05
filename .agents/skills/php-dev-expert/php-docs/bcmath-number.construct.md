# Cria um objeto BcMath\Number

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bcmath-number.construct.php

---

# BcMath\Number::\_\_construct

(PHP 8 >= 8.4.0)

BcMath\Number::\_\_construct — Cria um objeto BcMath\Number

### Descrição

public function **BcMath\Number::\_\_construct**([string](language.types.string.md)|[int](language.types.integer.md) `$num`)

Cria um objeto [BcMath\Number](class.bcmath-number.md) a partir de um valor [int](language.types.integer.md) ou [string](language.types.string.md).

### Parâmetros

`num`
:   Um valor [int](language.types.integer.md) ou [string](language.types.string.md).
    Se `num` for um [int](language.types.integer.md),
    [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) será sempre definida como `0`.
    Se `num` for uma [string](language.types.string.md), precisa ser um número válido
    e [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) será definida automaticamente interpretando a string.

### Erros/Exceções

Este método lança uma exceção [ValueError](class.valueerror.md) se `num`
for uma [string](language.types.string.md) e não for uma string numérica BCMath bem formada.

### Examples

**Exemplo #1 Exemplo de **BcMath\Number::\_\_construct()****

```
<?php
$num1 = new BcMath\Number(100);
$num2 = new BcMath\Number('-200');
$num3 = new BcMath\Number('300.00');

var_dump($num1, $num2, $num3);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#1 (2) {
  ["value"]=>
  string(3) "100"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(4) "-200"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(6) "300.00"
  ["scale"]=>
  int(2)
}
```

### Veja também

- [BcMath\Number::\_\_serialize()](bcmath-number.serialize.md) - Serializa um objeto BcMath\Number
- [BcMath\Number::\_\_unserialize()](bcmath-number.unserialize.md) - Desserializa um parâmetro de dados em um objeto BcMath\Number

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
