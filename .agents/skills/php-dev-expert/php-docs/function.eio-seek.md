# Aponta para uma posição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-seek.php

---

# eio\_seek

(PECL eio >= 0.5.0b)

eio\_seek — Aponta para uma posição

### Descrição

function **eio\_seek**(  
    [mixed](language.types.mixed.md) `$fd`,  
    [int](language.types.integer.md) `$offset`,  
    [int](language.types.integer.md) `$whence`,  
    [int](language.types.integer.md) `$pri` = EIO\_PRI\_DEFAULT,  
    [callable](language.types.callable.md) `$callback` = NULL,  
    [mixed](language.types.mixed.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_seek()** reposiciona o ponteiro no arquivo aberto associado com o
fluxo, instância de [Socket](class.socket.md) ou descritor de arquivo especificado por `fd` para
a posição do argumento `offset` de acordo com
a diretiva `whence`.

### Parâmetros

`fd`
:   Fluxo, instância de [Socket](class.socket.md) ou descritor numérico de arquivo.

`offset`
:   Ponto inicial a partir do qual os dados devem ser lidos.

`whence`
:   Os valores para `whence` são:

    - **`EIO_SEEK_SET`** - Define a posição igual a `offset` bytes.
    - **`EIO_SEEK_CUR`** - Define a posição igual à atual mais `offset`.
    - **`EIO_SEEK_END`** - Define a posição igual à do final do arquivo mais `offset`.

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

**eio\_seek()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.

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
