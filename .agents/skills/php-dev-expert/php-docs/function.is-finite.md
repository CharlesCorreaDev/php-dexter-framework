# Verifica se um float é finito

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-finite.php

---

# is\_finite

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

is\_finite — Verifica se um float é finito

### Descrição

function **is\_finite**([float](language.types.float.md) `$num`): [bool](language.types.boolean.md)

Retorna informando se `num` é um float finito.

Um float finito não é **`NAN`** ([is\_nan()](function.is-nan.md)),
nem um infinito ([is\_infinite()](function.is-infinite.md)).

### Parâmetros

`num`
:   O [float](language.types.float.md) a ser verificado

### Valor Retornado

**`true`** se `num` não for **`NAN`**,
**`INF`** nem -**`INF`**, caso contrário retorna **`false`**.

### Examples

**Exemplo #1 Exemplo de **is\_finite()****

```
<?php
$float = 1.2345;
var_dump($float, is_finite($float));

$nan = sqrt(-1);
var_dump($nan, is_finite($nan));

$inf = 1e308 * 2;
var_dump($inf, is_finite($inf));
?>
```

O exemplo acima produzirá:

```
float(1.2345)
bool(true)
float(NAN)
bool(false)
float(INF)
bool(false)
```

### Veja também

- [is\_infinite()](function.is-infinite.md) - Verifica se um float é infinito
- [is\_nan()](function.is-nan.md) - Verifica se um float é NAN

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
