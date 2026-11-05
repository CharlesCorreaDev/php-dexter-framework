# Verifica se uma variável é um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-object.php

---

# is\_object

(PHP 4, PHP 5, PHP 7, PHP 8)

is\_object — Verifica se uma variável é um objeto

### Descrição

function **is\_object**([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Verifica se a variável fornecida é um objeto.

### Parâmetros

`value`
:   A variável a ser avaliada.

### Valor Retornado

Retorna **`true`** se `value` for um [object](language.types.object.md),
**`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | **is\_object()** agora retorna **`true`** para objetos desserializados sem definição de classe (classe de [\_\_PHP\_Incomplete\_Class](class.php-incomplete-class.md)). Anteriormente **`false`** era retornado. |

### Examples

**Exemplo #1 Exemplo de **is\_object()****

```
<?php
// Declara uma função simples para retornar um
// array do nosso objeto
function get_students($obj)
{
    if (!is_object($obj)) {
        return false;
    }

    return $obj->students;
}

// Declara uma nova instância de classe e preenche
// alguns valores
$obj = new stdClass();
$obj->students = array('Kalle', 'Ross', 'Felipe');

var_dump(get_students(null));
var_dump(get_students($obj));
?>
```

### Veja também

- [is\_bool()](function.is-bool.md) - Verifica se a variável é um booleano
- [is\_int()](function.is-int.md) - Informa se o tipo de uma variável é um inteiro
- [is\_float()](function.is-float.md) - Verifica se a variável é do tipo float
- [is\_string()](function.is-string.md) - Verifica se o tipo de uma variável é string
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
