# Lê um arquivo de forma assíncrona.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-async.readfile.php

---

# Swoole\Async::readFile

(PECL swoole >= 1.9.0)

Swoole\Async::readFile — Lê um arquivo de forma assíncrona.

### Descrição

public static function **Swoole\Async::readFile**([string](language.types.string.md) `$filename`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

### Parâmetros

`filename`
:   O nome do arquivo sendo lido.

`callback`
:   function callback([string](language.types.string.md) `$filename`, [string](language.types.string.md) `$content`): [mixed](language.types.mixed.md)

    `filename`
    :   O nome do arquivo.

    `content`
    :   O conteúdo lido do arquivo.

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
