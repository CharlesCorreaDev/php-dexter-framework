# Seleciona as descrições de arquivo que estão prontas para leitura/escrita ou erro no loop de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.swoole-select.php

---

# swoole\_select

(PECL swoole >= 1.9.0)

swoole\_select — Seleciona as descrições de arquivo que estão prontas para leitura/escrita ou erro no loop de eventos

### Descrição

function **swoole\_select**(  
    [array](language.types.array.md) `&$read_array`,  
    [array](language.types.array.md) `&$write_array`,  
    [array](language.types.array.md) `&$error_array`,  
    [float](language.types.float.md) `$timeout` = ?  
): [int](language.types.integer.md)

### Parâmetros

`read_array`

`write_array`

`error_array`

`timeout`

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
