# Calcula a soma dos elementos de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-sum.php

---

# array\_sum

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

array\_sum — Calcula a soma dos elementos de um array

### Descrição

function **array\_sum**([array](language.types.array.md) `$array`): [int](language.types.integer.md)|[float](language.types.float.md)

**array\_sum()** retorna a soma dos valores de um array.

### Parâmetros

`array`
:   O array de entrada.

### Valor Retornado

Retorna a soma de valores como um inteiro ou float; `0` se o
`array` estiver vazio.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Agora emite um **`E_WARNING`** quando os valores do `array` não puderem ser convertidos para [int](language.types.integer.md) ou [float](language.types.float.md). Anteriormente, [array](language.types.array.md)s e [object](language.types.object.md)s eram ignorados enquanto outros valores eram convertidos para [int](language.types.integer.md). Adicionalmente, objetos que definem uma conversão numérica (ex.: [GMP](class.gmp.md)) agora são convertidos ao invés de ignorados. |

### Examples

**Exemplo #1 Exemplos da **array\_sum()****

```
<?php
$a = array(2, 4, 6, 8);
echo "soma(a) = ".array_sum($a)."\n";

$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "soma(b) = ".array_sum($b)."\n";
?>
```

O exemplo acima produzirá:

```
soma(a) = 20
soma(b) = 6.9
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
