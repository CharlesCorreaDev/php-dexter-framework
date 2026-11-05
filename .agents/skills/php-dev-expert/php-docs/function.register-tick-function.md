# Registra uma função para execução em cada tique

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.register-tick-function.php

---

# register\_tick\_function

(PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8)

register\_tick\_function — Registra uma função para execução em cada tique

### Descrição

function **register\_tick\_function**([callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `...$args`): [bool](language.types.boolean.md)

Registra a função informada no parâmetro `callback` para ser executada quando um
[tique](control-structures.declare.md#control-structures.declare.ticks) for chamado.

### Parâmetros

`callback`
:   A função a ser registrada.

`args`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **register\_tick\_function()****

```
<?php
declare(ticks=1);

function my_tick_function($param) {
    echo "Função de retorno de tique chamada com o parâmetro: $param\n";
}

register_tick_function('my_tick_function', true);
?>
```

### Veja também

- [declare](control-structures.declare.md)
- [unregister\_tick\_function()](function.unregister-tick-function.md) - Desregistra uma função executada a cada tique

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
