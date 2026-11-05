# Recupera informações sobre arquivos armazenados em cache no cache do opcode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-ocache-fileinfo.php

---

# wincache\_ocache\_fileinfo

(PECL wincache >= 1.0.0)

wincache\_ocache\_fileinfo — 
Recupera informações sobre arquivos armazenados em cache no cache do opcode

### Descrição

function **wincache\_ocache\_fileinfo**([bool](language.types.boolean.md) `$summaryonly` = **`false`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Recupera informações sobre o conteúdo do cache do opcode e seu uso.

**Aviso**

Esta função foi
*REMOVIDA* a partir do PHP 7.0.0.

### Parâmetros

`summaryonly`
:   Controla se o array retornado conterá informações sobre entradas de cache individuais
    junto com o resumo do cache do opcode.

### Valor Retornado

Array de metadados sobre o cache do opcode ou **`false`** em caso de falha

O array retornado por esta função contém os seguintes elementos:

- `total_cache_uptime` - tempo total em segundos que o cache do opcode esteve ativo
- `total_file_count` - número total de arquivos que estão atualmente no cache do opcode
- `total_hit_count` - número de vezes que o opcode compilado foi servido do cache
- `total_miss_count` - número de vezes que o opcode compilado não foi encontrado no cache
- `is_local_cache` - true se os metadados do cache forem para uma instância de cache local,
  false se os metadados forem para o cache global
- `file_entries` - um array que contém informações sobre todos os arquivos em cache:
  - `file_name` - nome absoluto do arquivo em cache
  - `add_time` - tempo em segundos desde que o arquivo foi adicionado ao cache do opcode
  - `use_time` - tempo em segundos desde que o arquivo foi acessado no cache do opcode
  - `last_check` - tempo em segundos desde que o arquivo foi verificado para modificações
  - `hit_count` - número de vezes que o arquivo foi servido do cache
  - `function_count` - número de funções no arquivo em cache
  - `class_count` - número de classes no arquivo em cache

### Examples

**Exemplo #1 Um exemplo de **wincache\_ocache\_fileinfo()****

```
<pre>
<?php
print_r(wincache_ocache_fileinfo());
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
    [file_entries] => Array
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
