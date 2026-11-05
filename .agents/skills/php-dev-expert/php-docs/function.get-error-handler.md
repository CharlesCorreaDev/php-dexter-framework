# Obtém a função de manipulação de erro definida pelo usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-error-handler.php

---

# get\_error\_handler

(PHP 8 >= 8.5.0)

get\_error\_handler — Obtém a função de manipulação de erro definida pelo usuário

### Descrição

function **get\_error\_handler**(): [?](language.types.null.md)[callable](language.types.callable.md)

Retorna a função de manipulação de erro atual, se houver.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a função de manipulação de erro atualmente definida (se houver).
Se o manipulador interno estiver sendo usado, retorna **`null`**.

O manipulador retornado é o valor chamável exato que foi passado a
[set\_error\_handler()](function.set-error-handler.md) para defini-lo.

### Examples

**Exemplo #1 Exemplo de **get\_error\_handler()****

```
<?php

$handler = function (int $errno, string $errstr, ?string $errfile, ?int $errline) {
     echo "Erro: " . $errstr . "\n";
};

var_dump(get_error_handler()); // NULL

set_error_handler($handler);

var_dump(get_error_handler() === $handler); // bool(true)

?>
```

### Notas

**Dica**

Antes do PHP 8.5.0, esta funcionalidade poderia ser fornecida pelo
código a seguir:

```
<?php
if (!function_exists('get_error_handler')) {
    function noop_error_handler() {
    }
    function get_error_handler(): ?callable {
        $handler = set_error_handler('noop_error_handler');
        restore_error_handler();
        return $handler;
    }
}
?>
```

### Veja também

- [error\_reporting()](function.error-reporting.md) - Define quais erros do PHP são relatados
- [set\_error\_handler()](function.set-error-handler.md) - Define uma função de usuário para manipulação de erro
- [restore\_error\_handler()](function.restore-error-handler.md) - Restaura a função anterior de gerenciamento de erro
- [trigger\_error()](function.trigger-error.md) - Gera uma mensagem a nível de usuário de erro/alerta/nota
- [Constantes de nível de erro](errorfunc.constants.md)

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
