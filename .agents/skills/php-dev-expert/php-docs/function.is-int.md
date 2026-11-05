# Informa se o tipo de uma variável é um inteiro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-int.php

---

# is\_int

(PHP 4, PHP 5, PHP 7, PHP 8)

is\_int — Informa se o tipo de uma variável é um inteiro

### Descrição

function **is\_int**([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Verifica se o tipo da variável informada é um inteiro.

> **Nota**:
>
> Para verificar se a variável é um número ou uma string numérica (como em entrada
> de formulário, que é sempre uma string), deve-se usar
> [is\_numeric()](function.is-numeric.md).

### Parâmetros

`value`
:   A variável a ser avaliada.

### Valor Retornado

Retorna **`true`** se `value` for um [int](language.types.integer.md),
**`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **is\_int()****

```
<?php
$values = array(23, "23", 23.5, "23.5", null, true, false);
foreach ($values as $value) {
    echo "is_int(";
    var_export($value);
    echo ") = ";
    var_dump(is_int($value));
}
?>
```

O exemplo acima produzirá:

```
is_int(23) = bool(true)
is_int('23') = bool(false)
is_int(23.5) = bool(false)
is_int('23.5') = bool(false)
is_int(NULL) = bool(false)
is_int(true) = bool(false)
is_int(false) = bool(false)
```

### Veja também

- [is\_bool()](function.is-bool.md) - Verifica se a variável é um booleano
- [is\_float()](function.is-float.md) - Verifica se a variável é do tipo float
- [is\_numeric()](function.is-numeric.md) - Verifica se uma variável é um número ou uma string numérica
- [is\_string()](function.is-string.md) - Verifica se o tipo de uma variável é string
- [is\_array()](function.is-array.md) - Verifica se a variável é um array
- [is\_object()](function.is-object.md) - Verifica se uma variável é um objeto

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
