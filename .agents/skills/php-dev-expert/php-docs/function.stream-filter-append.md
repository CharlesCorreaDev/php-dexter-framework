# Anexa um filtro a um fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-filter-append.php

---

# stream\_filter\_append

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

stream\_filter\_append — Anexa um filtro a um fluxo

### Descrição

function **stream\_filter\_append**(  
    [resource](language.types.resource.md) `$stream`,  
    [string](language.types.string.md) `$filter_name`,  
    [int](language.types.integer.md) `$mode` = ?,  
    [mixed](language.types.mixed.md) `$params` = ?  
): [resource](language.types.resource.md)

Adiciona o nome do filtro `filter_name` à lista de filtros
anexados ao fluxo `stream`.

### Parâmetros

`stream`
:   O fluxo alvo.

`filter_name`
:   O nome do filtro.

`mode`
:   Por padrão, **stream\_filter\_append()** irá
    anexar o filtro à `cadeia de filtros de leitura`
    se o arquivo foi aberto para leitura (isto é, modo de arquivo:
    `r` e/ou `+`). O filtro
    também será anexado à `cadeia de filtros de escrita`
    se o arquivo foi aberto para escrita (isto é, modo de arquivo:
    `w`, `a` e/ou `+`).
    As constantes **`STREAM_FILTER_READ`**,
    **`STREAM_FILTER_WRITE`** e/ou
    **`STREAM_FILTER_ALL`** também podem ser passadas ao parâmetro
    `mode` para substituir este comportamento.

`params`
:   Este filtro será adicionado com os parâmetros especificados em
    `params` ao *final* da
    lista e portanto serão chamados por último durante operações de fluxo.
    Para adicionar um filtro ao início da lista, use
    [stream\_filter\_prepend()](function.stream-filter-prepend.md).

### Valor Retornado

Retorna um recurso em caso de sucesso ou **`false`** em caso de falha. O recurso pode ser
usado para se referir a este instância de filtro durante a chamada a
[stream\_filter\_remove()](function.stream-filter-remove.md).

**`false`** é retornado se o parâmetro `stream` não for um recurso ou
se o nome do filtro `filter_name` não puder ser localizado.

### Examples

**Exemplo #1 Controlando onde os filtros são aplicados**

```
<?php
/* Abre um arquivo de teste para leitura e escrita */
$fp = fopen('teste.txt', 'w+');

/* Applica o filtro ROT13 à
 * cadeia de filtros de escrita, mas não à
 * cadeia de filtros de leitura */
stream_filter_append($fp, "string.rot13", STREAM_FILTER_WRITE);

/* Escreve uma string simples ao arquivo
 * que será transformado através do ROT13 na
 * saída */
fwrite($fp, "Teste de filtro\n");

/* Retrocede ao início do arquivo */
rewind($fp);

/* Lê de volta o conteúdo do arquivo.
 * Se o filtro tivesse sido aplicado também
 * à cadeia de filtros de leitura, seria visto o texto
 * com o filtro ROT13 reaplicado, de volta a seu estado original */
fpassthru($fp);

fclose($fp);

/* Resultado esperado
   ---------------

Grfgr qr svygeb

 */
?>
```

### Notas

> **Nota**:
> **Usando filtros personalizados (do usuário)**  
>
> [stream\_filter\_register()](function.stream-filter-register.md) deve ser chamado em primeiro lugar
> de maneira a registrar o filtro de usuário desejado para o valor de `filter_name`.

> **Nota**:
>
> Dados de fluxo são lidos dos recursos (tanto locais quanto remotos) em partes,
> com quaisquer dados não consumidos mantidos em buffers internos. Quando um novo
> filtro é anexado a um fluxo, dados no buffer interno são processados através
> do novo filtro neste momento. Isto difere do comportamento de
> [stream\_filter\_prepend()](function.stream-filter-prepend.md).

> **Nota**:
>
> Quando um filtro é adicionado para leitura e escrita, duas instâncias do filtro
> são criadas. **stream\_filter\_append()** deve ser chamada duas vezes
> com **`STREAM_FILTER_READ`** e
> **`STREAM_FILTER_WRITE`** para obter ambos os recursos de filtro.

### Veja também

- [stream\_filter\_register()](function.stream-filter-register.md) - Registra um filtro de fluxo definido pelo usuário
- [stream\_filter\_prepend()](function.stream-filter-prepend.md) - Anexa um filtro a um fluxo
- [stream\_get\_filters()](function.stream-get-filters.md) - Obtém lista de filtros registrados

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
