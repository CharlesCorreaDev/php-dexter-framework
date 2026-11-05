# Recupera informações sobre dados armazenados no cache do usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-ucache-info.php

---

# wincache\_ucache\_info

(PECL wincache >= 1.1.0)

wincache\_ucache\_info — 
Recupera informações sobre dados armazenados no cache do usuário

### Descrição

function **wincache\_ucache\_info**([bool](language.types.boolean.md) `$summaryonly` = **`false`**, [string](language.types.string.md) `$key` = NULL): [array](language.types.array.md)|[false](language.types.singleton.md)

Recupera informações sobre dados armazenados no cache do usuário.

### Parâmetros

`summaryonly`
:   Controla se o array retornado conterá informações sobre entradas de cache individuais
    junto com o resumo do cache do usuário.

`key`
:   A chave de uma entrada no cache do usuário. Se especificado, o array retornado conterá informações
    apenas sobre essa entrada de cache. Se não especificado e `summaryonly` estiver definido como
    **`false`**, o array retornado conterá informações sobre todas as entradas no cache.

### Valor Retornado

Array de metadados sobre cache do usuário ou **`false`** em caso de falha

O array retornado por esta função contém os seguintes elementos:

- `total_cache_uptime` - tempo total em segundos que o cache do usuário esteve ativo
- `total_item_count` - número total de elementos que estão atualmente no cache do usuário
- `is_local_cache` - true se os metadados do cache forem para uma instância de cache local,
  false se os metadados forem para o cache global
- `total_hit_count` - número de vezes que os dados foram servidos do cache
- `total_miss_count` - número de vezes que os dados não foram encontrados no cache
- `ucache_entries` - um array que contém informações sobre todos os itens armazenados em cache:
  - `key_name` - nome da chave que é usada para armazenar os dados
  - `value_type` - tipo de valor armazenado pela chave
  - `use_time` - tempo em segundos desde que o arquivo foi acessado no cache do opcode
  - `last_check` - tempo em segundos desde que o arquivo foi verificado para modificações
  - `is_session` - indica se os dados são uma variável de sessão
  - `ttl_seconds` - tempo restante para os dados permanecerem no cache, 0 significando infinito
  - `age_seconds` - tempo decorrido desde o momento em que os dados foram adicionados ao cache
  - `hitcount` - número de vezes que os dados foram fornecidos pelo cache

### Examples

**Exemplo #1 Usando **wincache\_ucache\_info()****

```
<?php
wincache_ucache_get('green');
wincache_ucache_set('green', 2922);
wincache_ucache_get('green');
wincache_ucache_get('green');
wincache_ucache_get('green');
print_r(wincache_ucache_info());
?>
```

O exemplo acima produzirá:

```
Array
( ["total_cache_uptime"] => int(0)
  ["is_local_cache"] => bool(false)
  ["total_item_count"] => int(1)
  ["total_hit_count"] => int(3)
  ["total_miss_count"] => int(1)
  ["ucache_entries"] => Array(1)
    ( [1] => Array(6)
      (
        ["key_name"] => string(5) "green"
        ["value_type"] => string(4) "long"
        ["is_session"] => int(0)
        ["ttl_seconds"] => int(0)
        ["age_seconds"] => int(0)
        ["hitcount"] => int(3)
       )
    )
)
```

### Veja também

- [wincache\_fcache\_meminfo()](function.wincache-fcache-meminfo.md) - Recupera informações sobre o uso da memória cache do arquivo
- [wincache\_ocache\_fileinfo()](function.wincache-ocache-fileinfo.md) - Recupera informações sobre arquivos armazenados em cache no cache do opcode
- [wincache\_ocache\_meminfo()](function.wincache-ocache-meminfo.md) - Recupera informações sobre o uso da memória cache do opcode
- [wincache\_rplist\_meminfo()](function.wincache-rplist-meminfo.md) - Recupera informações sobre o uso de memória pelo cache do caminho do arquivo de resolução
- [wincache\_rplist\_fileinfo()](function.wincache-rplist-fileinfo.md) - Recupera informações sobre o cache do caminho do arquivo de resolução
- [wincache\_refresh\_if\_changed()](function.wincache-refresh-if-changed.md) - Atualiza as entradas de cache para os arquivos armazenados em cache
- [wincache\_ucache\_meminfo()](function.wincache-ucache-meminfo.md) - Recupera informações sobre o uso da memória cache do usuário
- [wincache\_scache\_info()](function.wincache-scache-info.md) - Recupera informações sobre arquivos armazenados em cache no cache de sessão
- [wincache\_scache\_meminfo()](function.wincache-scache-meminfo.md) - Recupera informações sobre o uso da memória cache da sessão

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
