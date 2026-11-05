# Executa requisição personalizada como qualquer outra chamada eio_*

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-custom.php

---

# eio\_custom

(PECL eio >= 0.0.1dev)

eio\_custom — Executa requisição personalizada como qualquer outra chamada *eio\_\**

### Descrição

function **eio\_custom**(  
    [callable](language.types.callable.md) `$execute`,  
    [int](language.types.integer.md) `$pri`,  
    [callable](language.types.callable.md) `$callback`,  
    [mixed](language.types.mixed.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_custom()** Executa requisição personalizada especificada por
`execute` processando-a como qualquer outra chamada *eio\_\**.

### Parâmetros

`execute`
:   Especifica a função de requisição que deve corresponder ao seguinte protótipo:

    ```
          mixed execute(mixed data);
    ```

    `callback` é a chamada de retorno de conclusão de evento que deve corresponder ao
    seguinte protótipo:

    ```
          void callback(mixed data, mixed result);
    ```

    `data` são os dados passados para
    `execute` através do argumento `data`
    sem modificações.
    `result` é o valor retornado por `execute`.

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

**eio\_custom()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **eio\_custom()****

```
<?php
/* Função de retorno personalizada */
function my_custom_callback($data, $result) {
    var_dump($data);
    var_dump(count($result));
    var_dump($result['data_modified']);
    var_dump($result['result']);
}

/* Requisição personalizada */
function my_custom($data) {
    var_dump($data);

    $result  = array(
        'result'        => 1001,
        'data_modified' => "my custom data",
    );

    return $result;
}

$data = "my_custom_data";
$req = eio_custom("my_custom", EIO_PRI_DEFAULT, "my_custom_callback", $data);
var_dump($req);
eio_event_loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
resource(4) of type (EIO Request Descriptor)
string(14) "my_custom_data"
string(14) "my_custom_data"
int(2)
string(14) "my custom data"
int(1001)
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
