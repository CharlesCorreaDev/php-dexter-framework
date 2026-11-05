# A classe OAuth

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.oauth.php

---

# A classe OAuth

(PECL OAuth >= 0.99.1)

## Introdução

A extensão OAuth fornece uma interface simples para interagir com
provedores de dados usando a especificação HTTP OAuth para proteger
recursos privados.

## Resumo da classe

class **OAuth**
{

/\* Propriedades \*/

public
[$debug](class.oauth.md#oauth.props.debug);

public
[$sslChecks](class.oauth.md#oauth.props.sslchecks);

public
[$debugInfo](class.oauth.md#oauth.props.debuginfo);

/\* Métodos \*/

public function [\_\_construct](oauth.construct.md)(  
    [string](language.types.string.md) `$consumer_key`,  
    [string](language.types.string.md) `$consumer_secret`,  
    [string](language.types.string.md) `$signature_method` = **`OAUTH_SIG_METHOD_HMACSHA1`**,  
    [int](language.types.integer.md) `$auth_type` = 0  
)

public function [\_\_destruct](oauth.destruct.md)(): [void](language.types.void.md)

public function [disableDebug](oauth.disabledebug.md)(): [bool](language.types.boolean.md)

public function [disableRedirects](oauth.disableredirects.md)(): [bool](language.types.boolean.md)

public function [disableSSLChecks](oauth.disablesslchecks.md)(): [bool](language.types.boolean.md)

public function [enableDebug](oauth.enabledebug.md)(): [bool](language.types.boolean.md)

public function [enableRedirects](oauth.enableredirects.md)(): [bool](language.types.boolean.md)

public function [enableSSLChecks](oauth.enablesslchecks.md)(): [bool](language.types.boolean.md)

public function [fetch](oauth.fetch.md)(  
    [string](language.types.string.md) `$protected_resource_url`,  
    [array](language.types.array.md) `$extra_parameters` = ?,  
    [string](language.types.string.md) `$http_method` = ?,  
    [array](language.types.array.md) `$http_headers` = ?  
): [mixed](language.types.mixed.md)

public function [generateSignature](oauth.generatesignature.md)([string](language.types.string.md) `$http_method`, [string](language.types.string.md) `$url`, [mixed](language.types.mixed.md) `$extra_parameters` = ?): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getAccessToken](oauth.getaccesstoken.md)(  
    [string](language.types.string.md) `$access_token_url`,  
    [string](language.types.string.md) `$auth_session_handle` = ?,  
    [string](language.types.string.md) `$verifier_token` = ?,  
    [string](language.types.string.md) `$http_method` = ?  
): [array](language.types.array.md)

public function [getCAPath](oauth.getcapath.md)(): [array](language.types.array.md)

public function [getLastResponse](oauth.getlastresponse.md)(): [string](language.types.string.md)

public function [getLastResponseHeaders](oauth.getlastresponseheaders.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getLastResponseInfo](oauth.getlastresponseinfo.md)(): [array](language.types.array.md)

public function [getRequestHeader](oauth.getrequestheader.md)([string](language.types.string.md) `$http_method`, [string](language.types.string.md) `$url`, [mixed](language.types.mixed.md) `$extra_parameters` = ?): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getRequestToken](oauth.getrequesttoken.md)([string](language.types.string.md) `$request_token_url`, [string](language.types.string.md) `$callback_url` = ?, [string](language.types.string.md) `$http_method` = ?): [array](language.types.array.md)

public function [setAuthType](oauth.setauthtype.md)([int](language.types.integer.md) `$auth_type`): [bool](language.types.boolean.md)

public function [setCAPath](oauth.setcapath.md)([string](language.types.string.md) `$ca_path` = ?, [string](language.types.string.md) `$ca_info` = ?): [mixed](language.types.mixed.md)

public function [setNonce](oauth.setnonce.md)([string](language.types.string.md) `$nonce`): [mixed](language.types.mixed.md)

public function [setRequestEngine](oauth.setrequestengine.md)([int](language.types.integer.md) `$reqengine`): [void](language.types.void.md)

public function [setRSACertificate](oauth.setrsacertificate.md)([string](language.types.string.md) `$cert`): [mixed](language.types.mixed.md)

public function [setSSLChecks](oauth.setsslchecks.md)([int](language.types.integer.md) `$sslcheck`): [bool](language.types.boolean.md)

public function [setTimestamp](oauth.settimestamp.md)([string](language.types.string.md) `$timestamp`): [mixed](language.types.mixed.md)

public function [setToken](oauth.settoken.md)([string](language.types.string.md) `$token`, [string](language.types.string.md) `$token_secret`): [bool](language.types.boolean.md)

public function [setVersion](oauth.setversion.md)([string](language.types.string.md) `$version`): [bool](language.types.boolean.md)

}

## Propriedades

debug

sslChecks

debugInfo

## Índice

- [OAuth::\_\_construct](oauth.construct.md) — Cria um objeto OAuth
- [OAuth::\_\_destruct](oauth.destruct.md) — O destruidor
- [OAuth::disableDebug](oauth.disabledebug.md) — Desativa a depuração detalhada
- [OAuth::disableRedirects](oauth.disableredirects.md) — Desativa o redirecionamento
- [OAuth::disableSSLChecks](oauth.disablesslchecks.md) — Desativa verificações SSL
- [OAuth::enableDebug](oauth.enabledebug.md) — Ativa a depuração detalhada
- [OAuth::enableRedirects](oauth.enableredirects.md) — Habilita redirecionamentos
- [OAuth::enableSSLChecks](oauth.enablesslchecks.md) — Ativa verificações SSL
- [OAuth::fetch](oauth.fetch.md) — Busca um recurso protegido OAuth
- [OAuth::generateSignature](oauth.generatesignature.md) — Gera uma assinatura
- [OAuth::getAccessToken](oauth.getaccesstoken.md) — Busca um token de acesso
- [OAuth::getCAPath](oauth.getcapath.md) — Obtém informação de CA
- [OAuth::getLastResponse](oauth.getlastresponse.md) — Obtém a última resposta
- [OAuth::getLastResponseHeaders](oauth.getlastresponseheaders.md) — Obtém cabeçalhos para a última resposta
- [OAuth::getLastResponseInfo](oauth.getlastresponseinfo.md) — Obtém informação HTTP sobre a última resposta
- [OAuth::getRequestHeader](oauth.getrequestheader.md) — Gera assinatura string de cabeçalho OAuth
- [OAuth::getRequestToken](oauth.getrequesttoken.md) — Busca um token de requisição
- [OAuth::setAuthType](oauth.setauthtype.md) — Define o tipo de autorização
- [OAuth::setCAPath](oauth.setcapath.md) — Define caminho e informação da CA
- [OAuth::setNonce](oauth.setnonce.md) — Define o nonce para requisições subsequentes
- [OAuth::setRequestEngine](oauth.setrequestengine.md) — Define o mecanismo da requisição
- [OAuth::setRSACertificate](oauth.setrsacertificate.md) — Define o certificado RSA
- [OAuth::setSSLChecks](oauth.setsslchecks.md) — Ajusta verficações SSL específicas para requisições
- [OAuth::setTimestamp](oauth.settimestamp.md) — Define o timestamp
- [OAuth::setToken](oauth.settoken.md) — Define o token e o segredo
- [OAuth::setVersion](oauth.setversion.md) — Define a versão OAuth

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
