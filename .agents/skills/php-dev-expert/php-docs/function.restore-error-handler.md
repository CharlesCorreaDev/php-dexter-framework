# Restaura a função anterior de gerenciamento de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.restore-error-handler.php

---

# restore\_error\_handler

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

restore\_error\_handler — Restaura a função anterior de gerenciamento de erro

### Descrição

function **restore\_error\_handler**(): [true](language.types.singleton.md)

Usada após mudar a função que gerencia os erros usando
[set\_error\_handler()](function.set-error-handler.md), para reverter para a função anterior
(que pode ser a função interna ou outra função definida pelo usuário).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Sempre retorna **`true`**.

### Examples

**Exemplo #1 Exemplo de **restore\_error\_handler()****

Decide se [unserialize()](function.unserialize.md) causou um erro, então
restaura o gerenciador de erro original.

```
<?php
function unserialize_handler($errno, $errstr)
{
    echo "Valor serializado inválido.\n";
}

$serialized = 'foo';
set_error_handler('unserialize_handler');
$original = unserialize($serialized);
restore_error_handler();
?>
```

O exemplo acima produzirá:

```
Valor serializado inválido.
```

### Veja também

- [error\_reporting()](function.error-reporting.md) - Define quais erros do PHP são relatados
- [set\_error\_handler()](function.set-error-handler.md) - Define uma função de usuário para manipulação de erro
- [get\_error\_handler()](function.get-error-handler.md) - Obtém a função de manipulação de erro definida pelo usuário
- [restore\_exception\_handler()](function.restore-exception-handler.md) - Restaura a função de manipulação de exceção anteriormente definida
- [trigger\_error()](function.trigger-error.md) - Gera uma mensagem a nível de usuário de erro/alerta/nota

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
