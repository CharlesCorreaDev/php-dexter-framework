# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

A maioria destas constantes envolve problemas, os quais também são descritos na documentação oficial do
[» Reportador de Problemas](https://wiki.oauth.net/ProblemReporting) do OAuth.
No entanto, observe que esses nomes de constantes são específicos do PHP, embora
o esquema de nomes seja semelhante.

**`OAUTH_SIG_METHOD_RSASHA1`** ([string](language.types.string.md))
:   Método de assinatura OAuth *RSA-SHA1*.

**`OAUTH_SIG_METHOD_HMACSHA1`** ([string](language.types.string.md))
:   Método de assinatura OAuth *HMAC-SHA1*.

**`OAUTH_SIG_METHOD_HMACSHA256`** ([string](language.types.string.md))
:   Método de assinatura OAuth *HMAC-SHA256*.

**`OAUTH_AUTH_TYPE_AUTHORIZATION`** ([string](language.types.string.md))
:   Esta constante representa a inserção de parâmetros OAuth no cabeçalho
    `Authorization`.

**`OAUTH_AUTH_TYPE_NONE`** ([string](language.types.string.md))
:   Esta constante indica uma solicitação NoAuth OAuth.

**`OAUTH_AUTH_TYPE_URI`** ([string](language.types.string.md))
:   Esta constante representa a inserção de parâmetros OAuth na solicitação
    URI.

**`OAUTH_AUTH_TYPE_FORM`** ([string](language.types.string.md))
:   Esta constante representa a inserção de parâmetros OAuth como parte do
    corpo do POST HTTP.

**`OAUTH_HTTP_METHOD_GET`** ([string](language.types.string.md))
:   Use o método *GET* para a solicitação OAuth.

**`OAUTH_HTTP_METHOD_POST`** ([string](language.types.string.md))
:   Use o método *POST* para a solicitação OAuth.

**`OAUTH_HTTP_METHOD_PUT`** ([string](language.types.string.md))
:   Use o método *PUT* para a solicitação OAuth.

**`OAUTH_HTTP_METHOD_HEAD`** ([string](language.types.string.md))
:   Use o método *HEAD* para a solicitação OAuth.

**`OAUTH_HTTP_METHOD_DELETE`** ([string](language.types.string.md))
:   Use o método *DELETE* para a solicitação OAuth.

**`OAUTH_REQENGINE_STREAMS`** ([int](language.types.integer.md))
:   Utilizado pelo método [OAuth::setRequestEngine()](oauth.setrequestengine.md) para definir o mecanismo para
    [fluxos PHP](book.stream.md),
    ao contrário do **`OAUTH_REQENGINE_CURL`** para
    [Curl](book.curl.md).

**`OAUTH_REQENGINE_CURL`** ([int](language.types.integer.md))
:   Utilizado pelo método [OAuth::setRequestEngine()](oauth.setrequestengine.md) para definir o mecanismo para
    [Curl](book.curl.md), ao contrário do
    **`OAUTH_REQENGINE_STREAMS`** para [fluxos PHP](book.stream.md).

**`OAUTH_OK`** ([int](language.types.integer.md))
:   Tudo certo.

**`OAUTH_BAD_NONCE`** ([int](language.types.integer.md))
:   O valor *oauth\_nonce* foi usado em uma solicitação anterior,
    portanto, não pode ser usado agora.

**`OAUTH_BAD_TIMESTAMP`** ([int](language.types.integer.md))
:   O valor *oauth\_timestamp* não foi aceito pelo provedor de serviço. Neste
    caso, a resposta também deve conter o parâmetro
    *oauth\_acceptable\_timestamps*.

**`OAUTH_CONSUMER_KEY_UNKNOWN`** ([int](language.types.integer.md))
:   O *oauth\_consumer\_key* é temporariamente inaceitável para o provedor de serviço.
    Por exemplo, o provedor de serviço pode estar limitando o consumo do cliente.

**`OAUTH_CONSUMER_KEY_REFUSED`** ([int](language.types.integer.md))
:   A chave do consumidor foi recusada.

**`OAUTH_INVALID_SIGNATURE`** ([int](language.types.integer.md))
:   O *oauth\_signature* é inválido, pois não corresponde à
    assinatura calculada pelo provedor de serviço.

**`OAUTH_TOKEN_USED`** ([int](language.types.integer.md))
:   O *oauth\_token* foi utilizado. Não pode mais ser
    utilizado porque já foi usado em solicitações anteriores.

**`OAUTH_TOKEN_EXPIRED`** ([int](language.types.integer.md))
:   O *oauth\_token* expirou.

**`OAUTH_TOKEN_REVOKED`** ([int](language.types.integer.md))
:   O *oauth\_token* foi revogado e nunca será aceito.

**`OAUTH_TOKEN_REJECTED`** ([int](language.types.integer.md))
:   O *oauth\_token* não foi aceito pelo provedor de serviço.
    O motivo não é conhecido, mas pode ser porque o token nunca foi emitido,
    já foi consumido, expirou e/ou foi esquecido pelo provedor de serviço.

**`OAUTH_VERIFIER_INVALID`** ([int](language.types.integer.md))
:   O *oauth\_verifier* está incorreto.

**`OAUTH_PARAMETER_ABSENT`** ([int](language.types.integer.md))
:   Um parâmetro obrigatório não foi recebido. Neste caso, a resposta também deve
    conter o parâmetro *oauth\_parameters\_absent*.

**`OAUTH_SIGNATURE_METHOD_REJECTED`** ([int](language.types.integer.md))
:   O *oauth\_signature\_method* não foi aceito pelo provedor de serviço.

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
