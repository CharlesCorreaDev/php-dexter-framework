# Verifica se um float é infinito

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-infinite.php

---

# is\_infinite

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

is\_infinite — Verifica se um float é infinito

### Descrição

function **is\_infinite**([float](language.types.float.md) `$num`): [bool](language.types.boolean.md)

Retorna informando se `num` é **`INF`**
ou -**`INF`**.

### Parâmetros

`num`
:   O [float](language.types.float.md) a ser verificado

### Valor Retornado

**`true`** se `num` for **`INF`**
ou -**`INF`**, senão retorna **`false`**.

### Examples

**Exemplo #1 Exemplo de **is\_infinite()****

```
<?php
$inf = 1e308 * 2;

var_dump($inf, is_infinite($inf));

$negative_inf = -$inf;

var_dump($negative_inf, is_infinite($negative_inf));
?>
```

O exemplo acima produzirá:

```
float(INF)
bool(true)
float(-INF)
bool(true)
```

### Veja também

- [is\_finite()](function.is-finite.md) - Verifica se um float é finito
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
