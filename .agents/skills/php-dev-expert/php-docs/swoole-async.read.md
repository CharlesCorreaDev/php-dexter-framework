# Lê fluxo de arquivo de forma assíncrona.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-async.read.php

---

# Swoole\Async::read

(PECL swoole >= 1.9.0)

Swoole\Async::read — Lê fluxo de arquivo de forma assíncrona.

### Descrição

public static function **Swoole\Async::read**(  
    [string](language.types.string.md) `$filename`,  
    [callable](language.types.callable.md) `$callback`,  
    [int](language.types.integer.md) `$chunk_size` = ?,  
    [int](language.types.integer.md) `$offset` = ?  
): [bool](language.types.boolean.md)

### Parâmetros

`filename`
:   O nome do arquivo.

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
