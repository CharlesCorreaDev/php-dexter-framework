# Remove um diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-rmdir.php

---

# eio\_rmdir

(PECL eio >= 0.0.1dev)

eio\_rmdir — Remove um diretório

### Descrição

function **eio\_rmdir**(  
    [string](language.types.string.md) `$path`,  
    [int](language.types.integer.md) `$pri` = EIO\_PRI\_DEFAULT,  
    [callable](language.types.callable.md) `$callback` = NULL,  
    [mixed](language.types.mixed.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_rmdir()** remove um diretório.

### Parâmetros

`path`
:   Caminho do diretório

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

**eio\_rmdir()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **eio\_rmdir()****

```
<?php
$temp_dirname = "eio-temp-dir";
mkdir($temp_dirname);

function my_rmdir_callback($data, $result) {
    if ($result == 0 && !file_exists($data)) {
        echo "eio_rmdir_ok";
    } else if (file_exists($data)) {
        rmdir($data);
    }
}

eio_rmdir($temp_dirname, EIO_PRI_DEFAULT, "my_rmdir_callback", $temp_dirname);
eio_event_loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
eio_rmdir_ok
```

### Veja também

- [eio\_mkdir()](function.eio-mkdir.md) - Cria diretório

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
