# Fecha uma conexão full-duplex

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-socket-shutdown.php

---

# stream\_socket\_shutdown

(PHP 5 >= 5.2.1, PHP 7, PHP 8)

stream\_socket\_shutdown — Fecha uma conexão full-duplex

### Descrição

function **stream\_socket\_shutdown**([resource](language.types.resource.md) `$stream`, [int](language.types.integer.md) `$mode`): [bool](language.types.boolean.md)

Fecha uma conexão full-duplex (parcialmente ou não).

> **Nota**:
>
> O buffer ou buffers associados podem ou não ser esvaziados.

### Parâmetros

`stream`
:   Um fluxo aberto (aberto com [stream\_socket\_client()](function.stream-socket-client.md),
    por exemplo)

`mode`
:   Uma das constantes a seguir: **`STREAM_SHUT_RD`**
    (desabilita recepções adicionais), **`STREAM_SHUT_WR`**
    (desabilita transmissões adicionais) ou
    **`STREAM_SHUT_RDWR`** (desabilita transmissões e recepções
    adicionais).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Um exemplo de **stream\_socket\_shutdown()****

```
<?php

$server = stream_socket_server('tcp://127.0.0.1:1337');
$client = stream_socket_client('tcp://127.0.0.1:1337');

var_dump(fputs($client, "olá!!"));

stream_socket_shutdown($client, STREAM_SHUT_WR);
var_dump(fputs($client, "olá!!")); // agora não funciona

?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(5)

Notice: fputs(): send of 5 bytes failed with errno=32 Broken pipe in test.php on line 9
int(0)
```

### Veja também

- [fclose()](function.fclose.md) - Fecha um ponteiro de arquivo aberto

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
