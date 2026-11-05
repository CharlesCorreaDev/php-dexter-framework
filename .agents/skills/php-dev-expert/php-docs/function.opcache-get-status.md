# Obtém informações de status sobre o cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.opcache-get-status.php

---

# opcache\_get\_status

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL ZendOpcache > 7.0.2)

opcache\_get\_status — Obtém informações de status sobre o cache

### Descrição

function **opcache\_get\_status**([bool](language.types.boolean.md) `$include_scripts` = **`true`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Essa função retorna informações de estado sobre a instância do cache na memória. Ele não retornará nenhuma
informação sobre o cache do arquivo.

### Parâmetros

`include_scripts`
:   Incluir informações de estado específicas do script

### Valor Retornado

Retorna um array de informações, opcionalmente contendo informações de estado específicas do script,
ou **`false`** em caso de falha.

### Erros/Exceções

Se `opcache.restrict_api` estiver em uso e o caminho atual
violar a regra, um E\_WARNING será emitido; nenhuma informação de status
será retornada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PHP 8.3.0 | `opcache_get_status()['scripts'][n]['revalidate']` agora contém um timestamp Unix de quando a próxima revalidação do timestamp dos scripts vencem, como ditado pela diretiva INI [`opcache.revalidate_freq`](opcache.configuration.md#ini.opcache.revalidate-freq) . |

### Examples

**Exemplo #1 Um exemplo de **opcache\_get\_status()****

```
<?php
var_dump(opcache_get_status());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(9) {
  'opcache_enabled' =>
  bool(true)
  'cache_full' =>
  bool(false)
  'restart_pending' =>
  bool(false)
  'restart_in_progress' =>
  bool(false)
  'memory_usage' =>
  array(4) {
    'used_memory' =>
    int(9167936)
    'free_memory' =>
    int(125049792)
    'wasted_memory' =>
    int(0)
    'current_wasted_percentage' =>
    double(0)
  }
  'interned_strings_usage' =>
  array(4) {
    'buffer_size' =>
    int(8388608)
    'used_memory' =>
    int(2593616)
    'free_memory' =>
    int(5794992)
    'number_of_strings' =>
    int(10358)
  }
  'opcache_statistics' =>
  array(13) {
    'num_cached_scripts' =>
    int(0)
    'num_cached_keys' =>
    int(0)
    'max_cached_keys' =>
    int(16229)
    'hits' =>
    int(0)
    'start_time' =>
    int(1733310010)
    'last_restart_time' =>
    int(0)
    'oom_restarts' =>
    int(0)
    'hash_restarts' =>
    int(0)
    'manual_restarts' =>
    int(0)
    'misses' =>
    int(0)
    'blacklist_misses' =>
    int(0)
    'blacklist_miss_ratio' =>
    double(0)
    'opcache_hit_rate' =>
    double(0)
  }
  'scripts' =>
  array(0) {
  }
  'jit' =>
  array(7) {
    'enabled' =>
    bool(false)
    'on' =>
    bool(false)
    'kind' =>
    int(5)
    'opt_level' =>
    int(4)
    'opt_flags' =>
    int(6)
    'buffer_size' =>
    int(0)
    'buffer_free' =>
    int(0)
  }
}
```

### Veja também

- [opcache\_get\_configuration()](function.opcache-get-configuration.md) - Obtém informações de configuração sobre o cache

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
