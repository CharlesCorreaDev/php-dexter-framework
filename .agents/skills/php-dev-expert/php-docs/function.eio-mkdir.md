# Cria diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-mkdir.php

---

# eio\_mkdir

(PECL eio >= 0.0.1dev)

eio\_mkdir — Cria diretório

### Descrição

function **eio\_mkdir**(  
    [string](language.types.string.md) `$path`,  
    [int](language.types.integer.md) `$mode`,  
    [int](language.types.integer.md) `$pri` = EIO\_PRI\_DEFAULT,  
    [callable](language.types.callable.md) `$callback` = NULL,  
    [mixed](language.types.mixed.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_mkdir()** cria um diretório com o acesso especificado em
`mode`.

### Parâmetros

`path`
:   Caminho do novo diretório.

`mode`
:   Modo de acesso, por exemplo, 0755

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

**eio\_mkdir()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **eio\_mkdir()****

```
<?php
$temp_dirname = "eio-temp-dir";

/* Função chamada quando eio_mkdir() termina */
function my_mkdir_callback($data, $result) {
    if ($result == 0 && is_dir($temp_dirname)
      && !is_readable($temp_dirname)
      && is_writable($temp_dirname)) {
        echo "eio_mkdir_ok";
    }

    // Remove diretório
    if (file_exists($data))
        rmdir($temp_dirname);
}

// Cria diretório com modo de acesso 0300
eio_mkdir($temp_dirname, 0300, EIO_PRI_DEFAULT, "my_mkdir_callback", $temp_dirname);
eio_event_loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
eio_mkdir_ok
```

### Veja também

- [eio\_rmdir()](function.eio-rmdir.md) - Remove um diretório

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
