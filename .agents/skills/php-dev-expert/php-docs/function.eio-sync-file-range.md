# Sincroniza um segmento de arquivo com o disco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-sync-file-range.php

---

# eio\_sync\_file\_range

(PECL eio >= 0.0.1dev)

eio\_sync\_file\_range — Sincroniza um segmento de arquivo com o disco

### Descrição

function **eio\_sync\_file\_range**(  
    [mixed](language.types.mixed.md) `$fd`,  
    [int](language.types.integer.md) `$offset`,  
    [int](language.types.integer.md) `$nbytes`,  
    [int](language.types.integer.md) `$flags`,  
    [int](language.types.integer.md) `$pri` = EIO\_PRI\_DEFAULT,  
    [callable](language.types.callable.md) `$callback` = NULL,  
    [mixed](language.types.mixed.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_sync\_file\_range()** permite ajuste fino ao sincronizar o arquivo aberto relacionado ao
descritor `fd` com o disco.

### Parâmetros

`fd`
:   Descritor de arquivo

`offset`
:   O byte inicial do segmento do arquivo a ser sincronizado

`nbytes`
:   Especifica o comprimento do segmento a ser sincronizado, em bytes. Se
    `nbytes` for zero, todos os bytes de `offset` até
    o final do arquivo serão sincronizados.

`flags`
:   Uma máscara de bits. Pode incluir qualquer dos valores a seguir:
    **`EIO_SYNC_FILE_RANGE_WAIT_BEFORE`**,
    **`EIO_SYNC_FILE_RANGE_WRITE`** ou
    **`EIO_SYNC_FILE_RANGE_WAIT_AFTER`**. Estas opções têm
    o mesmo significado de suas contrapartes *SYNC\_FILE\_RANGE\_\**.
    (consulte a página do manual de `SYNC_FILE_RANGE(2)`).

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

**eio\_sync\_file\_range()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.

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
