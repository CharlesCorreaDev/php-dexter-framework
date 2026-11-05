# Lista de opções de contexto do HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/context.http.php

---

# Opções de contexto do HTTP

Opções de contexto do HTTP — Lista de opções de contexto do HTTP

### Descrição

Opções de contexto dos transportadores `http://` e
`https://`.

### Opções

`method` [string](language.types.string.md)
:   **`GET`**, **`POST`** ou
    qualquer outro método HTTP suportado pelo servidor remoto.

    **`GET`** é o padrão.

`header` [array](language.types.array.md) ou [string](language.types.string.md)
:   Cabeçalhos adicionais que devem ser enviados durante a requisição. Valores
    nesta opção sobrescrevem outros valores (como
    `User-agent:`, `Host:`,
    e `Authentication:`),
    mesmo ao seguir redirecionamentos `Location:`.
    Portanto, não é recomendado definir um cabeçalho `Host:`,
    se `follow_location` estiver habilitado.

    Os valores em string devem ser pares de `Chave: valor` delimitados por
    `\r\n`, por exemplo,.
    `"Content-Type: application/json\r\nConnection: close"`.
    Os valores em array devem ser uma lista de pares de `Chave: valor`, por exemplo,
    `["Content-Type: application/json", "Connection: close"]`.

`user_agent` [string](language.types.string.md)
:   Valor a ser enviado no cabeçalho `User-Agent:`. Este valor só
    é utilizado se o user-agent *não* for especificado
    na opção de contexto `header` acima.

    Por padrão, a configuração
    [user\_agent](filesystem.configuration.md#ini.user-agent)
    do php.ini é utilizada.

`content` [string](language.types.string.md)
:   Dados adicionais a serem enviados depois dos cabeçalhos. Tipicamente utilizado
    em requisições POST ou PUT.

`proxy` [string](language.types.string.md)
:   URI que especifica o endereço do servidor de proxy (ex.:
    `tcp://proxy.example.com:5100`).

`request_fulluri` [bool](language.types.boolean.md)
:   Quando definido como **`true`**, todo o URI será utilizado na
    construção da requisição (ex.:
    `GET http://www.example.com/path/to/file.html HTTP/1.0`).
    Mesmo não sendo um formato padronizado de requisição, alguns
    servidores de proxy o exigem.

    **`false`** é o padrão.

`follow_location` [int](language.types.integer.md)
:   Segue os redirecionamentos feitos com o cabeçalho `Location`.
    Defina com `0` para desabilitar.

    `1` é o padrão.

`max_redirects` [int](language.types.integer.md)
:   O número máximo de redirecionamentos a serem feitos. O valor `1` ou
    inferior significam que os redirecionamentos não serão feitos.

    `20` é o padrão.

`protocol_version` [float](language.types.float.md)
:   Versão do protocolo HTTP.

    O padrão é `1.1` a partir do PHP 8.0.0;
    antes dessa versão o padrão era `1.0`.

`timeout` [float](language.types.float.md)
:   Limite de tempo de leitura em segundos, especificado com um [float](language.types.float.md)
    (por exemplo, `10.5`).

    Por padrão, a configuração
    [default\_socket\_timeout](filesystem.configuration.md#ini.default-socket-timeout)
    do php.ini é utilizada.

`ignore_errors` [bool](language.types.boolean.md)
:   Retorna o conteúdo mesmo que códigos de status de falha sejam retornados.

    **`false`**.

### Examples

**Exemplo #1 Buscando uma página e enviando dados pelo método POST**

```
<?php

$postdata = http_build_query(
    [
        'var1' => 'some content',
        'var2' => 'doh'
    ]
);

$opts = [
    'http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    ]
];

$context = stream_context_create($opts);

$result = file_get_contents('http://example.com/submit.php', false, $context);

?>
```

**Exemplo #2 Ignorando redirecionamentos mas trazendo os cabeçalhos e conteúdo**

```
<?php

$url = "http://www.example.org/header.php";

$opts = [
    'http' => [
        'method' => 'GET',
        'max_redirects' => '0',
        'ignore_errors' => '1'
    ]
];

$context = stream_context_create($opts);
$stream = fopen($url, 'r', false, $context);

// informação de cabeçalho e metadados
// sobre o fluxo
var_dump(stream_get_meta_data($stream));

// dados reais no $url
var_dump(stream_get_contents($stream));
fclose($stream);
?>
```

### Notas

> **Nota**:
> **Opções de contextos de soquetes de fluxo básicos**  
>
> Opções de contextos adicionais podem ser suportadas em
> [transportes básicos](transports.inet.md)
> Em fluxos `http://`, use
> as opções de contexto do transporte `tcp://`. Em fluxos
> `https://`, use as opções de contexto do
> transporte `ssl://`.

> **Nota**:
> **Linha de status HTTP**  
>
> Quando este empacotador de fluxo faz um redirecionamento, o
> `wrapper_data` retornado pela função
> [stream\_get\_meta\_data()](function.stream-get-meta-data.md) pode não conter necessariamente
> a linha de status HTTP, que atualmente se aplica ao conteúdo no índice
> `0`.
>
> ```
> array (
>   'wrapper_data' =>
>   array (
>     0 => 'HTTP/1.0 301 Moved Permanently',
>     1 => 'Cache-Control: no-cache',
>     2 => 'Connection: close',
>     3 => 'Location: http://example.com/foo.jpg',
>     4 => 'HTTP/1.1 200 OK',
>     ...
> ```
>
> A primeira requisição retornou `301` (redirecionamento permanente),
> com isso o empacotador de fluxo fará o redirecionamento automaticamente para conseguir
> uma resposta `200` (índice = `4`).

### Veja também

- [http://](wrappers.http.md)
- [Opções de contexto de Socket](context.socket.md)
- [Opções de contexto de SSL](context.ssl.md)

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
