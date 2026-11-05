# Recupera informações sobre o uso da memória cache da sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-scache-meminfo.php

---

# wincache\_scache\_meminfo

(PECL wincache >= 1.1.0)

wincache\_scache\_meminfo — 
Recupera informações sobre o uso da memória cache da sessão

### Descrição

function **wincache\_scache\_meminfo**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Recupera informações sobre o uso de memória pelo cache de sessão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Array de metadados sobre uso de memória cache de sessão ou **`false`** em caso de falha

O array retornado por esta função contém os seguintes elementos:

- `memory_total` - quantidade de memória em bytes alocada para o cache de sessão
- `memory_free` - quantidade de memória livre em bytes disponível para o cache de sessão
- `num_used_blks` - número de blocos de memória usados ​​pelo cache de sessão
- `num_free_blks` - número de blocos de memória livres disponíveis para o cache de sessão
- `memory_overhead` - quantidade de memória em bytes usada para as estruturas internas do cache de sessão

### Examples

**Exemplo #1 Um exemplo de **wincache\_scache\_meminfo()****

```
<pre>
<?php
print_r(wincache_scache_meminfo());
?>
</pre>
```

O exemplo acima produzirá:

```
Array
(
    [memory_total] => 5242880
    [memory_free] => 5215056
    [num_used_blks] => 6
    [num_free_blks] => 3
    [memory_overhead] => 176
)
```

### Veja também

- [wincache\_fcache\_fileinfo()](function.wincache-fcache-fileinfo.md) - Recupera informações sobre arquivos armazenados em cache no cache de arquivos
- [wincache\_fcache\_meminfo()](function.wincache-fcache-meminfo.md) - Recupera informações sobre o uso da memória cache do arquivo
- [wincache\_ocache\_fileinfo()](function.wincache-ocache-fileinfo.md) - Recupera informações sobre arquivos armazenados em cache no cache do opcode
- [wincache\_rplist\_fileinfo()](function.wincache-rplist-fileinfo.md) - Recupera informações sobre o cache do caminho do arquivo de resolução
- [wincache\_rplist\_meminfo()](function.wincache-rplist-meminfo.md) - Recupera informações sobre o uso de memória pelo cache do caminho do arquivo de resolução
- [wincache\_refresh\_if\_changed()](function.wincache-refresh-if-changed.md) - Atualiza as entradas de cache para os arquivos armazenados em cache
- [wincache\_ucache\_info()](function.wincache-ucache-info.md) - Recupera informações sobre dados armazenados no cache do usuário
- [wincache\_scache\_info()](function.wincache-scache-info.md) - Recupera informações sobre arquivos armazenados em cache no cache de sessão

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
