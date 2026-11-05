# Exclui função ou método adicionado anteriormente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-del-function.php

---

# uopz\_del\_function

(PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_del\_function — Exclui função ou método adicionado anteriormente

### Descrição

function **uopz\_del\_function**([string](language.types.string.md) `$function`): [bool](language.types.boolean.md)

function **uopz\_del\_function**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$function`, [int](language.types.integer.md) `&$all` = **`true`**): [bool](language.types.boolean.md)

Exclui função ou método adicionado anteriormente.

### Parâmetros

`class`
:   O nome da classe.

`function`
:   O nome da função ou do método.

`all`
:   Informa se todas as classes que descendem de `class` também serão
    afetadas.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

**uopz\_del\_function()** lança uma [RuntimeException](class.runtimeexception.md)
se a função ou método a ser excluído não tiver sido adicionado por [uopz\_add\_function()](function.uopz-add-function.md).

### Examples

**Exemplo #1 Uso básico de **uopz\_del\_function()****

```
<?php
uopz_add_function('foo', function () {echo 'bar';});
var_dump(function_exists('foo'));
uopz_del_function('foo');
var_dump(function_exists('foo'));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
```

### Veja também

- [uopz\_add\_function()](function.uopz-add-function.md) - Adiciona função ou método inexistente
- [uopz\_unset\_return()](function.uopz-unset-return.md) - Desfaz um valor de retorno previamente definido para uma função

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
