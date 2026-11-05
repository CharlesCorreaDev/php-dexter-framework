# Chamada na aplicação do filtro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/php-user-filter.filter.php

---

# php\_user\_filter::filter

(PHP 5, PHP 7, PHP 8)

php\_user\_filter::filter — Chamada na aplicação do filtro

### Descrição

public function **php\_user\_filter::filter**(  
    [resource](language.types.resource.md) `$in`,  
    [resource](language.types.resource.md) `$out`,  
    [int](language.types.integer.md) `&$consumed`,  
    [bool](language.types.boolean.md) `$closing`  
): [int](language.types.integer.md)

Este método é chamado toda vez que dados são lidos ou escritos no
fluxo anexado (como em [fread()](function.fread.md) ou [fwrite()](function.fwrite.md)).

### Parâmetros

`in`
:   O parâmetro `in` é um recurso que aponta para uma `brigada de bucket`
    que contém um ou mais objetos `bucket` contendo os dados a serem filtrados.

`out`
:   O parâmetro `out` é um recurso que aponta para uma segunda `brigada de bucket`
    na qual os buckets modificados devem ser colocados.

`consumed`
:   O parâmetro `consumed`, que deve ser *sempre*
    declarado por referência, deve ser incrementado com o comprimento dos dados
    que o filtro lê e altera. Na maior parte dos casos isto significa que
    `consumed` será incrementado em `$bucket->datalen`
    para cada `$bucket`.

`closing`
:   Se o fluxo está no processo de fechamento
    (e portanto este é a última passagem pela cadeia de filtros),
    o parâmetro `closing` será definido para **`true`**.

### Valor Retornado

O método **filter()** deve retornar um dos
três valores quando concluído.

| Valor de Retorno | Significado |
| --- | --- |
| **`PSFS_PASS_ON`** | Filtro processado com sucesso com dados disponíveis na `brigada de bucket``out`. |
| **`PSFS_FEED_ME`** | Filtro processado com sucesso, porém nenhum dado estava disponível para retorno Mais dados são requeridos do fluxo ou do filtro anterior. |
| **`PSFS_ERR_FATAL`** (padrão) | O filtro encontrou um erro irrecuperável e não pode continuar. |

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
