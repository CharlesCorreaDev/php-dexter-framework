# Atualiza as funções de retorno de chamada de evento de um socket

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.swoole-event-set.php

---

# swoole\_event\_set

(PECL swoole >= 1.9.0)

swoole\_event\_set — Atualiza as funções de retorno de chamada de evento de um socket

### Descrição

function **swoole\_event\_set**(  
    [int](language.types.integer.md) `$fd`,  
    [callable](language.types.callable.md) `$read_callback` = ?,  
    [callable](language.types.callable.md) `$write_callback` = ?,  
    [int](language.types.integer.md) `$events` = 0  
): [bool](language.types.boolean.md)

### Parâmetros

`fd`

`read_callback`

`write_callback`

`events`

### Valor Retornado

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
