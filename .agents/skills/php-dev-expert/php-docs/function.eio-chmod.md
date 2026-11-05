# Altera permissões de arquivo/diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-chmod.php

---

# eio\_chmod

(PECL eio >= 0.0.1dev)

eio\_chmod — Altera permissões de arquivo/diretório

### Descrição

function **eio\_chmod**(  
    [string](language.types.string.md) `$path`,  
    [int](language.types.integer.md) `$mode`,  
    [int](language.types.integer.md) `$pri` = EIO\_PRI\_DEFAULT,  
    [callable](language.types.callable.md) `$callback` = NULL,  
    [mixed](language.types.mixed.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_chmod()** altera permissões de arquivo ou diretório. As
novas permissões são especificadas por `mode`.

### Parâmetros

`path`
:   Caminho para o arquivo ou diretório de destino.

    **Aviso**

    Evite caminhos
    relativos

`mode`
:   As novas permissões, por exemplo, `0644`.

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

**eio\_chmod()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.

### Veja também

- [eio\_chown()](function.eio-chown.md) - Altera proprietário de arquivo/diretório

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
