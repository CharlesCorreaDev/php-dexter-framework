# Altera o nome ou localização de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-rename.php

---

# eio\_rename

(PECL eio >= 0.0.1dev)

eio\_rename — Altera o nome ou localização de um arquivo

### Descrição

function **eio\_rename**(  
    [string](language.types.string.md) `$path`,  
    [string](language.types.string.md) `$new_path`,  
    [int](language.types.integer.md) `$pri` = EIO\_PRI\_DEFAULT,  
    [callable](language.types.callable.md) `$callback` = NULL,  
    [mixed](language.types.mixed.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_rename()** renomeia ou move um arquivo para um novo local.

### Parâmetros

`path`
:   Caminho de origem

`new_path`
:   Caminho de destino

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

**eio\_rename()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **eio\_rename()****

```
<?php
$filename = dirname(__FILE__)."/eio-temp-file.dat";
touch($filename);
$new_filename = dirname(__FILE__)."/eio-temp-file-new.dat";

function my_rename_cb($data, $result) {
    global $filename, $new_filename;

    if ($result == 0 && !file_exists($filename) && file_exists($new_filename)) {
        @unlink($new_filename);
        echo "eio_rename_ok";
    } else {
        @unlink($filename);
    }
}

eio_rename($filename, $new_filename, EIO_PRI_DEFAULT, "my_rename_cb", $filename);
eio_event_loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
eio_rename_ok
```

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
