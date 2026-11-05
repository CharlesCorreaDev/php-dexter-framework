# Verifica se a variável é um booleano

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-bool.php

---

# is\_bool

(PHP 4, PHP 5, PHP 7, PHP 8)

is\_bool — 
Verifica se a variável é um booleano

### Descrição

function **is\_bool**([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Verifica se uma dada variável é um booleano.

### Parâmetros

`value`
:   A variável a ser verificada.

### Valor Retornado

Retorna **`true`** se `value` for um [bool](language.types.boolean.md),
**`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **is\_bool()****

```
<?php
 $a = false;
 $b = 0;

 // Como $a é boolean, retornará true
 if (is_bool($a) === true) {
    echo "Sim, isso é booleano\n";
 }

 // Como $b não é boolean, retornará false
 if (is_bool($b) === false) {
     echo "Não, isso não é booleano\n";
 }
 ?>
```

### Veja também

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
