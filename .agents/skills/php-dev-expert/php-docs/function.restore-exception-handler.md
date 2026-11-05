# Restaura a função de manipulação de exceção anteriormente definida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.restore-exception-handler.php

---

# restore\_exception\_handler

(PHP 5, PHP 7, PHP 8)

restore\_exception\_handler — 
Restaura a função de manipulação de exceção anteriormente definida

### Descrição

function **restore\_exception\_handler**(): [true](language.types.singleton.md)

Usada após alteração da função de manipulação de exceção ao usar
[set\_exception\_handler()](function.set-exception-handler.md), para reverter ao manipulador
de exceção anterior (que pode ser o integrado ou uma função definida pelo
usuário).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Sempre retorna **`true`**.

### Examples

**Exemplo #1 Exemplo **restore\_exception\_handler()****

```
<?php
    function manipulador_excecao_1(Exception $e)
    {
        echo '[' . __FUNCTION__ . '] ' . $e->getMessage();
    }

    function manipulador_excecao_2(Exception $e)
    {
        echo '[' . __FUNCTION__ . '] ' . $e->getMessage();
    }

    set_exception_handler('manipulador_excecao_1');
    set_exception_handler('manipulador_excecao_2');

    restore_exception_handler();

    throw new Exception('Isto dispara o primeiro manipulador de exceção...');
?>
```

O exemplo acima produzirá:

```
[manipulador_excecao_1] Isto dispara o primeiro manipulador de exceção...
```

### Veja também

- [set\_exception\_handler()](function.set-exception-handler.md) - Define uma função de manipulação de exceção definida pelo usuário
- [get\_exception\_handler()](function.get-exception-handler.md) - Obtém a função de manipulação de exceção definida pelo usuário
- [set\_error\_handler()](function.set-error-handler.md) - Define uma função de usuário para manipulação de erro
- [restore\_error\_handler()](function.restore-error-handler.md) - Restaura a função anterior de gerenciamento de erro
- [error\_reporting()](function.error-reporting.md) - Define quais erros do PHP são relatados

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
