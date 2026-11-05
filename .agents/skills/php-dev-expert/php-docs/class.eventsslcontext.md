# A classe EventSslContext

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.eventsslcontext.php

---

# A classe EventSslContext

(PECL event >= 1.2.6-beta)

## Introdução

Representa
a estrutura `SSL_CTX`.
Fornece métodos e propriedades para configurar o contexto SSL.

## Resumo da classe

final
class **EventSslContext**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[SSLv2\_CLIENT\_METHOD](class.eventsslcontext.md#eventsslcontext.constants.sslv2-client-method) = 1;

const
[int](language.types.integer.md)
[SSLv3\_CLIENT\_METHOD](class.eventsslcontext.md#eventsslcontext.constants.sslv3-client-method) = 2;

const
[int](language.types.integer.md)
[SSLv23\_CLIENT\_METHOD](class.eventsslcontext.md#eventsslcontext.constants.sslv23-client-method) = 3;

const
[int](language.types.integer.md)
[TLS\_CLIENT\_METHOD](class.eventsslcontext.md#eventsslcontext.constants.tls-client-method) = 4;

const
[int](language.types.integer.md)
[SSLv2\_SERVER\_METHOD](class.eventsslcontext.md#eventsslcontext.constants.sslv2-server-method) = 5;

const
[int](language.types.integer.md)
[SSLv3\_SERVER\_METHOD](class.eventsslcontext.md#eventsslcontext.constants.sslv3-server-method) = 6;

const
[int](language.types.integer.md)
[SSLv23\_SERVER\_METHOD](class.eventsslcontext.md#eventsslcontext.constants.sslv23-server-method) = 7;

const
[int](language.types.integer.md)
[TLS\_SERVER\_METHOD](class.eventsslcontext.md#eventsslcontext.constants.tls-server-method) = 8;

const
[int](language.types.integer.md)
[OPT\_LOCAL\_CERT](class.eventsslcontext.md#eventsslcontext.constants.opt-local-cert) = 1;

const
[int](language.types.integer.md)
[OPT\_LOCAL\_PK](class.eventsslcontext.md#eventsslcontext.constants.opt-local-pk) = 2;

const
[int](language.types.integer.md)
[OPT\_PASSPHRASE](class.eventsslcontext.md#eventsslcontext.constants.opt-passphrase) = 3;

const
[int](language.types.integer.md)
[OPT\_CA\_FILE](class.eventsslcontext.md#eventsslcontext.constants.opt-ca-file) = 4;

const
[int](language.types.integer.md)
[OPT\_CA\_PATH](class.eventsslcontext.md#eventsslcontext.constants.opt-ca-path) = 5;

const
[int](language.types.integer.md)
[OPT\_ALLOW\_SELF\_SIGNED](class.eventsslcontext.md#eventsslcontext.constants.opt-allow-self-signed) = 6;

const
[int](language.types.integer.md)
[OPT\_VERIFY\_PEER](class.eventsslcontext.md#eventsslcontext.constants.opt-verify-peer) = 7;

const
[int](language.types.integer.md)
[OPT\_VERIFY\_DEPTH](class.eventsslcontext.md#eventsslcontext.constants.opt-verify-depth) = 8;

const
[int](language.types.integer.md)
[OPT\_CIPHERS](class.eventsslcontext.md#eventsslcontext.constants.opt-ciphers) = 9;

/\* Propriedades \*/

public
[string](language.types.string.md)
[$local\_cert](class.eventsslcontext.md#eventsslcontext.props.local-cert);

public
[string](language.types.string.md)
[$local\_pk](class.eventsslcontext.md#eventsslcontext.props.local-pk);

/\* Métodos \*/

public
function [\_\_construct](eventsslcontext.construct.md)(
[string](language.types.string.md) `$method`
, 
[string](language.types.string.md) `$options`
)

}

## Propriedades

local\_cert
:   Caminho para o arquivo de certificado local no sistema de arquivos. Deve ser um arquivo codificado em PEM
    que contém o certificado. Opcionalmente, pode conter a
    cadeia de certificados dos emissores.

local\_pk
:   Caminho para o arquivo de chave privada local.

## Constantes predefinidas

**`EventSslContext::SSLv2_CLIENT_METHOD`**
:   Método cliente SSLv2. Consulte
    a página de manual
    `SSL_CTX_new(3)`.

**`EventSslContext::SSLv3_CLIENT_METHOD`**
:   Método cliente SSLv3. Consulte
    a página de manual
    `SSL_CTX_new(3)`.

**`EventSslContext::SSLv23_CLIENT_METHOD`**
:   Método cliente SSLv23. Consulte
    a página de manual
    `SSL_CTX_new(3)`.

**`EventSslContext::TLS_CLIENT_METHOD`**
:   Método cliente TLS. Consulte
    a página de manual
    `SSL_CTX_new(3)`.

**`EventSslContext::SSLv2_SERVER_METHOD`**
:   Método de servidor SSLv2. Consulte
    a página de manual
    `SSL_CTX_new(3)`.

**`EventSslContext::SSLv3_SERVER_METHOD`**
:   Método de servidor SSLv3. Consulte
    a página de manual
    `SSL_CTX_new(3)`.

**`EventSslContext::SSLv23_SERVER_METHOD`**
:   Método de servidor SSLv23. Consulte
    a página de manual
    `SSL_CTX_new(3)`.

**`EventSslContext::TLS_SERVER_METHOD`**
:   Método de servidor TLS. Consulte
    a página de manual
    `SSL_CTX_new(3)`.

**`EventSslContext::OPT_LOCAL_CERT`**
:   Chave para um item do array de opções usada em
    [EventSslContext::\_\_construct()](eventsslcontext.construct.md).
    A opção aponta para o caminho do certificado local.

**`EventSslContext::OPT_LOCAL_PK`**
:   Chave para um item do array de opções usada em
    [EventSslContext::\_\_construct()](eventsslcontext.construct.md).
    A opção aponta para o caminho da chave privada.

**`EventSslContext::OPT_PASSPHRASE`**
:   Chave para um item do array de opções usada em
    [EventSslContext::\_\_construct()](eventsslcontext.construct.md).
    Representa a senha do certificado.

**`EventSslContext::OPT_CA_FILE`**
:   Chave para um item do array de opções usada em
    [EventSslContext::\_\_construct()](eventsslcontext.construct.md).
    Representa o caminho do arquivo da autoridade de certificação.

**`EventSslContext::OPT_CA_PATH`**
:   Chave para um item do array de opções usada em
    [EventSslContext::\_\_construct()](eventsslcontext.construct.md).
    Representa o caminho onde o arquivo da autoridade de certificação deve
    ser pesquisado.

**`EventSslContext::OPT_ALLOW_SELF_SIGNED`**
:   Chave para um item do array de opções usada em
    [EventSslContext::\_\_construct()](eventsslcontext.construct.md).
    Representa a opção que permite certificados autoassinados.

**`EventSslContext::OPT_VERIFY_PEER`**
:   Chave para um item do array de opções usada em
    [EventSslContext::\_\_construct()](eventsslcontext.construct.md).
    Representa a opção que informa ao Evento para verificar o peer.

**`EventSslContext::OPT_VERIFY_DEPTH`**
:   Chave para um item do array de opções usada em
    [EventSslContext::\_\_construct()](eventsslcontext.construct.md).
    Representa a profundidade máxima para verificação da cadeia de certificados que
    deve ser permitida para o contexto SSL.

**`EventSslContext::OPT_CIPHERS`**
:   Chave para um item do array de opções usada em
    [EventSslContext::\_\_construct()](eventsslcontext.construct.md).
    Representa a lista de cifras para o contexto SSL.

## Índice

- [EventSslContext::\_\_construct](eventsslcontext.construct.md) — Constrói um contexto OpenSSL para uso com classes Event

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
