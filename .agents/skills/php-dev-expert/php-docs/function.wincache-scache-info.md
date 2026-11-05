# Recupera informações sobre arquivos armazenados em cache no cache de sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-scache-info.php

---

# wincache\_scache\_info

(PECL wincache >= 1.1.0)

wincache\_scache\_info — 
Recupera informações sobre arquivos armazenados em cache no cache de sessão

### Descrição

function **wincache\_scache\_info**([bool](language.types.boolean.md) `$summaryonly` = **`false`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Recupera informações sobre o conteúdo do cache de sessão e seu uso.

### Parâmetros

`summaryonly`
:   Controla se o array retornado conterá informações sobre entradas de cache individuais
    junto com o resumo do cache da sessão.

### Valor Retornado

Array de metadados sobre o cache de sessão ou **`false`** em caso de falha

O array retornado por esta função contém os seguintes elementos:

- `total_cache_uptime` - tempo total em segundos que o cache da sessão esteve ativo
- `total_item_count` - número total de elementos que estão atualmente no cache da sessão
- `is_local_cache` - true se os metadados do cache forem para uma instância de cache local,
  false se os metadados forem para o cache global
- `total_hit_count` - número de vezes que os dados foram servidos do cache
- `total_miss_count` - número de vezes que os dados não foram encontrados no cache
- `scache_entries` - um array que contém informações sobre todos os itens armazenados em cache:
  - `key_name` - nome da chave que é usada para armazenar os dados
  - `value_type` - tipo de valor armazenado pela chave
  - `use_time` - tempo em segundos desde que o arquivo foi acessado no cache do opcode
  - `last_check` - tempo em segundos desde que o arquivo foi verificado para modificações
  - `ttl_seconds` - tempo restante para os dados permanecerem no cache, 0 significando infinito
  - `age_seconds` - tempo decorrido desde o momento em que os dados foram adicionados ao cache
  - `hitcount` - número de vezes que os dados foram fornecidos pelo cache

### Examples

**Exemplo #1 Um exemplo de **wincache\_scache\_info()****

```
<pre>
<?php
print_r(wincache_scache_info());
?>
</pre>
```

O exemplo acima produzirá:

```
Array
(
    [total_cache_uptime] => 17357
    [total_file_count] => 121
    [total_hit_count] => 36562
    [total_miss_count] => 201
    [scache_entries] => Array
        (
            [1] => Array
                (
                    [file_name] => c:\inetpub\wwwroot\checkcache.php
                    [add_time] => 17356
                    [use_time] => 7
                    [last_check] => 10
                    [hit_count] => 454
                    [function_count] => 0
                    [class_count] => 1
                )
            [2] => Array (...itera para cada arquivo em cache)
        )
)
```

### Veja também

- [wincache\_fcache\_fileinfo()](function.wincache-fcache-fileinfo.md) - Recupera informações sobre arquivos armazenados em cache no cache de arquivos
- [wincache\_fcache\_meminfo()](function.wincache-fcache-meminfo.md) - Recupera informações sobre o uso da memória cache do arquivo
- [wincache\_ocache\_meminfo()](function.wincache-ocache-meminfo.md) - Recupera informações sobre o uso da memória cache do opcode
- [wincache\_rplist\_fileinfo()](function.wincache-rplist-fileinfo.md) - Recupera informações sobre o cache do caminho do arquivo de resolução
- [wincache\_rplist\_meminfo()](function.wincache-rplist-meminfo.md) - Recupera informações sobre o uso de memória pelo cache do caminho do arquivo de resolução
- [wincache\_refresh\_if\_changed()](function.wincache-refresh-if-changed.md) - Atualiza as entradas de cache para os arquivos armazenados em cache
- [wincache\_ucache\_meminfo()](function.wincache-ucache-meminfo.md) - Recupera informações sobre o uso da memória cache do usuário
- [wincache\_ucache\_info()](function.wincache-ucache-info.md) - Recupera informações sobre dados armazenados no cache do usuário
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
