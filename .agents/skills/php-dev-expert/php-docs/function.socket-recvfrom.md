# Recebe dados de um soquete, seja ele orientado a conexão ou não

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-recvfrom.php

---

# socket\_recvfrom

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_recvfrom — Recebe dados de um soquete, seja ele orientado a conexão ou não

### Descrição

function **socket\_recvfrom**(  
    [Socket](class.socket.md) `$socket`,  
    [string](language.types.string.md) `&$data`,  
    [int](language.types.integer.md) `$length`,  
    [int](language.types.integer.md) `$flags`,  
    [string](language.types.string.md) `&$address`,  
    [int](language.types.integer.md) `&$port` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

A função **socket\_recvfrom()** recebe o número de bytes definido em
`length` na variável definida em `data` do
endereço informado em `address` na porta `port` (se o
soquete não for do tipo **`AF_UNIX`**) usando
o soquete passado em `socket`. A função **socket\_recvfrom()** pode ser
usada para coletar dados de soquetes conectados e não conectados.
Além disso, uma ou mais opções podem ser especificadas para modificar o comportamento
da função.

Os parâmetros `address` e `port` precisam ser
passados ​​por referência. Se o soquete não for orientado a conexão,
`address` será definido como o endereço do protocolo de Internet
do servidor remoto ou o caminho para o soquete UNIX. Se o soquete for
orientado a conexão, `address` será **`null`**. Além disso,
a variável definida em `port` conterá a porta do servidor remoto no
caso de um soquete **`AF_INET`** ou
**`AF_INET6`** não conectado.

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Parâmetros

`socket`
:   O parâmetro `socket` precisa ser uma instância de [Socket](class.socket.md) criada
    previamente por socket\_create().

`data`
:   Os dados recebidos serão buscados na variável especificada por
    `data`.

`length`
:   O parâmetro `length` define o número máximo de bytes que serão buscados do servidor remoto.

`flags`
:   O valor de `flags` pode ser qualquer combinação das
    opções a seguir, combinadas com o operador OR binário
    (`|`).

    **Valores possíveis para `flags`**

    | Opção | Descrição |
    | --- | --- |
    | **`MSG_OOB`** | Processa dados fora-de-banda. |
    | **`MSG_PEEK`** | Recebe dados do início da fila de recebimento sem removê-los da fila. |
    | **`MSG_WAITALL`** | Bloqueis até que o número de bytes definidos em `length` tenham sido recebidos. Entretanto, se um sinal for capturado ou se o servidor remoto desconectar, a função poderá retornar menos dados. |
    | **`MSG_DONTWAIT`** | Com esta opção definida, a função retorna mesmo se ela normalmente fosse bloquer. |

`address`
:   Se o soquete for do tipo **`AF_UNIX`**,
    `address` será o caminho para o arquivo. Caso contrário, para
    soquetes não conectados, `address` será o endereço IP do
    servidor remoto ou **`null`** se o soquete for orientado à conexão.

`port`
:   Este argumento se aplica apenas aos soquetes **`AF_INET`** e
    **`AF_INET6`** e especifica a porta remota
    da qual os dados serão recebidos. Se o soquete for orientado à conexão,
    `port` será **`null`**.

### Valor Retornado

**socket\_recvfrom()** retorna o número de bytes recebidos,
ou **`false`** se houver um erro. O código de erro real pode ser recuperado
chamando [socket\_last\_error()](function.socket-last-error.md). Este código de erro pode ser
passado para [socket\_strerror()](function.socket-strerror.md) para obter uma explicação
textual do erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **socket\_recvfrom()****

```
<?php

$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
socket_bind($socket, '127.0.0.1', 1223);

$from = '';
$port = 0;
socket_recvfrom($socket, $buf, 12, 0, $from, $port);

echo "Recebido $buf do endereço remoto $from e porta remota $port" . PHP_EOL;
?>
```

Este exemplo iniciará um soquete UDP na porta 1223 de 127.0.0.1
e mostrará no máximo 12 caracteres recebidos de um servidor remoto.

### Veja também

- [socket\_recv()](function.socket-recv.md) - Recebe dados de um soquete conectado
- [socket\_send()](function.socket-send.md) - Envia dados para um soquete conectado
- [socket\_sendto()](function.socket-sendto.md) - Envia uma mensagem para um soquete, esteja ele conectado ou não
- [socket\_create()](function.socket-create.md) - Cria um soquete (ponto de extremidade para comunição)

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
