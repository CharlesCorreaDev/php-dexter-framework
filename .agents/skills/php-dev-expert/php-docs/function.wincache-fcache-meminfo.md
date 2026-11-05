# Recupera informações sobre o uso da memória cache do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-fcache-meminfo.php

---

# wincache\_fcache\_meminfo

(PECL wincache >= 1.0.0)

wincache\_fcache\_meminfo — 
Recupera informações sobre o uso da memória cache do arquivo

### Descrição

function **wincache\_fcache\_meminfo**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Recupera informações sobre o uso de memória pelo cache de arquivos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Array de metadados sobre o uso da memória cache do arquivo ou **`false`** em caso de falha

O array retornado por esta função contém os seguintes elementos:

- `memory_total` - quantidade de memória em bytes alocada para o cache de arquivos
- `memory_free` - quantidade de memória livre em bytes disponível para o cache de arquivos
- `num_used_blks` - número de blocos de memória usados ​​pelo cache de arquivo
- `num_free_blks` - número de blocos de memória livres disponíveis para o cache de arquivos
- `memory_overhead` - quantidade de memória em bytes usada para as estruturas internas do cache de arquivos

### Examples

**Exemplo #1 Um exemplo de **wincache\_fcache\_meminfo()****

```
<pre>
<?php
print_r(wincache_fcache_meminfo());
?>
</pre>
```

O exemplo acima produzirá:

```
Array
(
    [memory_total] => 134217728
    [memory_free] => 131339120
    [num_used_blks] => 361
    [num_free_blks] => 3
    [memory_overhead] => 5856
)
```

### Veja também

- [wincache\_fcache\_fileinfo()](function.wincache-fcache-fileinfo.md) - Recupera informações sobre arquivos armazenados em cache no cache de arquivos
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
