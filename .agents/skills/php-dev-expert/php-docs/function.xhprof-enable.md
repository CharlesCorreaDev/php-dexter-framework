# Inicia o perfilador xhprof

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xhprof-enable.php

---

# xhprof\_enable

(PECL xhprof >= 0.9.0)

xhprof\_enable — Inicia o perfilador xhprof

### Descrição

function **xhprof\_enable**([int](language.types.integer.md) `$flags` = 0, [array](language.types.array.md) `$options` = ?): [void](language.types.void.md)

Inicia o perfilador xhprof.

### Parâmetros

`flags`
:   Sinalizadores opcionais para adicionar informações adicionais ao perfil. Consulte as
    [constantes XHprof](xhprof.constants.md) para mais
    informações sobre esses sinalizadores, por exemplo, **`XHPROF_FLAGS_MEMORY`**
    para habilitar o perfil de memória.

`options`
:   Um [array](language.types.array.md) de opções, nomeadamente, a opção
    'ignored\_functions' para passar as funções que serão ignoradas
    durante a perfilagem.

### Valor Retornado

**`null`**

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL xhprof 0.9.2 | O parâmetro opcional `options` foi adicionado. |

### Examples

**Exemplo #1 Exemplos de **xhprof\_enable()****

```
<?php
// 1. perfilagem de tempo decorrido + memória + CPU; e ignora funções internas
xhprof_enable(XHPROF_FLAGS_NO_BUILTINS | XHPROF_FLAGS_CPU | XHPROF_FLAGS_MEMORY);

// 2. perfilagem de tempo decorrido; ignora call_user_func* durante a perfilagem
xhprof_enable(
    0,
    array('ignored_functions' =>  array('call_user_func',
                                        'call_user_func_array')));

// 3. perfilagem de tempo decorrido + memória; ignora call_user_func* durante a perfilagem
xhprof_enable(
    XHPROF_FLAGS_MEMORY,
    array('ignored_functions' =>  array('call_user_func',
                                        'call_user_func_array')));
?>
```

### Veja também

- [xhprof\_disable()](function.xhprof-disable.md) - Interrompe o perfilador xhprof
- [xhprof\_sample\_enable()](function.xhprof-sample-enable.md) - Inicia o perfilador do XHProf no modo de amostragem
- [memory\_get\_usage()](function.memory-get-usage.md) - Retorna a quantidade de memória alocada para o PHP
- [getrusage()](function.getrusage.md) - Obtém os usos atuais de recursos

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
