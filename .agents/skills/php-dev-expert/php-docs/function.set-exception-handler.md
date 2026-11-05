# Define uma função de manipulação de exceção definida pelo usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.set-exception-handler.php

---

# set\_exception\_handler

(PHP 5, PHP 7, PHP 8)

set\_exception\_handler — 
Define uma função de manipulação de exceção definida pelo usuário

### Descrição

function **set\_exception\_handler**([?](language.types.null.md)[callable](language.types.callable.md) `$callback`): [?](language.types.null.md)[callable](language.types.callable.md)

Define o manipulador de exceção padrão se uma exceção não for capturada dentro de
um bloco try/catch. A execução irá parar após a função definida no parâmetro
`callback` for chamada.

### Parâmetros

`callback`
:   A função a ser chamada quando uma exceção não capturada ocorrer.
    Esta função de manipulação precisa aceitar um parâmetro,
    que será o objeto [Throwable](class.throwable.md) que foi lançado.
    Tanto [Error](class.error.md) quanto [Exception](class.exception.md)
    implementam a interface [Throwable](class.throwable.md).
    Esta é a assinatura do manipulador:

    function handler([Throwable](class.throwable.md) `$ex`): [void](language.types.void.md)

    **`null`** pode ser passado no lugar, para redefinir este manipulador ao seu estado inicial.

### Valor Retornado

Retorna o manipulador de exceção anteriormente definido, ou **`null`** em caso de erro. Se
nenhum manipulador anterior estava definido, **`null`** também é retornado.

### Examples

**Exemplo #1 Exemplo de **set\_exception\_handler()****

```
<?php
function exception_handler(Throwable $exception) {
  echo "Exceção não capturada: " , $exception->getMessage(), "\n";
}

set_exception_handler('exception_handler');

throw new Exception('Exceção Não Capturada');
echo "Não Executado\n";
?>
```

### Veja também

- [get\_exception\_handler()](function.get-exception-handler.md) - Obtém a função de manipulação de exceção definida pelo usuário
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
