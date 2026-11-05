# Cria um grupo de requisições

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-grp.php

---

# eio\_grp

(PECL eio >= 0.0.1dev)

eio\_grp — Cria um grupo de requisições

### Descrição

function **eio\_grp**([callable](language.types.callable.md) `$callback`, [string](language.types.string.md) `$data` = NULL): [resource](language.types.resource.md)

**eio\_grp()** cria um grupo de requisições

### Parâmetros

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

**eio\_grp()** retorna um recurso de requisições em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **eio\_grp()****

```
<?php
$temp_filename = dirname(__FILE__) ."/eio-file.tmp";
$fp = fopen($temp_filename, "w");
fwrite($fp, "dado de exemplo");
fclose($fp);
$my_file_fd = NULL;

/* Função chamada quando as requisições em grupo terminam */
function my_grp_done($data, $result) {
    // Remove o arquivo, se ainda existir
 @unlink($data);
}

/* Função chamada quando o arquivo temporário é aberto */
function my_grp_file_opened_callback($data, $result) {
    global $my_file_fd, $grp;

    $my_file_fd = $result;

    $req = eio_read($my_file_fd, 4, 0,
        EIO_PRI_DEFAULT, "my_grp_file_read_callback");
    eio_grp_add($grp, $req);
}

/* Função chamada quando o arquivo é lido */
function my_grp_file_read_callback($data, $result) {
    global $my_file_fd, $grp;

    var_dump($result);

    // Cria a requisição para fechar o arquivo
    $req = eio_close($my_file_fd);

    // Adiciona a requisição ao grupo
    eio_grp_add($grp, $req);
}

// Cria o grupo de requisições
$grp = eio_grp("my_grp_done", $temp_filename);

// Cria a requisição
$req = eio_open($temp_filename, EIO_O_RDWR | EIO_O_APPEND , NULL,
    EIO_PRI_DEFAULT, "my_grp_file_opened_callback", NULL);

// Adiciona a requisição ao grupo
eio_grp_add($grp, $req);

// Processa as requisições
eio_event_loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(4) "dado"
```

### Veja também

- [eio\_grp\_cancel()](function.eio-grp-cancel.md) - Cancela um grupo de requisições
- [eio\_grp\_add()](function.eio-grp-add.md) - Adiciona uma requisição ao grupo de requisições

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
