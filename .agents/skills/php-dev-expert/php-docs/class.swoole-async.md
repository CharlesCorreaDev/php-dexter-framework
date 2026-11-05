# A classe Swoole\Async

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-async.php

---

# A classe Swoole\Async

(PECL swoole >= 1.9.0)

## Introdução

## Resumo da classe

class **Swoole\Async**
{

/\* Métodos \*/

public static function [dnsLookup](swoole-async.dnslookup.md)([string](language.types.string.md) `$hostname`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public static function [read](swoole-async.read.md)(  
    [string](language.types.string.md) `$filename`,  
    [callable](language.types.callable.md) `$callback`,  
    [int](language.types.integer.md) `$chunk_size` = ?,  
    [int](language.types.integer.md) `$offset` = ?  
): [bool](language.types.boolean.md)

public static function [readFile](swoole-async.readfile.md)([string](language.types.string.md) `$filename`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public static function [set](swoole-async.set.md)([array](language.types.array.md) `$settings`): [void](language.types.void.md)

public static function [write](swoole-async.write.md)(  
    [string](language.types.string.md) `$filename`,  
    [string](language.types.string.md) `$content`,  
    [int](language.types.integer.md) `$offset` = ?,  
    [callable](language.types.callable.md) `$callback` = ?  
): [void](language.types.void.md)

public static function [writeFile](swoole-async.writefile.md)(  
    [string](language.types.string.md) `$filename`,  
    [string](language.types.string.md) `$content`,  
    [callable](language.types.callable.md) `$callback` = ?,  
    [string](language.types.string.md) `$flags` = ?  
): [void](language.types.void.md)

}

## Índice

- [Swoole\Async::dnsLookup](swoole-async.dnslookup.md) — Pesquisa de host assíncrona e não bloqueante para IP.
- [Swoole\Async::read](swoole-async.read.md) — Lê fluxo de arquivo de forma assíncrona.
- [Swoole\Async::readFile](swoole-async.readfile.md) — Lê um arquivo de forma assíncrona.
- [Swoole\Async::set](swoole-async.set.md) — Atualiza as opções de E/S assíncronas.
- [Swoole\Async::write](swoole-async.write.md) — Escreve dados em um fluxo de arquivo de forma assíncrona.
- [Swoole\Async::writeFile](swoole-async.writefile.md) — Escreve dados em um arquivo de forma assíncrona.

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
