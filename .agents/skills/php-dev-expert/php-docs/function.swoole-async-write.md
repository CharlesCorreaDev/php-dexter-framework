# Escreve dados em um fluxo de arquivo de forma assíncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.swoole-async-write.php

---

# swoole\_async\_write

(PECL swoole >= 1.9.0)

swoole\_async\_write — Escreve dados em um fluxo de arquivo de forma assíncrona

### Descrição

function **swoole\_async\_write**(  
    [string](language.types.string.md) `$filename`,  
    [string](language.types.string.md) `$content`,  
    [int](language.types.integer.md) `$offset` = ?,  
    [callable](language.types.callable.md) `$callback` = ?  
): [bool](language.types.boolean.md)

### Parâmetros

`filename`
:   O nome do arquivo a ser escrito.

`content`
:   O conteúdo a ser escrito no arquivo.

`offset`
:   O deslocamento.

`callback`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
