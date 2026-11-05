# Obtem estatísticas do pool de servidores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.getstats.php

---

# Memcached::getStats

(PECL memcached >= 0.1.0)

Memcached::getStats — Obtem estatísticas do pool de servidores

### Descrição

public function **Memcached::getStats**([?](language.types.null.md)[string](language.types.string.md) `$type` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

**Memcached::getStats()** retorna um array contendo o
estado de todos os servidores memcache disponíveis. Consulte a especificação
do [» memcache protocol](https://github.com/memcached/memcached/blob/master/doc/protocol.txt) para
obter detalhes sobre essas estatísticas.

### Parâmetros

`type`
:   O tipo de estatísticas a serem buscadas.

### Valor Retornado

Array de estatísticas do servidor, uma entrada por servidor, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Memcached::getStats()****

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

print_r($m->getStats());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [localhost:11211] => Array
        (
            [pid] => 4933
            [uptime] => 786123
            [threads] => 1
            [time] => 1233868010
            [pointer_size] => 32
            [rusage_user_seconds] => 0
            [rusage_user_microseconds] => 140000
            [rusage_system_seconds] => 23
            [rusage_system_microseconds] => 210000
            [curr_items] => 145
            [total_items] => 2374
            [limit_maxbytes] => 67108864
            [curr_connections] => 2
            [total_connections] => 151
            [connection_structures] => 3
            [bytes] => 20345
            [cmd_get] => 213343
            [cmd_set] => 2381
            [get_hits] => 204223
            [get_misses] => 9120
            [evictions] => 0
            [bytes_read] => 9092476
            [bytes_written] => 15420512
            [version] => 1.2.6
        )

)
```

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
