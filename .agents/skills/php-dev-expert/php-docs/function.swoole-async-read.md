# Lê o fluxo de arquivo de forma assíncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.swoole-async-read.php

---

# swoole\_async\_read

(PECL swoole >= 1.9.0)

swoole\_async\_read — Lê o fluxo de arquivo de forma assíncrona

### Descrição

function **swoole\_async\_read**(  
    [string](language.types.string.md) `$filename`,  
    [callable](language.types.callable.md) `$callback`,  
    [int](language.types.integer.md) `$chunk_size` = 65536,  
    [int](language.types.integer.md) `$offset` = 0  
): [bool](language.types.boolean.md)

### Parâmetros

`filename`
:   O nome do arquivo sendo lido.

`callback`
:   function callback([string](language.types.string.md) `$filename`, [string](language.types.string.md) `$content`): [mixed](language.types.mixed.md)

    `filename`
    :   O nome do arquivo.

    `content`
    :   O conteúdo lido do fluxo de arquivo.

`chunk_size`
:   O comprimento do bloco.

`offset`
:   O deslocamento.

### Valor Retornado

Se a leitura for bem-sucedida.

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
