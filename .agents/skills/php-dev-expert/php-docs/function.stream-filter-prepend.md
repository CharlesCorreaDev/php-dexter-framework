# Anexa um filtro a um fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-filter-prepend.php

---

# stream\_filter\_prepend

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

stream\_filter\_prepend — Anexa um filtro a um fluxo

### Descrição

function **stream\_filter\_prepend**(  
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
:   Por padrão, **stream\_filter\_prepend()** irá
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
    Consulte a função [stream\_filter\_append()](function.stream-filter-append.md) para um exemplo de
    uso deste parâmetro.

`params`
:   Este filtro será adicionado com os parâmetros especificados em `params`
    ao *início* da lista e portanto serão
    chamados em primeiro lugar durante operações de fluxo. Pra adicionar um filtro ao final da
    lista, use [stream\_filter\_append()](function.stream-filter-append.md).

### Valor Retornado

Retorna um recurso em caso de sucesso ou **`false`** em caso de falha. O recurso pode ser
usado para se referir a esta instância de filtro durante uma chamada a
[stream\_filter\_remove()](function.stream-filter-remove.md).

**`false`** é retornado se o parâmetro `stream` não for um recurso ou
se o nome do filtro `filter_name` não puder ser localizado.

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
> filtro é anexado ao início de um fluxo, os dados nos buffers internos
> que já foram processados por outros filtros
> *não* serão reprocessados pelo novo filtro
> neste momento. Isto difere do comportamento de
> [stream\_filter\_append()](function.stream-filter-append.md).

> **Nota**:
>
> Quando um filtro é adicionado para leitura e escrita, duas instâncias do filtro
> são criadas. **stream\_filter\_prepend()** deve ser chamada duas vezes
> com **`STREAM_FILTER_READ`** e
> **`STREAM_FILTER_WRITE`** para obter ambos os recursos de filtro.

### Veja também

- [stream\_filter\_register()](function.stream-filter-register.md) - Registra um filtro de fluxo definido pelo usuário
- [stream\_filter\_append()](function.stream-filter-append.md) - Anexa um filtro a um fluxo

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
