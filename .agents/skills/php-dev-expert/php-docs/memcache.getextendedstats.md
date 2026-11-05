# Obtém estatísticas de todos os servidores no pool

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.getextendedstats.php

---

# Memcache::getExtendedStats

# memcache\_get\_extended\_stats

(PECL memcache >= 2.0.0)

Memcache::getExtendedStats -- memcache\_get\_extended\_stats — Obtém estatísticas de todos os servidores no pool

### Descrição

function **Memcache::getExtendedStats**([string](language.types.string.md) `$type` = ?, [int](language.types.integer.md) `$slabid` = ?, [int](language.types.integer.md) `$limit` = 100): [array](language.types.array.md)

function **memcache\_get\_extended\_stats**(  
    [Memcache](class.memcache.md) `$memcache`,  
    [string](language.types.string.md) `$type` = ?,  
    [int](language.types.integer.md) `$slabid` = ?,  
    [int](language.types.integer.md) `$limit` = 100  
): [array](language.types.array.md)

**Memcache::getExtendedStats()** retorna um array associativo bidimensional
com estatísticas do servidor. As chaves do array correspondem a
host:porta do servidor e os valores contêm as estatísticas individuais do servidor.
Um servidor com falha terá sua entrada correspondente definida como **`false`**.

> **Nota**:
>
> Esta função foi adicionada ao Memcache versão 2.0.0.

### Parâmetros

`type`
:   O tipo de estatística a ser buscada. Os valores válidos são {reset,
    malloc, maps, cachedump, slabs, items, sizes}. De acordo com
    a especificação do protocolo memcached, esses argumentos adicionais "estão
    sujeitos a alterações para a conveniência dos desenvolvedores do memcache".

`slabid`
:   Usado em conjunto com `type` definido como
    "cachedump" para identificar o "slab" a partir do qual os dados serão despejados. O comando "cachedump"
    pode sobrecarregar o servidor e deve ser usado estritamente para
    propósitos de depuração.

`limit`
:   Usado em conjunto com `type` definido como
    "cachedump" para limitar o número de entradas a serem despejadas.

**Aviso**

O tipo de estatística "cachedump" foi removido do daemon memcached
por motivos de segurança.

### Valor Retornado

Retorna um array associativo bidimensional de estatísticas do servidor ou **`false`**
em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Memcache::getExtendedStats()****

```
<?php
    $memcache_obj = new Memcache;
    $memcache_obj->addServer('memcache_host', 11211);
    $memcache_obj->addServer('failed_host', 11211);

    $stats = $memcache_obj->getExtendedStats();
    print_r($stats);
?>
```

O exemplo acima produzirá:

```
Array
(
    [memcache_host:11211] => Array
        (
            [pid] => 3756
            [uptime] => 603011
            [time] => 1133810435
            [version] => 1.1.12
            [rusage_user] => 0.451931
            [rusage_system] => 0.634903
            [curr_items] => 2483
            [total_items] => 3079
            [bytes] => 2718136
            [curr_connections] => 2
            [total_connections] => 807
            [connection_structures] => 13
            [cmd_get] => 9748
            [cmd_set] => 3096
            [get_hits] => 5976
            [get_misses] => 3772
            [bytes_read] => 3448968
            [bytes_written] => 2318883
            [limit_maxbytes] => 33554432
        )

    [failed_host:11211] => false
)
```

### Veja também

- [Memcache::getVersion()](memcache.getversion.md) - Retorna a versão do servidor
- [Memcache::getStats()](memcache.getstats.md) - Obtém estatísticas do servidor

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
