# Strings numéricas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.numeric-strings.php

---

## Strings numéricas

Uma [string](language.types.string.md) PHP é considerada numérica se puder ser interpretada
como [int](language.types.integer.md) ou [float](language.types.float.md).

Formalmente a partir do PHP 8.0.0:

```
WHITESPACES      \s*
LNUM             [0-9]+
DNUM             ([0-9]*[\.]{LNUM}) | ({LNUM}[\.][0-9]*)
EXPONENT_DNUM    (({LNUM} | {DNUM}) [eE][+-]? {LNUM})
INT_NUM_STRING   {WHITESPACES} [+-]? {LNUM} {WHITESPACES}
FLOAT_NUM_STRING {WHITESPACES} [+-]? ({DNUM} | {EXPONENT_DNUM}) {WHITESPACES}
NUM_STRING       ({INT_NUM_STRING} | {FLOAT_NUM_STRING})
```

O PHP também tem um conceito de strings numéricas *principais*.
Isso é simplesmente uma string que começa como uma string numérica seguida por
qualquer caractere.

> **Nota**:
>
> Qualquer string que contenha a letra `E` (sem distinção entre maiúsculas e minúsculas)
> delimitada por números será vista como um número expresso em notação científica.
> Isso pode produzir resultados inesperados.
>
> **Exemplo #1 Comparações de notações científicas**
>
> ```
> <?php
> var_dump("0D1" == "000"); // falso, "0D1" não é notação científica
> var_dump("0E1" == "000"); // verdadeiro, "0E1" é 0 * (10 ^ 1), ou 0
> var_dump("2E1" == "020"); // verdadeiro, "2E1" é 2 * (10 ^ 1), ou 20
> ?>
> ```

### Strings usadas em contextos numéricos

Quando uma [string](language.types.string.md) precisa ser avaliada como um número (por exemplo, operações
aritméticas, declaração de tipo [int](language.types.integer.md), etc.), as seguintes etapas
são executadas para determinar o resultado:

1. Se a [string](language.types.string.md) for numérica, resolva para um [int](language.types.integer.md) se
   a [string](language.types.string.md) for uma string numérica inteira e se encaixar nos
   limites do tipo [int](language.types.integer.md) (conforme definido por
   **`PHP_INT_MAX`**), caso contrário resolva para um
   [float](language.types.float.md).
2. Se o contexto permitir strings numéricas iniciais e a [string](language.types.string.md)
   for uma, resolva para um [int](language.types.integer.md) se a parte inicial da string for uma
   [string](language.types.string.md) numérica inteira e se encaixar nos
   limites do tipo [int](language.types.integer.md) (conforme definido por
   **`PHP_INT_MAX`**), caso contrário resolva para um
   [float](language.types.float.md).
   Além disso, um erro de nível **`E_WARNING`** é gerado.
3. Se a [string](language.types.string.md) não for numérica, lança um
   [TypeError](class.typeerror.md).

### Comportamento antes do PHP 8.0.0

Antes do PHP 8.0.0, uma [string](language.types.string.md) era considerada numérica se
tivesse espaços em branco somente à *esquerda*, se tivesse espaços em branco à
*direita*, a string era considerada
numérica à esquerda.

Antes do PHP 8.0.0, quando uma string era usada em um contexto numérico,
ela executava as mesmas etapas acima com as seguintes diferenças:

- O uso de uma sequência numérica inicial geraria um
  **`E_NOTICE`** em vez de um **`E_WARNING`**.
- Se a string não fosse numérica, um **`E_WARNING`** era
  emitido e o valor `0` seria retornado.

Antes do PHP 7.1.0, nem **`E_NOTICE`** nem
**`E_WARNING`** eram gerados.

```
<?php
$foo = 1 + "10.5";                // $foo é float (11.5)
$foo = 1 + "-1.3e3";              // $foo é float (-1299)
$foo = 1 + "bob-1.3e3";           // TypeError a partir do PHP 8.0.0, $foo é inteiro (1) anteriormente
$foo = 1 + "bob3";                // TypeError a partir do PHP 8.0.0, $foo é inteiro (1) anteriormente
$foo = 1 + "10 Small Pigs";       // $foo é inteiro (11) e um E_WARNING é emitido no PHP 8.0.0, E_NOTICE anteriormente
$foo = 4 + "10.2 Little Piggies"; // $foo é float (14.2) e um E_WARNING é emitido no PHP 8.0.0, E_NOTICE anteriormente
$foo = "10.0 pigs " + 1;          // $foo é float (11) e um E_WARNING é emitido no PHP 8.0.0, E_NOTICE anteriormente
$foo = "10.0 pigs " + 1.0;        // $foo é float (11) e um E_WARNING é emitido no PHP 8.0.0, E_NOTICE anteriormente
?>
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
