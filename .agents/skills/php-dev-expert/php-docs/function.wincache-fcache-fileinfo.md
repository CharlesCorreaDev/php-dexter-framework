# Recupera informações sobre arquivos armazenados em cache no cache de arquivos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-fcache-fileinfo.php

---

# wincache\_fcache\_fileinfo

(PECL wincache >= 1.0.0)

wincache\_fcache\_fileinfo — 
Recupera informações sobre arquivos armazenados em cache no cache de arquivos

### Descrição

function **wincache\_fcache\_fileinfo**([bool](language.types.boolean.md) `$summaryonly` = **`false`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Recupera informações sobre o conteúdo do cache de arquivos e seu uso.

### Parâmetros

`summaryonly`
:   Controla se o array retornado conterá informações sobre entradas de cache individuais
    junto com o resumo do cache do arquivo.

### Valor Retornado

Array de metadados sobre o cache de arquivos ou **`false`** em caso de falha

O array retornado por esta função contém os seguintes elementos:

- `total_cache_uptime` - tempo total em segundos que o cache de arquivo esteve ativo
- `total_file_count` - número total de arquivos que estão atualmente no cache de arquivos
- `total_hit_count` - número de vezes que os arquivos foram servidos do cache de arquivos
- `total_miss_count` - número de vezes que os arquivos não foram encontrados no cache de arquivos
- `file_entries` - um array que contém informações sobre todos os arquivos em cache:
  - `file_name` - nome absoluto do arquivo em cache
  - `add_time` - tempo em segundos desde que o arquivo foi adicionado ao cache de arquivos
  - `use_time` - tempo em segundos desde que o arquivo foi acessado no cache de arquivos
  - `last_check` - tempo em segundos desde que o arquivo foi verificado para modificações
  - `hit_count` - número de vezes que o arquivo foi servido do cache
  - `file_size` - tamanho do arquivo em cache em bytes

### Examples

**Exemplo #1 Um exemplo de **wincache\_fcache\_fileinfo()****

```
<pre>
<?php
print_r(wincache_fcache_fileinfo());
?>
</pre>
```

O exemplo acima produzirá:

```
Array
(   [total_cache_uptime] => 3234
    [total_file_count] => 5
    [total_hit_count] => 0
    [total_miss_count] => 1
    [file_entries] => Array
        (
            [1] => Array
                (
                    [file_name] => c:\inetpub\wwwroot\checkcache.php
                    [add_time] => 1
                    [use_time] => 0
                    [last_check] => 1
                    [hit_count] => 1
                    [file_size] => 2435
                )
            [2] => Array (...itera para cada arquivo em cache)
        )
)
```

### Veja também

- [wincache\_fcache\_meminfo()](function.wincache-fcache-meminfo.md) - Recupera informações sobre o uso da memória cache do arquivo
- [wincache\_ocache\_fileinfo()](function.wincache-ocache-fileinfo.md) - Recupera informações sobre arquivos armazenados em cache no cache do opcode
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
