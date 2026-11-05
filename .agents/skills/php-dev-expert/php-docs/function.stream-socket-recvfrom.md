# Recebe dados de um socket, conectado ou não

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-socket-recvfrom.php

---

# stream\_socket\_recvfrom

(PHP 5, PHP 7, PHP 8)

stream\_socket\_recvfrom — Recebe dados de um socket, conectado ou não

### Descrição

function **stream\_socket\_recvfrom**(  
    [resource](language.types.resource.md) `$socket`,  
    [int](language.types.integer.md) `$length`,  
    [int](language.types.integer.md) `$flags` = 0,  
    [?](language.types.null.md)[string](language.types.string.md) `&$address` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

**stream\_socket\_recvfrom()** aceita
dados de um socket remoto até a quantidade de bytes definida por `length`.

### Parâmetros

`socket`
:   O socket remoto.

`length`
:   O número de bytes a receber do `socket`.

`flags`
:   O valor de `flags` pode ser qualquer combinação
    das opções a seguir:

    **Valores possíveis para `flags`**

    |  |  |
    | --- | --- |
    | **`STREAM_OOB`** | Processa dados fora-de-banda (do inglês OOB `out-of-band`). |
    | **`STREAM_PEEK`** | Recebe dados do socket, mas não consome o buffer. Chamadas subsequentes a [fread()](function.fread.md) ou **stream\_socket\_recvfrom()** irão ver os mesmos dados. |

`address`
:   Se `address` for fornecido, será preenchido com
    o endereço do socket remoto.

### Valor Retornado

Retorna os dados lidos, como uma string, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **stream\_socket\_recvfrom()****

```
<?php
/* Abre um socket de servidor na porta 1234 no servidor local */
$server = stream_socket_server('tcp://127.0.0.1:1234');

/* Aceita uma conexão */
$socket = stream_socket_accept($server);

/* Pega um pacote (1500 é um tamanho típico de MTU) de dados OOB */
echo "Recebido Out-Of-Band: '" . stream_socket_recvfrom($socket, 1500, STREAM_OOB) . "'\n";

/* Dá uma olhada nos dados normais dentro-da-banda, mas não os consome. */
echo "Dados: '" . stream_socket_recvfrom($socket, 1500, STREAM_PEEK) . "'\n";

/* Obtém o mesmo pacote novamente, mas remove-o do buffer desta vez. */
echo "Dados: '" . stream_socket_recvfrom($socket, 1500) . "'\n";

/* Fecha tudo */
fclose($socket);
fclose($server);
?>
```

### Notas

> **Nota**:
>
> Se uma mensagem recebida for maior que o parâmetro `length`,
> os bytes excedentes podem ser descartados dependendo do tipo do socket
> do qual a mensagem for recebida (como no UDP).

> **Nota**:
>
> Chamadas a **stream\_socket\_recvfrom()** em fluxos baseados
> em socket, depois de chamadas a funções de fluxo baseadas em buffer (como
> [fread()](function.fread.md) ou [stream\_get\_line()](function.stream-get-line.md)) lêem
> dados diretamente do socket e ignoram o buffer de fluxo.

### Veja também

- [stream\_socket\_sendto()](function.stream-socket-sendto.md) - Envia uma mensagem a um socket, conectado ou não
- [stream\_socket\_client()](function.stream-socket-client.md) - Abre conexão de socket de domínio Internet ou Unix
- [stream\_socket\_server()](function.stream-socket-server.md) - Cria socket de servidor de domínio Internet ou Unix

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
