# Cancela uma requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-cancel.php

---

# eio\_cancel

(PECL eio >= 0.0.1dev)

eio\_cancel — Cancela uma requisição

### Descrição

function **eio\_cancel**([resource](language.types.resource.md) `$req`): [void](language.types.void.md)

**eio\_cancel()** cancela uma requisição especificada por
`req`.

### Parâmetros

`req`
:   O recurso da requisição.

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

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **eio\_cancel()****

```
<?php
 /* Função chamada quando eio_nop() termina */
 function my_nop_cb($data, $result) {
  echo "my_nop ", $data, "\n";
 }

// Esta chamada a eio_nop() será cancelada
$req = eio_nop(EIO_PRI_DEFAULT, "my_nop_cb", "1");
var_dump($req);
eio_cancel($req);

// Desta vez eio_nop() será processada
eio_nop(EIO_PRI_DEFAULT, "my_nop_cb", "2");

// Processa requisições
eio_event_loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
resource(4) of type (EIO Request Descriptor)
my_nop 2
```

### Veja também

- [eio\_grp\_cancel()](function.eio-grp-cancel.md) - Cancela um grupo de requisições

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
