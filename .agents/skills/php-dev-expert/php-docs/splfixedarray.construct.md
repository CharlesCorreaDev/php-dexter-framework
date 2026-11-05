# Constrói um novo array fixo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfixedarray.construct.php

---

# SplFixedArray::\_\_construct

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplFixedArray::\_\_construct — Constrói um novo array fixo

### Descrição

public function **SplFixedArray::\_\_construct**([int](language.types.integer.md) `$size` = 0)

Inicializa um array fixo com um número de valores **`null`** igual ao `size`.

### Parâmetros

`size`
:   O tamanho do array fixo.
    Isso espera um número entre `0` e **`PHP_INT_MAX`**.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) quando `size`
é um número inteiro negativo.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Agora lança um [ValueError](class.valueerror.md) se `size` é negativo; anteriormente lançava um [InvalidArgumentException](class.invalidargumentexception.md). |

### Examples

**Exemplo #1 Exemplo de **SplFixedArray::\_\_construct()****

```
<?php
$array = new SplFixedArray(5);

$array[1] = 2;
$array[4] = "foo";

foreach($array as $v) {
  var_dump($v);
}
?>
```

O exemplo acima produzirá:

```
NULL
int(2)
NULL
NULL
string(3) "foo"
```

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
