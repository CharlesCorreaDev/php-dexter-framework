# Cria socket de servidor de domínio Internet ou Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-socket-server.php

---

# stream\_socket\_server

(PHP 5, PHP 7, PHP 8)

stream\_socket\_server — Cria socket de servidor de domínio Internet ou Unix

### Descrição

function **stream\_socket\_server**(  
    [string](language.types.string.md) `$address`,  
    [int](language.types.integer.md) `&$error_code` = **`null`**,  
    [string](language.types.string.md) `&$error_message` = **`null`**,  
    [int](language.types.integer.md) `$flags` = STREAM\_SERVER\_BIND | STREAM\_SERVER\_LISTEN,  
    [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Cria um socket de fluxo ou datagrama no endereço especificado em
`address`.

Este função apenas cria um socket, para começar a aceitar conexões
use [stream\_socket\_accept()](function.stream-socket-accept.md).

### Parâmetros

`address`
:   O tipo de socket criado é determinado pelo transporte especificado
    utilizando-se o formato padrão de URL: `transporte://destino`.

    Para sockets do domínio da Internet (**`AF_INET`**) como TCP e UDP, a
    porção `destino` do parâmetro
    `remote_socket` deve sonsistir de um
    nome de servidor ou endereço IP seguido de dois-pontos e um número de porta. Para
    sockets do domínio Unix, a porção `destino` deve
    apontar para o arquivo de socket do sistema de arquivos.

    Dependendo do ambiente, sockets do domínio Unix podem não estar disponíveis.
    Uma lista de transportes disponíveis pode ser obtida usando a função
    [stream\_get\_transports()](function.stream-get-transports.md). Consulte
    [Lista de Transportes via Soquete Suportados](transports.md) para uma lista de transportes existentes.

`error_code`
:   Se os argumentos opcionais `error_code` e `error_message`
    estiverem presentes, eles serão definidos para indicar o erro real que ocorreu
    ocorreu nas chamadas de sistema `socket()`,
    `bind()` e `listen()`. Se
    o valor retornado em `error_code` for
    `0` e a função retornou **`false`**, é um
    indicativo que o erro ocorreu antes da chamada a `bind()`.
    Isto mais provavelmente será devido a um problema na inicialização do socket.
    Note que os argumentos `error_code` e
    `error_message` serão sempre passados por referência.

`error_message`
:   Consulte a descrição para `error_code`.

`flags`
:   Um campo de máscara de bits que pode ser definido para qualquer combinação de opções
    de criação de sockets.

    > **Nota**:
    >
    > Para sockets UDP, deve ser usado **`STREAM_SERVER_BIND`** como
    > o parâmetro `flags`.

`context`

### Valor Retornado

Retorna o fluxo criado, ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `context` agora pode ser nulo. |

### Examples

**Exemplo #1 Usando sockets de servidor TCP**

```
<?php
$socket = stream_socket_server("tcp://0.0.0.0:8000", $errno, $errstr);
if (!$socket) {
  echo "$errstr ($errno)<br />\n";
} else {
  while ($conn = stream_socket_accept($socket)) {
    fwrite($conn, 'O horário atual é ' . date('n/j/Y g:i a') . "\n");
    fclose($conn);
  }
  fclose($socket);
}
?>
```

O exemplo abaixo mostra como agir como um servidor de data/hora que pode responder
a requisições de horário como mostrado em um exemplo de [stream\_socket\_client()](function.stream-socket-client.md).
> **Nota**:
>
> A maioria dos sistemas requerem acesso de administrador para criar um socket de servidor em portas
> abaixo de 1024.

**Exemplo #2 Usando sockets de servidor usando UDP**

```
<?php
$socket = stream_socket_server("udp://127.0.0.1:1113", $errno, $errstr, STREAM_SERVER_BIND);
if (!$socket) {
    die("$errstr ($errno)");
}

do {
    $pkt = stream_socket_recvfrom($socket, 1, 0, $peer);
    echo "$peer\n";
    stream_socket_sendto($socket, date("D M j H:i:s Y\r\n"), 0, $peer);
} while ($pkt !== false);

?>
```

### Notas

> **Nota**:
>
> Ao especificar um endereço IPv6 numérico
> (por exemplo, `fe80::1`), o IP deve ser colocado entre
> colchetes — por exemplo, `tcp://[fe80::1]:80`.

### Veja também

- [stream\_socket\_client()](function.stream-socket-client.md) - Abre conexão de socket de domínio Internet ou Unix
- [stream\_set\_blocking()](function.stream-set-blocking.md) - Definir modo de bloqueio/não-bloqueio em um fluxo
- [stream\_set\_timeout()](function.stream-set-timeout.md) - Define o limite de tempo em um fluxo
- [fgets()](function.fgets.md) - Lê uma linha de um ponteiro de arquivo
- [fgetss()](function.fgetss.md) - Ler uma linha de um ponteiro de arquivo e retira as tags HTML
- [fwrite()](function.fwrite.md) - Escrita binary-safe em arquivos
- [fclose()](function.fclose.md) - Fecha um ponteiro de arquivo aberto
- [feof()](function.feof.md) - Testa pelo fim-de-arquivo em um ponteiro de arquivo
- [Extensão Curl](ref.curl.md)

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
