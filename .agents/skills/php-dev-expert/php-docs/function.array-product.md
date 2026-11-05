# Calcula o produto dos valores de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-product.php

---

# array\_product

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

array\_product — Calcula o produto dos valores de um array

### Descrição

function **array\_product**([array](language.types.array.md) `$array`): [int](language.types.integer.md)|[float](language.types.float.md)

**array\_product()** retorna o produto dos valores
de um array.

### Parâmetros

`array`
:   O array.

### Valor Retornado

Retorna o produto com um inteiro ou float.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Agora emite um **`E_WARNING`** quando os valores do `array` não puderem ser convertidos para [int](language.types.integer.md) ou [float](language.types.float.md). Anteriormente, [array](language.types.array.md)s e [object](language.types.object.md)s eram ignorados enquanto outros valores eram convertidos para [int](language.types.integer.md). Adicionalmente, objetos que definem uma conversão numérica (ex.: [GMP](class.gmp.md)) agora são convertidos ao invés de ignorados. |

### Examples

**Exemplo #1 Exemplo da **array\_product()****

```
<?php

$a = array(2, 4, 6, 8);
echo "product(a) = " . array_product($a) . "\n";
echo "product(array()) = " . array_product(array()) . "\n";

?>
```

O exemplo acima produzirá:

```
product(a) = 384
product(array()) = 1
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
