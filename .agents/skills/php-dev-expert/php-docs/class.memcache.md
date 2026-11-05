# A classe Memcache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.memcache.php

---

# A classe Memcache

(PECL memcache >= 0.2.0)

## Introdução

Representa uma conexão com um conjunto de servidores memcache.

## Resumo da classe

class **Memcache**
{

function [add](memcache.add.md)(  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$var`,  
    [int](language.types.integer.md) `$flag` = ?,  
    [int](language.types.integer.md) `$expire` = ?  
): [bool](language.types.boolean.md)

function [addServer](memcache.addserver.md)(  
    [string](language.types.string.md) `$host`,  
    [int](language.types.integer.md) `$port` = 11211,  
    [bool](language.types.boolean.md) `$persistent` = ?,  
    [int](language.types.integer.md) `$weight` = ?,  
    [int](language.types.integer.md) `$timeout` = ?,  
    [int](language.types.integer.md) `$retry_interval` = ?,  
    [bool](language.types.boolean.md) `$status` = ?,  
    [callable](language.types.callable.md) `$failure_callback` = ?,  
    [int](language.types.integer.md) `$timeoutms` = ?  
): [bool](language.types.boolean.md)

function [close](memcache.close.md)(): [bool](language.types.boolean.md)

function [connect](memcache.connect.md)([string](language.types.string.md) `$host`, [int](language.types.integer.md) `$port` = ?, [int](language.types.integer.md) `$timeout` = ?): [bool](language.types.boolean.md)

function [decrement](memcache.decrement.md)([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$value` = 1): [int](language.types.integer.md)|[false](language.types.singleton.md)

function [delete](memcache.delete.md)([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$exptime` = 0): [bool](language.types.boolean.md)

function [flush](memcache.flush.md)(): [bool](language.types.boolean.md)

function [get](memcache.get.md)([string](language.types.string.md) `$key`, [int](language.types.integer.md) `&$flags` = ?): [string](language.types.string.md)

function [getExtendedStats](memcache.getextendedstats.md)([string](language.types.string.md) `$type` = ?, [int](language.types.integer.md) `$slabid` = ?, [int](language.types.integer.md) `$limit` = 100): [array](language.types.array.md)

function [getServerStatus](memcache.getserverstatus.md)([string](language.types.string.md) `$host`, [int](language.types.integer.md) `$port` = 11211): [int](language.types.integer.md)

function [getStats](memcache.getstats.md)([string](language.types.string.md) `$type` = ?, [int](language.types.integer.md) `$slabid` = ?, [int](language.types.integer.md) `$limit` = 100): [array](language.types.array.md)|[false](language.types.singleton.md)

function [getVersion](memcache.getversion.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

function [increment](memcache.increment.md)([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$value` = 1): [int](language.types.integer.md)|[false](language.types.singleton.md)

function [pconnect](memcache.pconnect.md)([string](language.types.string.md) `$host`, [int](language.types.integer.md) `$port` = ?, [int](language.types.integer.md) `$timeout` = ?): [bool](language.types.boolean.md)

function [replace](memcache.replace.md)(  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$var`,  
    [int](language.types.integer.md) `$flag` = ?,  
    [int](language.types.integer.md) `$expire` = ?  
): [bool](language.types.boolean.md)

function [set](memcache.set.md)(  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$var`,  
    [int](language.types.integer.md) `$flag` = ?,  
    [int](language.types.integer.md) `$expire` = ?  
): [bool](language.types.boolean.md)

function [setCompressThreshold](memcache.setcompressthreshold.md)([int](language.types.integer.md) `$threshold`, [float](language.types.float.md) `$min_savings` = ?): [bool](language.types.boolean.md)

function [setServerParams](memcache.setserverparams.md)(  
    [string](language.types.string.md) `$host`,  
    [int](language.types.integer.md) `$port` = 11211,  
    [int](language.types.integer.md) `$timeout` = ?,  
    [int](language.types.integer.md) `$retry_interval` = **`false`**,  
    [bool](language.types.boolean.md) `$status` = ?,  
    [callable](language.types.callable.md) `$failure_callback` = ?  
): [bool](language.types.boolean.md)

}

## Índice

- [Memcache::add](memcache.add.md) — Adiciona um item ao servidor
- [Memcache::addServer](memcache.addserver.md) — Adiciona um servidor memcached ao pool de conexão
- [Memcache::close](memcache.close.md) — Fecha a conexão do servidor memcached
- [Memcache::connect](memcache.connect.md) — Abre a conexão do servidor memcached
- [Memcache::decrement](memcache.decrement.md) — Decrementa o valor do item
- [Memcache::delete](memcache.delete.md) — Exclui item do servidor
- [Memcache::flush](memcache.flush.md) — Limpa todos os itens existentes no servidor
- [Memcache::get](memcache.get.md) — Recupera item do servidor
- [Memcache::getExtendedStats](memcache.getextendedstats.md) — Obtém estatísticas de todos os servidores no pool
- [Memcache::getServerStatus](memcache.getserverstatus.md) — Retorna o status do servidor
- [Memcache::getStats](memcache.getstats.md) — Obtém estatísticas do servidor
- [Memcache::getVersion](memcache.getversion.md) — Retorna a versão do servidor
- [Memcache::increment](memcache.increment.md) — Incrementa o valor do item
- [Memcache::pconnect](memcache.pconnect.md) — Abre conexão persistente do servidor memcached
- [Memcache::replace](memcache.replace.md) — Substitui o valor do item existente
- [Memcache::set](memcache.set.md) — Armazena dados no servidor
- [Memcache::setCompressThreshold](memcache.setcompressthreshold.md) — Habilita a compactação automática de valores grandes
- [Memcache::setServerParams](memcache.setserverparams.md) — Altera os parâmetros e o status do servidor em tempo de execução

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
