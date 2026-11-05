# Abre conexão de socket de domínio Internet ou Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-socket-client.php

---

# stream\_socket\_client

(PHP 5, PHP 7, PHP 8)

stream\_socket\_client — Abre conexão de socket de domínio Internet ou Unix

### Descrição

function **stream\_socket\_client**(  
    [string](language.types.string.md) `$address`,  
    [int](language.types.integer.md) `&$error_code` = **`null`**,  
    [string](language.types.string.md) `&$error_message` = **`null`**,  
    [?](language.types.null.md)[float](language.types.float.md) `$timeout` = **`null`**,  
    [int](language.types.integer.md) `$flags` = **`STREAM_CLIENT_CONNECT`**,  
    [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Inicia uma conexão de fluxo ou datagrada ao destino especificado pelo parâmetro
`address`. O tipo de socket criado
é determinado pelo transporte especificado usando-se formatação de URL padrão:
`transporte://destino`. Para sockets de domínio Internet
(AF\_INET) tais como TCP e UDP, a porção `destino`
do parâmetro `address` deve consistir de um
nome de servidor ou endereço IP seguido por dois-pontos e um número de porta. Para sockets
de domínio Unix, a porção `destino` seve apontar
ao arquivo de socket no sistema de arquivos.

> **Nota**:
>
> O fluxo por padrão será aberto em modo de bloqueio. Pode-se
> trocar para modo de não-bloqueio usando
> [stream\_set\_blocking()](function.stream-set-blocking.md).

### Parâmetros

`address`
:   Endereço ao qual o socket deve se conectar.

`error_code`
:   Será definido para o número de erro no nível do sistema se a conexão falhar.

`error_message`
:   Será definido para a mensagem de erro no nível do sistema se a conexão falhar.

`timeout`
:   Número máximo de segundos que a chamada de sistema `connect()`
    deve esperar. Por padrão, [default\_socket\_timeout](filesystem.configuration.md#ini.default-socket-timeout)
    é usado.
    > **Nota**:
    >
    > Este parâmetro aplica-se somente quando não há tentativas de
    > se fazer conexões assíncronas.

    > **Nota**:
    >
    > Para definir um limite de tempo para leitura/escrita de dados no socket, use a função
    > [stream\_set\_timeout()](function.stream-set-timeout.md), já que
    > `timeout` se aplica somente enquanto está sendo feita a conexão
    > ao socket.

`flags`
:   Um campo de máscara de bits que pode ser configurada para qualquer combinação de opções de conexão.
    Atualmente a seleção de opções de conecão está limitada a
    **`STREAM_CLIENT_CONNECT`** (padrão),
    **`STREAM_CLIENT_ASYNC_CONNECT`** e
    **`STREAM_CLIENT_PERSISTENT`**.

`context`
:   Um recurso válido de contexto criado com [stream\_context\_create()](function.stream-context-create.md).

### Valor Retornado

Em caso de sucesso, um recurso de fluxo é retornado, e pode
ser usado com outras funções de arquivos (como
[fgets()](function.fgets.md), [fgetss()](function.fgetss.md),
[fwrite()](function.fwrite.md), [fclose()](function.fclose.md) e
[feof()](function.feof.md)), **`false`** em caso de falha.

### Erros/Exceções

Em caso de falha, os argumentos `error_code` e
`error_message` serão preenchidos com o erro real no
que ocorreu na chamada no nível de sistema a
`connect()`. Se o valor retornado em
`error_code` for `0` e a
função retornar **`false`**, é uma indicação que o erro
ocorreu antes da chamada a `connect()`. Isto é mais provavelmente
devido a um problema na inicialização do socket. Note que os argumentos
`error_code` e
`error_message` serão sempre passados por
referência.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `timeout` e `context` agora podem ser nulos. |

### Examples

**Exemplo #1 Exemplo de **stream\_socket\_client()****

```
<?php
$fp = stream_socket_client("tcp://www.example.com:80", $errno, $errstr, 30);
if (!$fp) {
    echo "$errstr ($errno)<br />\n";
} else {
    fwrite($fp, "GET / HTTP/1.0\r\nHost: www.example.com\r\nAccept: */*\r\n\r\n");
    while (!feof($fp)) {
        echo fgets($fp, 1024);
    }
    fclose($fp);
}
?>
```

**Exemplo #2 Usando conexão UDP**

Obtendo dia e horário do serviço UDP "daytime" (porta 13)
no servidor local.

```
<?php
$fp = stream_socket_client("udp://127.0.0.1:13", $errno, $errstr);
if (!$fp) {
    echo "ERRO: $errno - $errstr<br />\n";
} else {
    fwrite($fp, "\n");
    echo fread($fp, 26);
    fclose($fp);
}
?>
```

### Notas

**Aviso**

Sockets UDP algumas vezes irão aparentar ter sido abertos sem erro,
mesmo se o servidor remoto não puder ser contactado. O erro só ficará
aparente quando for realizada leitura/escrita no socket.
A razão para isto é porque o UDP é um protocolo "sem conexão",
o que significa que o sistema operacional não tenta estabelecer
uma ligação ao socket até que realmente precise enviar ou receber dados.

> **Nota**:
>
> Ao especificar um endereço IPv6 numérico
> (por exemplo, `fe80::1`), o IP deve ser colocado entre
> colchetes — por exemplo, `tcp://[fe80::1]:80`.

> **Nota**:
>
> Dependendo do ambiente, o domínio Unix ou o limite opcional de tempo
> de conexão podem não estar disponíveis. Uma lista de transportes
> disponíveis pode sem obtida usando-se [stream\_get\_transports()](function.stream-get-transports.md).
> Consulte [Lista de Transportes via Soquete Suportados](transports.md) para uma lista de transportes incluídos.

### Veja também

- [stream\_socket\_server()](function.stream-socket-server.md) - Cria socket de servidor de domínio Internet ou Unix
- [stream\_set\_blocking()](function.stream-set-blocking.md) - Definir modo de bloqueio/não-bloqueio em um fluxo
- [stream\_set\_timeout()](function.stream-set-timeout.md) - Define o limite de tempo em um fluxo
- [stream\_select()](function.stream-select.md) - Executa o equivalente à chamada de sistema select() nos arrays de fluxos
  informados com um limite de tempo especificado por segundos e microssegundos
- [fgets()](function.fgets.md) - Lê uma linha de um ponteiro de arquivo
- [fgetss()](function.fgetss.md) - Ler uma linha de um ponteiro de arquivo e retira as tags HTML
- [fwrite()](function.fwrite.md) - Escrita binary-safe em arquivos
- [fclose()](function.fclose.md) - Fecha um ponteiro de arquivo aberto
- [feof()](function.feof.md) - Testa pelo fim-de-arquivo em um ponteiro de arquivo
- [Funções cURL](ref.curl.md)

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
