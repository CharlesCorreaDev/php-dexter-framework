# Verifica se um float é NAN

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-nan.php

---

# is\_nan

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

is\_nan — Verifica se um float é NAN

### Descrição

function **is\_nan**([float](language.types.float.md) `$num`): [bool](language.types.boolean.md)

Retorna indicando se o `num` é um **`NAN`** ("Not A Number").

**`NAN`** é retornado de operações matemáticas que são indefinidas,
por exemplo ao passar parâmetros fora do domínio de entrada da função. A raiz quadrada
([sqrt()](function.sqrt.md)) só é definida para números positivos, e informar um número negativo
resultará em **`NAN`**. Outros exemplos de operações que retornam **`NAN`**
são a divisão de **`INF`** por **`INF`** e operações que envolvam um
valor **`NAN`** existente.

> **Nota**:
>
> Apesar do nome "Not A Number", **`NAN`** é um valor válido do tipo [float](language.types.float.md).

**Cuidado**

**`NAN`** não se compara em igualdade a **`NAN`**. Para verificar se
um float é **`NAN`**, **is\_nan()** deve ser utilizado. Usar
`$float === NAN` não funcionará.

### Parâmetros

`num`
:   O [float](language.types.float.md) a ser verificado

### Valor Retornado

**`true`** se `num` for **`NAN`**, senão retorna **`false`**.

### Examples

**Exemplo #1 Exemplo de **is\_nan()****

```
<?php
$nan = sqrt(-1);

var_dump($nan, is_nan($nan));
?>
```

O exemplo acima produzirá:

```
float(NAN)
bool(true)
```

### Veja também

- [is\_finite()](function.is-finite.md) - Verifica se um float é finito
- [is\_infinite()](function.is-infinite.md) - Verifica se um float é infinito

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
