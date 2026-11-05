# Recupera informações sobre o uso de memória pelo cache do caminho do arquivo de resolução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-rplist-meminfo.php

---

# wincache\_rplist\_meminfo

(PECL wincache >= 1.0.0)

wincache\_rplist\_meminfo — 
Recupera informações sobre o uso de memória pelo cache do caminho do arquivo de resolução

### Descrição

function **wincache\_rplist\_meminfo**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Recupera informações sobre o uso de memória resolvendo o cache do caminho do arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Array de metadados que descreve o uso de memória por cache de caminho de arquivo resolvido. ou **`false`** em caso de falha

O array retornado por esta função contém os seguintes elementos:

- `memory_total` - quantidade de memória em bytes alocada para o cache do caminho do arquivo de resolução
- `memory_free` - quantidade de memória livre em bytes disponível para o cache do caminho do arquivo de resolução
- `num_used_blks` - número de blocos de memória usados ​​pelo cache do caminho do arquivo de resolução
- `num_free_blks` - número de blocos de memória livres disponíveis para o cache do caminho do arquivo de resolução
- `memory_overhead` - quantidade de memória em bytes usada para as estruturas internas do cache do caminho do arquivo de resolução

### Examples

**Exemplo #1 Um exemplo de **wincache\_rplist\_meminfo()****

```
<pre>
<?php
print_r(wincache_rplist_meminfo());
?>
</pre>
```

O exemplo acima produzirá:

```
Array
(
    [memory_total] => 9437184
    [memory_free] => 9416744
    [num_used_blks] => 23
    [num_free_blks] => 1
    [memory_overhead] => 416
)
```

### Veja também

- [wincache\_fcache\_fileinfo()](function.wincache-fcache-fileinfo.md) - Recupera informações sobre arquivos armazenados em cache no cache de arquivos
- [wincache\_fcache\_meminfo()](function.wincache-fcache-meminfo.md) - Recupera informações sobre o uso da memória cache do arquivo
- [wincache\_ocache\_fileinfo()](function.wincache-ocache-fileinfo.md) - Recupera informações sobre arquivos armazenados em cache no cache do opcode
- [wincache\_ocache\_meminfo()](function.wincache-ocache-meminfo.md) - Recupera informações sobre o uso da memória cache do opcode
- [wincache\_rplist\_fileinfo()](function.wincache-rplist-fileinfo.md) - Recupera informações sobre o cache do caminho do arquivo de resolução
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
