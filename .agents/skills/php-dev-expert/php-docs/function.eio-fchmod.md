# Altera permissões de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-fchmod.php

---

# eio\_fchmod

(PECL eio >= 0.0.1dev)

eio\_fchmod — Altera permissões de arquivo

### Descrição

function **eio\_fchmod**(  
    [mixed](language.types.mixed.md) `$fd`,  
    [int](language.types.integer.md) `$mode`,  
    [int](language.types.integer.md) `$pri` = EIO\_PRI\_DEFAULT,  
    [callable](language.types.callable.md) `$callback` = NULL,  
    [mixed](language.types.mixed.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_fchmod()** Altera permissões do arquivo especificado
pelo descritor `fd`.

### Parâmetros

`fd`
:   Fluxo, recurso de socket ou descritor numérico de arquivo, por exemplo, retornado por [eio\_open()](function.eio-open.md).

`mode`
:   A nova permissão. Ex.: 0644.

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

**eio\_fchmod()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.

### Veja também

- [eio\_fchown()](function.eio-fchown.md) - Altera proprietário de arquivo

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
