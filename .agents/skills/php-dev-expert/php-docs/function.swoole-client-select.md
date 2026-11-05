# Obtém a descrição do arquivo que está pronto para leitura/gravação ou erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.swoole-client-select.php

---

# swoole\_client\_select

(PECL swoole >= 1.9.0)

swoole\_client\_select — Obtém a descrição do arquivo que está pronto para leitura/gravação ou erro

### Descrição

function **swoole\_client\_select**(  
    [array](language.types.array.md) `&$read_array`,  
    [array](language.types.array.md) `&$write_array`,  
    [array](language.types.array.md) `&$error_array`,  
    [float](language.types.float.md) `$timeout` = 0.5  
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
