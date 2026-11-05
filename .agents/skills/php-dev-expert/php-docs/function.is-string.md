# Verifica se o tipo de uma variável é string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-string.php

---

# is\_string

(PHP 4, PHP 5, PHP 7, PHP 8)

is\_string — Verifica se o tipo de uma variável é string

### Descrição

function **is\_string**([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Verifica se o tipo da variável informada é string.

### Parâmetros

`value`
:   A variável a ser analisada.

### Valor Retornado

Retorna **`true`** se `value` for do tipo [string](language.types.string.md),
**`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **is\_string()****

```
<?php
$values = array(false, true, null, 'abc', '23', 23, '23.5', 23.5, '', ' ', '0', 0);
foreach ($values as $value) {
    echo "is_string(";
    var_export($value);
    echo ") = ";
    echo var_dump(is_string($value));
}
?>
```

O exemplo acima produzirá:

```
is_string(false) = bool(false)
is_string(true) = bool(false)
is_string(NULL) = bool(false)
is_string('abc') = bool(true)
is_string('23') = bool(true)
is_string(23) = bool(false)
is_string('23.5') = bool(true)
is_string(23.5) = bool(false)
is_string('') = bool(true)
is_string(' ') = bool(true)
is_string('0') = bool(true)
is_string(0) = bool(false)
```

### Veja também

- [is\_float()](function.is-float.md) - Verifica se a variável é do tipo float
- [is\_int()](function.is-int.md) - Informa se o tipo de uma variável é um inteiro
- [is\_bool()](function.is-bool.md) - Verifica se a variável é um booleano
- [is\_object()](function.is-object.md) - Verifica se uma variável é um objeto
- [is\_array()](function.is-array.md) - Verifica se a variável é um array

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
