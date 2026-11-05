# Recupera informação em cache a partir do armazenamento de dados do APCu

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apcu-cache-info.php

---

# apcu\_cache\_info

(PECL apcu >= 4.0.0)

apcu\_cache\_info — 
Recupera informação em cache a partir do armazenamento de dados do APCu

### Descrição

function **apcu\_cache\_info**([bool](language.types.boolean.md) `$limited` = **`false`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Recupera informação em cache e meta-dados a partir do armazenamento de dados do APCu.

### Parâmetros

`limited`
:   Se `limited` for **`true`**, o
    valor de retorno excluirá a lista individual de entradas de cache. Isto
    é útil ao tentar otimizar chamadas para obtenção de estatísticas.

### Valor Retornado

Array de dados em cache (e meta-dados) ou **`false`** em caso de falha

> **Nota**:
>
> **apcu\_cache\_info()** irá emitir um alerta se não conseguir
> recuperar dados em cache do APCu. Isto tipicamente ocorre quando o APCu não está habilitado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL apcu 3.0.11 | O parâmetro `limited` foi introduzido. |
| PECL apcu 3.0.16 | A opção "`filehits`" para parâmetro `cache_type` foi introduzida. |

### Examples

**Exemplo #1 Um exemplo de **apcu\_cache\_info()****

```
<?php
print_r(apcu_cache_info());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [num_slots] => 2000
    [ttl] => 0
    [num_hits] => 9
    [num_misses] => 3
    [start_time] => 1123958803
    [cache_list] => Array
        (
            [0] => Array
                (
                    [filename] => /path/to/apcu_test.php
                    [device] => 29954
                    [inode] => 1130511
                    [type] => file
                    [num_hits] => 1
                    [mtime] => 1123960686
                    [creation_time] => 1123960696
                    [deletion_time] => 0
                    [access_time] => 1123962864
                    [ref_count] => 1
                    [mem_size] => 677
                )
            [1] => Array (...itera para cada arquivo em cache)
)
```

### Veja também

- [Diretivas de configuração APCu](apcu.configuration.md)
- [APCUIterator::getTotalSize()](apcuiterator.gettotalsize.md) - Obtém o tamanho total do cache
- [APCUIterator::getTotalHits()](apcuiterator.gettotalhits.md) - Obtém o total de entradas de cache
- [APCUIterator::getTotalCount()](apcuiterator.gettotalcount.md) - Obtém a contagem total

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
