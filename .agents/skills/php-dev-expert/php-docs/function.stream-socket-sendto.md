# Envia uma mensagem a um socket, conectado ou não

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-socket-sendto.php

---

# stream\_socket\_sendto

(PHP 5, PHP 7, PHP 8)

stream\_socket\_sendto — Envia uma mensagem a um socket, conectado ou não

### Descrição

function **stream\_socket\_sendto**(  
    [resource](language.types.resource.md) `$socket`,  
    [string](language.types.string.md) `$data`,  
    [int](language.types.integer.md) `$flags` = 0,  
    [string](language.types.string.md) `$address` = ""  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Envia os dados especificados em `data` através do
`socket`.

### Parâmetros

`socket`
:   O socket ao qual serão enviados os dados especificados em `data`.

`data`
:   Os dados a serem enviados.

`flags`
:   O valor de `flags` pode ser qualquer combinação
    a seguir:

    **Possíveis valores para `flags`**

    |  |  |
    | --- | --- |
    | **`STREAM_OOB`** | Processa dados fora-de-banda (do inglês OOB, out-of-band). |

`address`
:   O endereço especificado quando o fluxo do socket foi criado será usado
    a menos que um endereço alternativo seja especificado em `address`.

    Se especificado, deve estar no formato de quadrante pontilhado (::), ou [ipv6].

### Valor Retornado

Retorna um código de resultado, como um inteiro, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **stream\_socket\_sendto()****

```
<?php
/* Abre um socket na porta 1234 do servidor local */
$socket = stream_socket_client('tcp://127.0.0.1:1234');

/* Envia dados comuns por canais comuns. */
fwrite($socket, "Transmissão normal de dados.");

/* Envia mais dados fora de banda. */
stream_socket_sendto($socket, "Dados Fora da Banda.", STREAM_OOB);

/* Fecha o socket */
fclose($socket);
?>
```

### Veja também

- [stream\_socket\_recvfrom()](function.stream-socket-recvfrom.md) - Recebe dados de um socket, conectado ou não
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
