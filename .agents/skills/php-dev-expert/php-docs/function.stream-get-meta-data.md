# Obtém cabeçalhos/metadados de ponteiros de arquivos/fluxos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-get-meta-data.php

---

# stream\_get\_meta\_data

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

stream\_get\_meta\_data — Obtém cabeçalhos/metadados de ponteiros de arquivos/fluxos

### Descrição

function **stream\_get\_meta\_data**([resource](language.types.resource.md) `$stream`): [array](language.types.array.md)

Retorna informação sobre um fluxo (`stream`) existente.

### Parâmetros

`stream`
:   O fluxo pode ser qualquer um criado por [fopen()](function.fopen.md),
    [fsockopen()](function.fsockopen.md), [pfsockopen()](function.pfsockopen.md) e [stream\_socket\_client()](function.stream-socket-client.md).

### Valor Retornado

O array resultante contém os seguintes itens:

- `timed_out` (bool) - **`true`** se o fluxo
  passou do limite de tempo definido enquanto esperava por dados na última chamada a
  [fread()](function.fread.md) ou [fgets()](function.fgets.md).
- `blocked` (bool) - **`true`** se o fluxo estiver
  em modo bloqueado de E/S. Consulte [stream\_set\_blocking()](function.stream-set-blocking.md).
- `eof` (bool) - **`true`** se o fluxo alcançou o
  fim do arquivo. Note que para fluxos de socket este membro pode ser **`true`**
  mesmo quando os bytes não lidos (`unread_bytes`) for diferente de zero. Para
  determinar se há mais dados para leitura, use
  [feof()](function.feof.md) no lugar de ler este item.
- `unread_bytes` (int) - o número de bytes
  atualmente contidos no buffer interno do próprio PHP.

  > **Nota**:
  >
  > Este valor não deve ser usado em um script.
- `stream_type` (string) - uma identificação descrevendo
  a implementação subjacente do fluxo.
- `wrapper_type` (string) - uma identificação descrevendo
  a implementação do empacotador de protocolo sobre o fluxo.
  Consulte [Protocolos e empacotadores suportados](wrappers.md) para mais informações sobre empacotadores.
- `wrapper_data` (mixed) - dados específicos
  de empacotadores anexados a este fluxo. Consulte [Protocolos e empacotadores suportados](wrappers.md) para
  mais informações sobre empacotadores e seus dados.
- `mode` (string) - o tipo de acesso requerido para
  este fluxo (veja Tabela 1 da referência de [fopen()](function.fopen.md))
- `seekable` (bool) - se o fluxo atual pode ou não
  ser pesquisado.
- `uri` (string) - o nome de arquivo ou URI associado com este
  fluxo.
- `crypto` (array) - os metadados de conexão TLS para este
  fluxo. (Nota: fornecido somente quando o fluxo do recurso usa TLS.)

### Examples

**Exemplo #1 Exemplo de **stream\_get\_meta\_data()** usando [fopen()](function.fopen.md) com http**

```
<?php
$url = 'http://www.example.com/';

if (!$fp = fopen($url, 'r')) {
    trigger_error("Não foi possível abrir a URL ($url)", E_USER_ERROR);
}

$meta = stream_get_meta_data($fp);

var_dump($meta);

fclose($fp);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(10) {
  'timed_out' =>
  bool(false)
  'blocked' =>
  bool(true)
  'eof' =>
  bool(false)
  'wrapper_data' =>
  array(13) {
    [0] =>
    string(15) "HTTP/1.1 200 OK"
    [1] =>
    string(11) "Age: 244629"
    [2] =>
    string(29) "Cache-Control: max-age=604800"
    [3] =>
    string(38) "Content-Type: text/html; charset=UTF-8"
    [4] =>
    string(35) "Date: Sat, 20 Nov 2021 18:17:57 GMT"
    [5] =>
    string(24) "Etag: "3147526947+ident""
    [6] =>
    string(38) "Expires: Sat, 27 Nov 2021 18:17:57 GMT"
    [7] =>
    string(44) "Last-Modified: Thu, 17 Oct 2019 07:18:26 GMT"
    [8] =>
    string(22) "Server: ECS (chb/0286)"
    [9] =>
    string(21) "Vary: Accept-Encoding"
    [10] =>
    string(12) "X-Cache: HIT"
    [11] =>
    string(20) "Content-Length: 1256"
    [12] =>
    string(17) "Connection: close"
  }
  'wrapper_type' =>
  string(4) "http"
  'stream_type' =>
  string(14) "tcp_socket/ssl"
  'mode' =>
  string(1) "r"
  'unread_bytes' =>
  int(1256)
  'seekable' =>
  bool(false)
  'uri' =>
  string(23) "http://www.example.com/"
}
```

**Exemplo #2 Exemplo de **stream\_get\_meta\_data()** usando [stream\_socket\_client()](function.stream-socket-client.md) com https**

```
<?php
$streamContext = stream_context_create(
    [
        'ssl' => [
            'capture_peer_cert' => true,
            'capture_peer_cert_chain' => true,
            'disable_compression' => true,
        ],
    ]
);

$client = stream_socket_client(
    'ssl://www.example.com:443',
    $errorNumber,
    $errorDescription,
    40,
    STREAM_CLIENT_CONNECT,
    $streamContext
);

$meta = stream_get_meta_data($client);

var_dump($meta);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(8) {
  'crypto' =>
  array(4) {
    'protocol' =>
    string(7) "TLSv1.3"
    'cipher_name' =>
    string(22) "TLS_AES_256_GCM_SHA384"
    'cipher_bits' =>
    int(256)
    'cipher_version' =>
    string(7) "TLSv1.3"
  }
  'timed_out' =>
  bool(false)
  'blocked' =>
  bool(true)
  'eof' =>
  bool(false)
  'stream_type' =>
  string(14) "tcp_socket/ssl"
  'mode' =>
  string(2) "r+"
  'unread_bytes' =>
  int(0)
  'seekable' =>
  bool(false)
}
```

### Notas

> **Nota**:
>
> Esta função NÃO funciona com sockets criados pela [Extensão Socket](ref.sockets.md).

### Veja também

- [get\_headers()](function.get-headers.md) - Retorna todos os cabeçalhos enviados pelo servidor em resposta a uma requisição HTTP
- [$http\_response\_header](reserved.variables.httpresponseheader.md)

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
