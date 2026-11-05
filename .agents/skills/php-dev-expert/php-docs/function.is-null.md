# Verifica se uma variável é null

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-null.php

---

# is\_null

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

is\_null — 
Verifica se uma variável é **`null`**

### Descrição

function **is\_null**([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Verifica se a variável fornecida é **`null`**.

### Parâmetros

`value`
:   A variável a ser avaliada.

### Valor Retornado

Retorna **`true`** se `value` for [null](language.types.null.md), **`false`**
caso contrário.

### Examples

**Exemplo #1 Exemplo de **is\_null()****

```
<?php

error_reporting(E_ALL);

$foo = NULL;
var_dump(is_null($inexistent), is_null($foo));

?>
```

### Veja também

- O tipo [**`null`**](language.types.null.md#language.types.null.syntax)
- [isset()](function.isset.md) - Determina se uma variável está declarada e é diferente de null
- [is\_bool()](function.is-bool.md) - Verifica se a variável é um booleano
- [is\_numeric()](function.is-numeric.md) - Verifica se uma variável é um número ou uma string numérica
- [is\_float()](function.is-float.md) - Verifica se a variável é do tipo float
- [is\_int()](function.is-int.md) - Informa se o tipo de uma variável é um inteiro
- [is\_string()](function.is-string.md) - Verifica se o tipo de uma variável é string
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
