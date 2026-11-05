# Execute a leitura antecipada do arquivo no cache da página

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-readahead.php

---

# eio\_readahead

(PECL eio >= 0.0.1dev)

eio\_readahead — Execute a leitura antecipada do arquivo no cache da página

### Descrição

function **eio\_readahead**(  
    [mixed](language.types.mixed.md) `$fd`,  
    [int](language.types.integer.md) `$offset`,  
    [int](language.types.integer.md) `$length`,  
    [int](language.types.integer.md) `$pri` = EIO\_PRI\_DEFAULT,  
    [callable](language.types.callable.md) `$callback` = NULL,  
    [mixed](language.types.mixed.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_readahead()** preenche o cache da página com dados de um arquivo para que leituras subsequentes desse
arquivo não bloqueiem a E/S do disco. Consulte a página de manual `READAHEAD(2)` para obter detalhes.

### Parâmetros

`fd`
:   Fluxo, recurso de socket ou descritor numérico de arquivo.

`offset`
:   Ponto inicial a partir do qual os dados serão lidos.

`length`
:   Número de bytes a serem lidos.

`pri`
:   A prioridade da requisição: **`EIO_PRI_DEFAULT`**, **`EIO_PRI_MIN`**, **`EIO_PRI_MAX`** ou **`null`**.
    Se **`null`** for passado, o parâmetro `pri` internamente será definido como
    **`EIO_PRI_DEFAULT`**.

`callback`
:   A função `callback` é chamada quando a requisição é concluída.
    Ela deve corresponder ao seguinte protótipo:

    ```
    void callback(mixed $data, int $result[, resource $req]);
    ```

    `data`
    :   são dados personalizados passados para a requisição.

    `result`
    :   valor de resultado específico da requisição; basicamente, o valor retornado pela chamada de sistema
        correspondente.

    `req`
    :   é um recurso de requisição opcional que pode ser usado com funções como [eio\_get\_last\_error()](function.eio-get-last-error.md).

`data`
:   Variável arbitrária passada para `callback`.

### Valor Retornado

**eio\_readahead()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.

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
