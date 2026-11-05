# Abre uma conexão socket de domínio Unix ou de Internet

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fsockopen.php

---

# fsockopen

(PHP 4, PHP 5, PHP 7, PHP 8)

fsockopen — Abre uma conexão socket de domínio Unix ou de Internet

### Descrição

function **fsockopen**(  
    [string](language.types.string.md) `$hostname`,  
    [int](language.types.integer.md) `$port` = -1,  
    [int](language.types.integer.md) `&$error_code` = **`null`**,  
    [string](language.types.string.md) `&$error_message` = **`null`**,  
    [?](language.types.null.md)[float](language.types.float.md) `$timeout` = **`null`**  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Inicia uma conexão socket para o recurso especificado em
`hostname`.

O PHP suporta destinos na Internet ou domínios Unix, conforme descrito em
[Lista de Transportes via Soquete Suportados](transports.md). Uma lista dos transportes suportados pode
ser encontrada utilizando-se a função [stream\_get\_transports()](function.stream-get-transports.md).

Por padrão, o socket será aberto em modo de bloqueio. Pode-se mudar para o
modo de não-bloqueio utilizando-se a função
[stream\_set\_blocking()](function.stream-set-blocking.md).

A função [stream\_socket\_client()](function.stream-socket-client.md) é similar mas fornece um
número maior de opções, incluindo conexão não bloqueada e a habilidade de
fornecer um contexto de fluxo.

### Parâmetros

`hostname`
:   Se o suporte Open SSL [estiver
    instalado](openssl.installation.md), pode-se prefixar o `hostname`
    com `ssl://` ou `tls://` para utilizar
    uma conexão SSL ou TLS sobre TCP/IP para conectar-se ao
    servidor remoto.

`port`
:   O número da porta. Pode ser omitido e ignorado com
    `-1` para transportes que não usam portas, como
    `unix://`.

`error_code`
:   Se informado, guarda o número do erro do sistema que aconteceu na chamada de
    `connect()` no nível do sistema.

    Se o valor retornado em `error_code` for
    `0` e a função retornou **`false`**, é uma indicação que o
    erro aconteceu antes da chamada a
    `connect()`. A causa mais provável é um
    problema na inicialização do socket.

`error_message`
:   A mensagem de erro como uma string.

`timeout`
:   Limite de tempo de conexão, em segundos. Quando igual a **`null`**, a configuração
    [default\_socket\_timeout](filesystem.configuration.md#ini.default-socket-timeout) php.ini é usada.

    > **Nota**:
    >
    > Se for necessário um limite de tempo para ler/escrever dados através do
    > socket, use [stream\_set\_timeout()](function.stream-set-timeout.md), já que o
    > parâmetro `timeout` de
    > **fsockopen()** somente é aplicável enquanto o socket
    > estiver conectando.

### Valor Retornado

**fsockopen()** retorna um ponteiro de arquivo que pode ser
usado em em conjunto com outras funções de arquivo (como
[fgets()](function.fgets.md), [fgetss()](function.fgetss.md),
[fwrite()](function.fwrite.md), [fclose()](function.fclose.md) e
[feof()](function.feof.md)). Se a chamada falhar, ela retornará **`false`**.

### Erros/Exceções

Dispara um **`E_WARNING`** se `hostname` não
for um domínio válido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `timeout` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **fsockopen()****

```
<?php
$fp = fsockopen("www.example.com", 80, $errno, $errstr, 30);
if (!$fp) {
    echo "$errstr ($errno)<br />\n";
} else {
    $out = "GET / HTTP/1.1\r\n";
    $out .= "Host: www.example.com\r\n";
    $out .= "Connection: Close\r\n\r\n";
    fwrite($fp, $out);
    while (!feof($fp)) {
        echo fgets($fp, 128);
    }
    fclose($fp);
}
?>
```

**Exemplo #2 Utilizando conexão UDP**

O exemplo abaixo mostra como obter a data e o horário do serviço
UDP (porta 13) da própria máquina.

```
<?php
$fp = fsockopen("udp://127.0.0.1", 13, $errno, $errstr);
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

> **Nota**:
>
> Dependedendo do ambiente, o domínio Unix ou o limite opcional de tempo
> de conexão podem não estar disponíveis.

**Aviso**

Sockets UDP algumas vezes irão parecer que foram abertos sem erro, mesmo
que o servidor remoto seja inalcançável. O erro só se tornará
aparente quando dados são lidos ou escritos no socket.
A razão disso é porque o UDP é um protocolo "sem conexão",
o que significa que o sistema operacional não tenta estabelecer
uma ligação para o socket até que ele realmente precise enviar ou receber dados.

> **Nota**:
>
> Ao especificar um endereço IPv6 numérico
> (por exemplo, `fe80::1`), o IP deve ser colocado entre
> colchetes — por exemplo, `tcp://[fe80::1]:80`.

### Veja também

- [pfsockopen()](function.pfsockopen.md) - Abra uma conexão persistente de soquete de domínio Unix ou de Internet
- [stream\_socket\_client()](function.stream-socket-client.md) - Abre conexão de socket de domínio Internet ou Unix
- [stream\_set\_blocking()](function.stream-set-blocking.md) - Definir modo de bloqueio/não-bloqueio em um fluxo
- [stream\_set\_timeout()](function.stream-set-timeout.md) - Define o limite de tempo em um fluxo
- [fgets()](function.fgets.md) - Lê uma linha de um ponteiro de arquivo
- [fgetss()](function.fgetss.md) - Ler uma linha de um ponteiro de arquivo e retira as tags HTML
- [fwrite()](function.fwrite.md) - Escrita binary-safe em arquivos
- [fclose()](function.fclose.md) - Fecha um ponteiro de arquivo aberto
- [feof()](function.feof.md) - Testa pelo fim-de-arquivo em um ponteiro de arquivo
- [socket\_connect()](function.socket-connect.md) - Inicia uma conexão em um soquete
- A [extensão Curl](ref.curl.md)

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
