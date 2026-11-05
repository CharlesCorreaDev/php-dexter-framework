# Lê um descritor de arquivo em determinada posição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-read.php

---

# eio\_read

(PECL eio >= 0.0.1dev)

eio\_read — Lê um descritor de arquivo em determinada posição

### Descrição

function **eio\_read**(  
    [mixed](language.types.mixed.md) `$fd`,  
    [int](language.types.integer.md) `$length`,  
    [int](language.types.integer.md) `$offset`,  
    [int](language.types.integer.md) `$pri`,  
    [callable](language.types.callable.md) `$callback`,  
    [mixed](language.types.mixed.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_read()** lê até `length`
bytes do descrito de arquivo `fd` na posição
`offset`. Os bytes lidos são armazenados no argumento
`result` de `callback`.

### Parâmetros

`fd`
:   Fluxo, recurso de socket ou descritor numérico de arquivo.

`length`
:   Número máximo de bytes para leitura.

`offset`
:   Posição no arquivo.

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

**eio\_read()** armazena os bytes lidos no argumento
`result` da funcão
`callback`.

### Examples

**Exemplo #1 Exemplo de **eio\_read()****

```
<?php
// Abre um arquivo temporário e escreva alguns bytes nele
$temp_filename = "eio-temp-file.tmp";
$fp = fopen($temp_filename, "w");
fwrite($fp, "1234567890");
fclose($fp);

/* Função chamada quando eio_read() termina */
function my_read_cb($data, $result) {
    global $temp_filename;

 // Mostra os bytes lidos
    var_dump($result);

 // Fecha o arquivo
    eio_close($data);
    eio_event_loop();

 // Remove o arquivo temporário
    @unlink($temp_filename);
}

/* Função chamada quando eio_open() termina */
function my_file_opened_callback($data, $result) {
 // $result deve conter o descritor de arquivo
    if ($result > 0) {
  // Lê 5 bytes iniciando do terceiro
        eio_read($result, 5, 2, EIO_PRI_DEFAULT, "my_read_cb", $result);
        eio_event_loop();
    } else {
  // eio_open() falhou
        unlink($data);
    }
}

// Abre o arquivo para leitura e gravação
eio_open($temp_filename, EIO_O_RDWR, NULL,
    EIO_PRI_DEFAULT, "my_file_opened_callback", $temp_filename);
eio_event_loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(5) "34567"
```

### Veja também

- [eio\_open()](function.eio-open.md) - Abre um arquivo
- [eio\_write()](function.eio-write.md) - Escreve em um arquivo
- [eio\_close()](function.eio-close.md) - Fecha arquivo
- [eio\_event\_loop()](function.eio-event-loop.md) - Consulta a libeio até que todas as requisições tenham concluído

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
