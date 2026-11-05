# Adiciona novas funções de retorno de chamada de um socket no EventLoop

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.swoole-event-add.php

---

# swoole\_event\_add

(PECL swoole >= 1.9.0)

swoole\_event\_add — Adiciona novas funções de retorno de chamada de um socket no EventLoop

### Descrição

function **swoole\_event\_add**(  
    [int](language.types.integer.md) `$fd`,  
    [callable](language.types.callable.md) `$read_callback` = ?,  
    [callable](language.types.callable.md) `$write_callback` = ?,  
    [int](language.types.integer.md) `$events` = 0  
): [int](language.types.integer.md)

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
