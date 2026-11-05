# Remove um filtro de um fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-filter-remove.php

---

# stream\_filter\_remove

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

stream\_filter\_remove — Remove um filtro de um fluxo

### Descrição

function **stream\_filter\_remove**([resource](language.types.resource.md) `$stream_filter`): [bool](language.types.boolean.md)

Remove um filtro de fluxo previamente adicionado a um fluxo com
[stream\_filter\_prepend()](function.stream-filter-prepend.md) ou
[stream\_filter\_append()](function.stream-filter-append.md). Quaisquer dados remanescentes no
buffer interno do filtro serão descarregados no filtro seguinte antes
da remoção.

### Parâmetros

`stream_filter`
:   O filtro de fluxo a ser removido.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Refiltrando um fluxo dinamicamente**

```
<?php
/* Abre um arquivo de teste para leitura e escrita */
$fp = fopen("test.txt", "rw");

$rot13_filter = stream_filter_append($fp, "string.rot13", STREAM_FILTER_WRITE);
fwrite($fp, "This is ");
stream_filter_remove($rot13_filter);
fwrite($fp, "a test\n");

rewind($fp);
fpassthru($fp);
fclose($fp);

?>
```

O exemplo acima produzirá:

```
Guvf vf a test
```

### Veja também

- [stream\_filter\_register()](function.stream-filter-register.md) - Registra um filtro de fluxo definido pelo usuário
- [stream\_filter\_append()](function.stream-filter-append.md) - Anexa um filtro a um fluxo
- [stream\_filter\_prepend()](function.stream-filter-prepend.md) - Anexa um filtro a um fluxo

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
