# Recebe dados de um soquete conectado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-recv.php

---

# socket\_recv

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_recv — Recebe dados de um soquete conectado

### Descrição

function **socket\_recv**(  
    [Socket](class.socket.md) `$socket`,  
    [?](language.types.null.md)[string](language.types.string.md) `&$data`,  
    [int](language.types.integer.md) `$length`,  
    [int](language.types.integer.md) `$flags`  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

A função **socket\_recv()** recebe o número de bytes definidos em
`length` na variável definida em `data` a partir do
`socket`. **socket\_recv()** pode ser
usada para receber dados de sockets conectados. Adicionalmente, uma ou mais
opções podem ser especificadas para modificar o comportamento da
função.

O parâmetro `data` é passado por referência, por isso deve ser
especificado como uma variável na lista de argumentos. Dados lidos do
`socket` por **socket\_recv()**
serão retornados em `data`.

### Parâmetros

`socket`
:   O `socket` deve ser uma instância de [Socket](class.socket.md) previamente
    criada por [socket\_create()](function.socket-create.md).

`data`
:   Os dados recebidos serão guardados na variável especificada em
    `data`. Se um erro ocorrer, se a
    conexão for redefinida, ou se não houver dados
    disponíveis, `data` será igual a **`null`**.

`length`
:   `length` é o número máximo de bytes que serão recebidos do servidor remoto.

`flags`
:   O valor de `flags` pode ser qualquer combinação das
    opções a seguir, unidas pelo operador binário OR
    (`|`).

    **Valores possíveis para `flags`**

    | Opção | Descrição |
    | --- | --- |
    | **`MSG_OOB`** | Processa dados fora-de-banda. |
    | **`MSG_PEEK`** | Recebe dados do início da fila sem removê-los da fila. |
    | **`MSG_WAITALL`** | Bloqueia até que pelo menos o número de bytem em `length` seja recebido. Entretanto, se um sinal for capturado ou se o servidor remoto desconectar, a função pode retornar menos dados. |
    | **`MSG_DONTWAIT`** | Com esta opção, a função retorna mesmo se ela tivesse bloqueado normalmente. |

### Valor Retornado

**socket\_recv()** retorna o número de bytes recebidos,
ou **`false`** se houver um erro. O código de erro real pode ser obtido
chamando-se [socket\_last\_error()](function.socket-last-error.md). Este código de erro pode se
passado a [socket\_strerror()](function.socket-strerror.md) para obter uma explicação textual
do erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **socket\_recv()****

Este exemplo é um re-escrita simples do primeiro exemplo de
[Examples](sockets.examples.md) para
uso de **socket\_recv()**.

```
<?php
error_reporting(E_ALL);

echo "<h2>Conexão TCP/IP</h2>\n";

/* Obtém a porta do serviço WWW. */
$service_port = getservbyname('www', 'tcp');

/* Obtém o endereço IP do servidor de destino. */
$address = gethostbyname('www.example.com');

/* Cria o socket TCP/IP. */
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    echo "socket_create() falhou. Motivo: " . socket_strerror(socket_last_error()) . "\n";
} else {
    echo "OK.\n";
}

echo "Tentando conexão a '$address' na porta '$service_port'...";
$result = socket_connect($socket, $address, $service_port);
if ($result === false) {
    echo "socket_connect() falhou. Motivo: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
} else {
    echo "OK.\n";
}

$in = "HEAD / HTTP/1.1\r\n";
$in .= "Host: www.example.com\r\n";
$in .= "Connection: Close\r\n\r\n";
$out = '';

echo "Enviando requisição HTTP HEAD...";
socket_write($socket, $in, strlen($in));
echo "OK.\n";

echo "Lendo resposta:\n\n";
$buf = 'Este é o meu buffer.';
if (false !== ($bytes = socket_recv($socket, $buf, 2048, MSG_WAITALL))) {
    echo "Lidos $bytes bytes de socket_recv(). Fechando soquete...";
} else {
    echo "socket_recv() falhou. Motivo: " . socket_strerror(socket_last_error($socket)) . "\n";
}
socket_close($socket);

echo $buf . "\n";
echo "OK.\n\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
<h2>Conexão TCP/IP</h2>
OK.
Tentando conexão a '208.77.188.166' na porta '80'...OK.
Enviando requisição HTTP HEAD...OK.
Lendo resposta:

Lidos 123 bytes de socket_recv(). Fechando soquete...HTTP/1.1 200 OK
Date: Mon, 14 Sep 2009 08:56:36 GMT
Server: Apache/2.2.3 (Red Hat)
Last-Modified: Tue, 15 Nov 2005 13:24:10 GMT
ETag: "b80f4-1b6-80bfd280"
Accept-Ranges: bytes
Content-Length: 438
Connection: close
Content-Type: text/html; charset=UTF-8

OK.
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
