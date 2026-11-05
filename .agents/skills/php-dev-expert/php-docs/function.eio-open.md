# Abre um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-open.php

---

# eio\_open

(PECL eio >= 0.0.1dev)

eio\_open — Abre um arquivo

### Descrição

function **eio\_open**(  
    [string](language.types.string.md) `$path`,  
    [int](language.types.integer.md) `$flags`,  
    [int](language.types.integer.md) `$mode`,  
    [int](language.types.integer.md) `$pri`,  
    [callable](language.types.callable.md) `$callback`,  
    [mixed](language.types.mixed.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_open()** abre o arquivo especificado no caminho
`path` no modo de acesso `mode` com
as opções especificadas em `flags`.

### Parâmetros

`path`
:   Caminho do arquivo a ser aberto.

    **Aviso**

    Em alguns SAPIs (ex.: *PHP-FPM*) pode falhar se
    o caminho completo não for especificado.

`flags`
:   Uma das constantes *EIO\_O\_\** ou suas
    combinações. Constantes *EIO\_O\_\** têm o mesmo
    significado, como suas contrapartes *O\_\**
    definidas no arquivo de cabeçalho C `fnctl.h`. O padrão é
    **`EIO_O_RDWR`**.

`mode`
:   Uma das constantes *EIO\_S\_I\** ou suas combinações
    (com operação OR binária). As constantes têm o mesmo significado de suas
    contrapartes*S\_I\** definidas no arquivo de cabeçalho C [» sys/stat.h](https://pubs.opengroup.org/onlinepubs/9699919799/basedefs/sys_stat.h.html).
    É requerido, se um arquivo for criado. Caso contrário é ignorado.

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

**eio\_open()** retorna um descritor de arquivo no argumento
`result` de `callback`
em caso de sucesso; caso contrário, `result` é igual a **`-1`**.

### Examples

**Exemplo #1 Exemplo de **eio\_open()****

```
<?php
$temp_filename = "eio-temp-file.tmp";

/* Função chamada quando eio_close() termina */
function my_close_cb($data, $result) {
 // Zero indica successo
    var_dump($result == 0);
 @unlink($data);
}

/* Função chamada quando eio_open() termina */
function my_file_opened_callback($data, $result) {
 // $result deve conter o descritor de arquivo
    var_dump($result > 0);

    if ($result > 0) {
  // Fecha o arquivo
        eio_close($result, EIO_PRI_DEFAULT, "my_close_cb", $data);
        eio_event_loop();
    }
}

// Cria novo arquivo para leitura e escrita
// Nega acesso de grupo e outros no arquivo
eio_open($temp_filename, EIO_O_CREAT | EIO_O_RDWR, EIO_S_IRUSR | EIO_S_IWUSR,
  EIO_PRI_DEFAULT, "my_file_opened_callback", $temp_filename);
eio_event_loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(true)
```

### Veja também

- [eio\_mknod()](function.eio-mknod.md) - Cria arquivo normal ou especial

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
