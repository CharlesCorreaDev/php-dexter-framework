# Transfere dados entre descritores de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-sendfile.php

---

# eio\_sendfile

(PECL eio >= 0.0.1dev)

eio\_sendfile — Transfere dados entre descritores de arquivo

### Descrição

function **eio\_sendfile**(  
    [mixed](language.types.mixed.md) `$out_fd`,  
    [mixed](language.types.mixed.md) `$in_fd`,  
    [int](language.types.integer.md) `$offset`,  
    [int](language.types.integer.md) `$length`,  
    [int](language.types.integer.md) `$pri` = ?,  
    [callable](language.types.callable.md) `$callback` = ?,  
    [string](language.types.string.md) `$data` = ?  
): [resource](language.types.resource.md)

**eio\_sendfile()** copia dados entre um descritor de arquivo
e outro. Consulte a página do manual de `SENDFILE(2)` para detalhes.

### Parâmetros

`out_fd`
:   Fluxo, recurso de socket ou descritor de arquivo de saída. Deve estar aberto para escrita.

`in_fd`
:   Fluxo, recurso de socket ou descritor de arquivo de entrada. Deve estar aberto para leitura.

`offset`
:   Posição dentro do arquivo de origem.

`length`
:   Número de bytes a copiar.

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

**eio\_sendfile()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.

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
