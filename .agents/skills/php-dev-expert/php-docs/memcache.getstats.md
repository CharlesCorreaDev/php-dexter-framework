# Obtém estatísticas do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.getstats.php

---

# Memcache::getStats

# memcache\_get\_stats

(PECL memcache >= 0.2.0)

Memcache::getStats -- memcache\_get\_stats — Obtém estatísticas do servidor

### Descrição

function **Memcache::getStats**([string](language.types.string.md) `$type` = ?, [int](language.types.integer.md) `$slabid` = ?, [int](language.types.integer.md) `$limit` = 100): [array](language.types.array.md)|[false](language.types.singleton.md)

function **memcache\_get\_stats**(  
    [Memcache](class.memcache.md) `$memcache`,  
    [string](language.types.string.md) `$type` = ?,  
    [int](language.types.integer.md) `$slabid` = ?,  
    [int](language.types.integer.md) `$limit` = 100  
): [array](language.types.array.md)|[false](language.types.singleton.md)

**Memcache::getStats()** retorna um array associativo
com estatísticas do servidor. Chaves de array correspondem a parâmetros de estatísticas e
valores correspondem a valores de parâmetros.

### Parâmetros

`type`
:   O tipo de estatística a ser buscada. Os valores válidos são {reset,
    malloc, maps, cachedump, slabs, items, sizes}. De acordo com
    a especificação do protocolo memcached, esses argumentos adicionais "estão
    sujeitos a alterações para a conveniência dos desenvolvedores do memcache".

`slabid`
:   Usado em conjunto com `type` definido como
    "cachedump" para identificar o slab a partir do qual os dados serão despejados. O comando "cachedump"
    pode sobrecarregar o servidor e deve ser usado estritamente para
    propósitos de depuração.

`limit`
:   Usado em conjunto com `type` definido como
    "cachedump" para limitar o número de entradas a serem despejadas.

### Valor Retornado

Retorna um array associativo de estatísticas do servidor ou **`false`** em caso de falha.

### Veja também

- [Memcache::getVersion()](memcache.getversion.md) - Retorna a versão do servidor
- [Memcache::getExtendedStats()](memcache.getextendedstats.md) - Obtém estatísticas de todos os servidores no pool

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
