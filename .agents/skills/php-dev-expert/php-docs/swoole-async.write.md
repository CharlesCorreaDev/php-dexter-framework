# Escreve dados em um fluxo de arquivo de forma assíncrona.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-async.write.php

---

# Swoole\Async::write

(PECL swoole >= 1.9.0)

Swoole\Async::write — Escreve dados em um fluxo de arquivo de forma assíncrona.

### Descrição

public static function **Swoole\Async::write**(  
    [string](language.types.string.md) `$filename`,  
    [string](language.types.string.md) `$content`,  
    [int](language.types.integer.md) `$offset` = ?,  
    [callable](language.types.callable.md) `$callback` = ?  
): [void](language.types.void.md)

### Parâmetros

`filename`
:   O nome do arquivo sendo escrito.

`content`
:   O conteúdo a ser escrito no arquivo.

`offset`
:   O deslocamento.

`callback`

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
