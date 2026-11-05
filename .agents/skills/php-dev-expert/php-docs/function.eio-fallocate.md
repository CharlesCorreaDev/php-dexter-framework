# Permite ao chamador manipular diretamente o espaço alocado
  em disco para um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-fallocate.php

---

# eio\_fallocate

(PECL eio >= 0.0.1dev)

eio\_fallocate — Permite ao chamador manipular diretamente o espaço alocado
em disco para um arquivo

### Descrição

function **eio\_fallocate**(  
    [mixed](language.types.mixed.md) `$fd`,  
    [int](language.types.integer.md) `$mode`,  
    [int](language.types.integer.md) `$offset`,  
    [int](language.types.integer.md) `$length`,  
    [int](language.types.integer.md) `$pri` = EIO\_PRI\_DEFAULT,  
    [callable](language.types.callable.md) `$callback` = NULL,  
    [mixed](language.types.mixed.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_fallocate()** permite ao chamador manipular diretamente o espaço alocado
em disco para o arquivo especificado elo descrito de arquivo `fd` para o
intervalo de byte iniciando em `offset` e continuando pelo númer de bytes
informado em `length`.

> **Nota**:
> **O arquivo deve ser aberto para escrita**  
>
> **`EIO_O_CREAT`** deve ser combinado através de uma operação lógica
> *OR* com **`EIO_O_WRONLY`** ou
> **`EIO_O_RDWR`**

### Parâmetros

`fd`
:   Fluxo, recurso de socket ou descritor numérico de arquivo, por exemplo, retornado por [eio\_open()](function.eio-open.md).

`mode`
:   Atualmente apenas uma opção de modo é suportada:
    **`EIO_FALLOC_FL_KEEP_SIZE`** (o mesmo que a constante POSIX
    **`FALLOC_FL_KEEP_SIZE`**).

`offset`
:   Especifica o início do intervalo de bytes.

`length`
:   Especifica o comprimento do intervalo de bytes.

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

**eio\_fallocate()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.

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
