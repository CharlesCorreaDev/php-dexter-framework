# Obtém status de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-lstat.php

---

# eio\_lstat

(PECL eio >= 0.0.1dev)

eio\_lstat — Obtém status de arquivo

### Descrição

function **eio\_lstat**(  
    [string](language.types.string.md) `$path`,  
    [int](language.types.integer.md) `$pri`,  
    [callable](language.types.callable.md) `$callback`,  
    [mixed](language.types.mixed.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_lstat()** retorna informação de status de arquivo no argumento
`result` da função `callback`.

### Parâmetros

`path`
:   O caminho do arquivo.

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

**eio\_lstat()** retorna o recurso da requisição em caso de sucesso ou **`false`** on error.

### Examples

**Exemplo #1 Exemplo de **eio\_lstat()****

```
<?php
$tmp_filename = dirname(__FILE__). "/eio-file.tmp";
touch($tmp_filename);

function my_res_cb($data, $result) {
    var_dump($data);
    var_dump($result);
}

function my_open_cb($data, $result) {
    eio_close($result);
    eio_event_loop();

    @unlink($data);
}

eio_lstat($tmp_filename, EIO_PRI_DEFAULT, "my_res_cb", "eio_lstat");
eio_open($tmp_filename, EIO_O_RDONLY, NULL,
  EIO_PRI_DEFAULT, "my_open_cb", $tmp_filename);
eio_event_loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(9) "eio_lstat"
array(12) {
 ["st_dev"]=>
  int(2050)
  ["st_ino"]=>
  int(2099197)
  ["st_mode"]=>
  int(33188)
  ["st_nlink"]=>
  int(1)
  ["st_uid"]=>
  int(1000)
  ["st_gid"]=>
  int(100)
  ["st_rdev"]=>
  int(0)
  ["st_blksize"]=>
  int(4096)
  ["st_blocks"]=>
  int(0)
  ["st_atime"]=>
  int(1318235777)
  ["st_mtime"]=>
  int(1318235777)
  ["st_ctime"]=>
  int(1318235777)
}
```

### Veja também

- [eio\_stat()](function.eio-stat.md) - Obtém status de arquivo
- [eio\_fstat()](function.eio-fstat.md) - Obtém status de arquivo

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
