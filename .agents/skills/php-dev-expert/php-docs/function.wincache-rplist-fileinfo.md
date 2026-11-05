# Recupera informações sobre o cache do caminho do arquivo de resolução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-rplist-fileinfo.php

---

# wincache\_rplist\_fileinfo

(PECL wincache >= 1.0.0)

wincache\_rplist\_fileinfo — 
Recupera informações sobre o cache do caminho do arquivo de resolução

### Descrição

function **wincache\_rplist\_fileinfo**([bool](language.types.boolean.md) `$summaryonly` = **`false`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Recupera informações sobre mapeamentos em cache entre caminhos de arquivo relativos
e caminhos de arquivo absolutos correspondentes.

### Parâmetros

`summaryonly`

### Valor Retornado

Array de metadados sobre o cache do caminho do arquivo de resolução ou **`false`** em caso de falha

O array retornado por esta função contém os seguintes elementos:

- `total_file_count` - número total de mapeamentos de caminho de arquivo
  armazenados no cache
- `rplist_entries` - um array que contém informações sobre todos
  os caminhos de arquivos armazenados em cache:
  - `resolve_path` - caminho para um arquivo
  - `subkey_data` - caminho absoluto correspondente para um arquivo

### Examples

**Exemplo #1 Um exemplo de **wincache\_rplist\_fileinfo()****

```
<pre>
<?php
print_r(wincache_rplist_fileinfo());
?>
</pre>
```

O exemplo acima produzirá:

```
Array
(
    [total_file_count] => 5
    [rplist_entries] => Array
        (
            [1] => Array
                (
                    [resolve_path] => checkcache.php
                    [subkey_data] => c:\inetpub\wwwroot|c:\inetpub\wwwroot\checkcache.php
                )

            [2] => Array (...itera para cada arquivo em cache)
        )
)
```

### Veja também

- [wincache\_fcache\_meminfo()](function.wincache-fcache-meminfo.md) - Recupera informações sobre o uso da memória cache do arquivo
- [wincache\_fcache\_fileinfo()](function.wincache-fcache-fileinfo.md) - Recupera informações sobre arquivos armazenados em cache no cache de arquivos
- [wincache\_ocache\_fileinfo()](function.wincache-ocache-fileinfo.md) - Recupera informações sobre arquivos armazenados em cache no cache do opcode
- [wincache\_ocache\_meminfo()](function.wincache-ocache-meminfo.md) - Recupera informações sobre o uso da memória cache do opcode
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
