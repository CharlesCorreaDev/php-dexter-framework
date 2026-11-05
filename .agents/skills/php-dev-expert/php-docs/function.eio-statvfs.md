# Obtém estatísticas do sistema de arquivos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-statvfs.php

---

# eio\_statvfs

(PECL eio >= 0.0.1dev)

eio\_statvfs — Obtém estatísticas do sistema de arquivos

### Descrição

function **eio\_statvfs**(  
    [string](language.types.string.md) `$path`,  
    [int](language.types.integer.md) `$pri`,  
    [callable](language.types.callable.md) `$callback`,  
    [mixed](language.types.mixed.md) `$data` = ?  
): [resource](language.types.resource.md)

**eio\_statvfs()** returns file system statistics information in
`result` argument of `callback`

### Parâmetros

`path`
:   Caminho de qualquer arquivo dentro do sistema de arquivos montado

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

**eio\_statvfs()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.
Em caso de sucesso, atribui o argumento `result` de
`callback` a um array.

### Examples

**Exemplo #1 Exemplo de **eio\_statvfs()****

```
<?php
$tmp_filename = '/tmp/eio-file.tmp';
touch($tmp_filename);

function my_statvfs_callback($data, $result) {
    var_dump($data);
    var_dump($result);

    @unlink($data);
}

eio_statvfs($tmp_filename, EIO_PRI_DEFAULT, "my_statvfs_callback", $tmp_filename);
eio_event_loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(17) "/tmp/eio-file.tmp"
array(11) {
  ["f_bsize"]=>
  int(4096)
  ["f_frsize"]=>
  int(4096)
  ["f_blocks"]=>
  int(262144)
  ["f_bfree"]=>
  int(262111)
  ["f_bavail"]=>
  int(262111)
  ["f_files"]=>
  int(1540815)
  ["f_ffree"]=>
  int(1540743)
  ["f_favail"]=>
  int(1540743)
  ["f_fsid"]=>
  int(0)
  ["f_flag"]=>
  int(4102)
  ["f_namemax"]=>
  int(255)
}
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
