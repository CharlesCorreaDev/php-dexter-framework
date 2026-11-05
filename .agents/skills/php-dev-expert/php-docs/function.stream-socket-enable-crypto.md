# Liga ou desliga criptografia em socket já conectado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-socket-enable-crypto.php

---

# stream\_socket\_enable\_crypto

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

stream\_socket\_enable\_crypto — Liga ou desliga criptografia em socket já conectado

### Descrição

function **stream\_socket\_enable\_crypto**(  
    [resource](language.types.resource.md) `$stream`,  
    [bool](language.types.boolean.md) `$enable`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$crypto_method` = **`null`**,  
    [?](language.types.null.md)[resource](language.types.resource.md) `$session_stream` = **`null`**  
): [int](language.types.integer.md)|[bool](language.types.boolean.md)

Liga ou desliga criptografia no fluxo.

Assim que as configurações de criptografia estiverem estabelecidos, a criptografia pode
ser ligada e desligada dinamicamente passando-se **`true`** ou **`false`** no parâmetro
`enable`.

### Parâmetros

`stream`
:   O recurso representando o fluxo.

`enable`
:   Ligar/desligar criptografia no fluxo.

`crypto_method`
:   Configura a criptografia no fluxo.
    Métodos válidos são:

    - **`STREAM_CRYPTO_METHOD_SSLv2_CLIENT`**
    - **`STREAM_CRYPTO_METHOD_SSLv3_CLIENT`**
    - **`STREAM_CRYPTO_METHOD_SSLv23_CLIENT`**
    - **`STREAM_CRYPTO_METHOD_ANY_CLIENT`**
    - **`STREAM_CRYPTO_METHOD_TLS_CLIENT`**
    - **`STREAM_CRYPTO_METHOD_TLSv1_0_CLIENT`**
    - **`STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT`**
    - **`STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT`**
    - **`STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT`** (a partir do PHP 7.4.0)
    - **`STREAM_CRYPTO_METHOD_SSLv2_SERVER`**
    - **`STREAM_CRYPTO_METHOD_SSLv3_SERVER`**
    - **`STREAM_CRYPTO_METHOD_SSLv23_SERVER`**
    - **`STREAM_CRYPTO_METHOD_ANY_SERVER`**
    - **`STREAM_CRYPTO_METHOD_TLS_SERVER`**
    - **`STREAM_CRYPTO_METHOD_TLSv1_0_SERVER`**
    - **`STREAM_CRYPTO_METHOD_TLSv1_1_SERVER`**
    - **`STREAM_CRYPTO_METHOD_TLSv1_2_SERVER`**
    - **`STREAM_CRYPTO_METHOD_TLSv1_3_SERVER`** (a partir do PHP 7.4.0)

    Se omitido, a opção de contexto `crypto_method` no
    contexto SSL do fluxo será usado.

`session_stream`
:   Alimenta o fluxo com as configurações de `session_stream`.

### Valor Retornado

Retorna **`true`** em caso de sucesso, **`false`** se a negociação falhar ou
`0` se não houver dados suficientes levando a uma nova tentativa
(apenas para sockets em modo de não-bloqueio).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `session_stream` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **stream\_socket\_enable\_crypto()****

```
<?php
$fp = stream_socket_client("tcp://myproto.example.com:31337", $errno, $errstr, 30);
if (!$fp) {
    die("Não foi possível conectar: $errstr ($errno)");
}

/* Liga criptografia para a fase de autenticação */
stream_socket_enable_crypto($fp, true, STREAM_CRYPTO_METHOD_SSLv23_CLIENT);
fwrite($fp, "USER god\r\n");
fwrite($fp, "PASS secret\r\n");

/* Desliga a criptografia para o restante */
stream_socket_enable_crypto($fp, false);

while ($motd = fgets($fp)) {
    echo $motd;
}

fclose($fp);
?>
```

O exemplo acima produzirá
algo semelhante a:

### Veja também

- [Funções de OpenSSL](ref.openssl.md)
- [Lista de Transportes via Soquete Suportados](transports.md)

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
