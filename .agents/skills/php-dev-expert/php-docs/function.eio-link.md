# Cria uma ligação física para um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-link.php

---

# eio\_link

(PECL eio >= 0.0.1dev)

eio\_link — Cria uma ligação física para um arquivo

### Descrição

function **eio\_link**(  
    [string](language.types.string.md) `$path`,  
    [string](language.types.string.md) `$new_path`,  
    [int](language.types.integer.md) `$pri` = EIO\_PRI\_DEFAULT,  
    [callable](language.types.callable.md) `$callback` = NULL,  
    [mixed](language.types.mixed.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_link()** cria uma ligação física
`new_path` para o arquivo especificado por
`path`.

### Parâmetros

`path`
:   Caminho do arquivo de origem.

`new_path`
:   Caminho do arquivo de destino.

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

### Examples

**Exemplo #1 Exemplo de **eio\_link()****

```
<?php
$filename = dirname(__FILE__)."/symlink.dat";
touch($filename);
$link = dirname(__FILE__)."/symlink.link";
$hardlink = dirname(__FILE__)."/hardlink.link";

function my_hardlink_cb($data, $result) {
    global $link, $filename;
    var_dump(file_exists($data) && !is_link($data));
    @unlink($data);

    eio_symlink($filename, $link, EIO_PRI_DEFAULT, "my_symlink_cb", $link);
}

function my_symlink_cb($data, $result) {
    global $link, $filename;
    var_dump(file_exists($data) && is_link($data));

    if (!eio_readlink($data, EIO_PRI_DEFAULT, "my_readlink_cb", NULL)) {
        @unlink($link);
        @unlink($filename);
    }
}

function my_readlink_cb($data, $result) {
    global $filename, $link;
    var_dump($result);

    @unlink($link);
    @unlink($filename);
}

eio_link($filename, $hardlink, EIO_PRI_DEFAULT, "my_hardlink_cb", $hardlink);
eio_event_loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(true)
string(%d) "%ssymlink.dat"
```

### Veja também

- [eio\_symlink()](function.eio-symlink.md) - Cria uma ligação simbólica

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
