# Obtém estatísticas de sistema de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-fstatvfs.php

---

# eio\_fstatvfs

(PECL eio >= 0.0.1dev)

eio\_fstatvfs — Obtém estatísticas de sistema de um arquivo

### Descrição

function **eio\_fstatvfs**(  
    [mixed](language.types.mixed.md) `$fd`,  
    [int](language.types.integer.md) `$pri`,  
    [callable](language.types.callable.md) `$callback`,  
    [mixed](language.types.mixed.md) `$data` = ?  
): [resource](language.types.resource.md)

**eio\_fstatvfs()** retorna estatísticas de sistema de um arquivo no argumento
`result` da função `callback`.

### Parâmetros

`fd`
:   Um descritor de arquivo no sistema de arquivos montado.

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

**eio\_fstatvfs()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.

### Veja também

- [eio\_statvfs()](function.eio-statvfs.md) - Obtém estatísticas do sistema de arquivos

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
