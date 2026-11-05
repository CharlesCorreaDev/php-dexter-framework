# Verifica se a variável é um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-array.php

---

# is\_array

(PHP 4, PHP 5, PHP 7, PHP 8)

is\_array — Verifica se a variável é um array

### Descrição

function **is\_array**([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Verifica se uma dada variável é um array.

### Parâmetros

`value`
:   A variável a ser avaliada.

### Valor Retornado

Retorna **`true`** se `value` é um [array](language.types.array.md),
**`false`** caso contrário.

### Examples

**Exemplo #1 Verificando se a variável é um array**

```
<?php
$sim = array('este', 'é', 'um array');

echo is_array($sim) ? 'Array' : 'não Array';
echo "\n";

$nao = 'esta é uma string';

echo is_array($nao) ? 'Array' : 'não Array';
?>
```

O exemplo acima produzirá:

```
Array
não Array
```

### Veja também

- [array\_is\_list()](function.array-is-list.md) - Verifica se um array é uma lista
- [is\_float()](function.is-float.md) - Verifica se a variável é do tipo float
- [is\_int()](function.is-int.md) - Informa se o tipo de uma variável é um inteiro
- [is\_string()](function.is-string.md) - Verifica se o tipo de uma variável é string
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
