# Obtém a função de manipulação de exceção definida pelo usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-exception-handler.php

---

# get\_exception\_handler

(PHP 8 >= 8.5.0)

get\_exception\_handler — Obtém a função de manipulação de exceção definida pelo usuário

### Descrição

function **get\_exception\_handler**(): [?](language.types.null.md)[callable](language.types.callable.md)

Retorna a função de manipulação de exceção atual, se houver.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a função de manipulação de exceção atualmente definida (se houver).
Se nenhum manipulador estiver definido, retorna **`null`**.

O manipulador retornado é o valor chamável exato que foi passado a
[set\_exception\_handler()](function.set-exception-handler.md) para defini-lo.

### Examples

**Exemplo #1 Exemplo de **get\_exception\_handler()****

```
<?php

$handler = function (Throwable $ex) {
     echo "Exceção: " . $ex::class . ": " . $ex->getMessage() . "\n";
};

var_dump(get_exception_handler()); // NULL

set_exception_handler($handler);

var_dump(get_exception_handler() === $handler); // bool(true)

?>
```

### Notas

**Dica**

Antes do PHP 8.5.0, esta funcionalidade poderia ser fornecida pelo
código a seguir:

```
<?php
if (!function_exists('get_exception_handler')) {
    function noop_exception_handler() {
    }
    function get_exception_handler(): ?callable {
        $handler = set_exception_handler('noop_exception_handler');
        restore_exception_handler();
        return $handler;
    }
}
?>
```

### Veja também

- [set\_exception\_handler()](function.set-exception-handler.md) - Define uma função de manipulação de exceção definida pelo usuário
- [restore\_exception\_handler()](function.restore-exception-handler.md) - Restaura a função de manipulação de exceção anteriormente definida
- [restore\_error\_handler()](function.restore-error-handler.md) - Restaura a função anterior de gerenciamento de erro
- [error\_reporting()](function.error-reporting.md) - Define quais erros do PHP são relatados
- [Exceções](language.error-handling.throwable.md#language.exceptions)

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
