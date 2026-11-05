# A classe OAuthProvider

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.oauthprovider.php

---

# A classe OAuthProvider

(PECL OAuth >= 1.0.0)

## Introdução

Gerencia uma classe de provedor OAuth.

Veja também um tutorial externo detalhado intitulado
[» Escrevendo um Serviço Provedor OAuth](https://toys.lerdorf.com/archives/55-Writing-an-OAuth-Provider-Service.html),
que adota uma abordagem prática para fornecer este serviço. Também existem
[» exemplos de provedor OAuth](https://svn.php.net/viewvc/pecl/oauth/trunk/examples) dentro das fontes de
extensão OAuth.

## Resumo da classe

class **OAuthProvider**
{

/\* Métodos \*/

final public function [addRequiredParameter](oauthprovider.addrequiredparameter.md)([string](language.types.string.md) `$req_params`): [bool](language.types.boolean.md)

public function [callconsumerHandler](oauthprovider.callconsumerhandler.md)(): [void](language.types.void.md)

public function [callTimestampNonceHandler](oauthprovider.calltimestampnoncehandler.md)(): [void](language.types.void.md)

public function [calltokenHandler](oauthprovider.calltokenhandler.md)(): [void](language.types.void.md)

public function [checkOAuthRequest](oauthprovider.checkoauthrequest.md)([string](language.types.string.md) `$uri` = ?, [string](language.types.string.md) `$method` = ?): [void](language.types.void.md)

public function [\_\_construct](oauthprovider.construct.md)([array](language.types.array.md) `$params_array` = ?)

public function [consumerHandler](oauthprovider.consumerhandler.md)([callable](language.types.callable.md) `$callback_function`): [void](language.types.void.md)

final public static function [generateToken](oauthprovider.generatetoken.md)([int](language.types.integer.md) `$size`, [bool](language.types.boolean.md) `$strong` = **`false`**): [string](language.types.string.md)

public function [is2LeggedEndpoint](oauthprovider.is2leggedendpoint.md)([mixed](language.types.mixed.md) `$params_array`): [void](language.types.void.md)

public function [isRequestTokenEndpoint](oauthprovider.isrequesttokenendpoint.md)([bool](language.types.boolean.md) `$will_issue_request_token`): [void](language.types.void.md)

final public function [removeRequiredParameter](oauthprovider.removerequiredparameter.md)([string](language.types.string.md) `$req_params`): [bool](language.types.boolean.md)

final public static function [reportProblem](oauthprovider.reportproblem.md)([string](language.types.string.md) `$oauthexception`, [bool](language.types.boolean.md) `$send_headers` = **`true`**): [string](language.types.string.md)

final public function [setParam](oauthprovider.setparam.md)([string](language.types.string.md) `$param_key`, [mixed](language.types.mixed.md) `$param_val` = ?): [bool](language.types.boolean.md)

final public function [setRequestTokenPath](oauthprovider.setrequesttokenpath.md)([string](language.types.string.md) `$path`): [bool](language.types.boolean.md)

public function [timestampNonceHandler](oauthprovider.timestampnoncehandler.md)([callable](language.types.callable.md) `$callback_function`): [void](language.types.void.md)

public function [tokenHandler](oauthprovider.tokenhandler.md)([callable](language.types.callable.md) `$callback_function`): [void](language.types.void.md)

}

## Índice

- [OAuthProvider::addRequiredParameter](oauthprovider.addrequiredparameter.md) — Adiciona parâmetros requeridos
- [OAuthProvider::callconsumerHandler](oauthprovider.callconsumerhandler.md) — Chama a função de retorno consumerHandler
- [OAuthProvider::callTimestampNonceHandler](oauthprovider.calltimestampnoncehandler.md) — Chama a função de retorno timestampNonceHandler
- [OAuthProvider::calltokenHandler](oauthprovider.calltokenhandler.md) — Chama a função de retorno tokenHandler
- [OAuthProvider::checkOAuthRequest](oauthprovider.checkoauthrequest.md) — Verifica uma requisição OAuth
- [OAuthProvider::\_\_construct](oauthprovider.construct.md) — Constrói um novo objeto OAuthProvider
- [OAuthProvider::consumerHandler](oauthprovider.consumerhandler.md) — Define a função de retorno de gerenciamento de consumidor
- [OAuthProvider::generateToken](oauthprovider.generatetoken.md) — Gera um token aleatório
- [OAuthProvider::is2LeggedEndpoint](oauthprovider.is2leggedendpoint.md) — is2LeggedEndpoint
- [OAuthProvider::isRequestTokenEndpoint](oauthprovider.isrequesttokenendpoint.md) — Define isRequestTokenEndpoint
- [OAuthProvider::removeRequiredParameter](oauthprovider.removerequiredparameter.md) — Remove um parâmetro requerido
- [OAuthProvider::reportProblem](oauthprovider.reportproblem.md) — Reporta um problema
- [OAuthProvider::setParam](oauthprovider.setparam.md) — Define um parâmetro
- [OAuthProvider::setRequestTokenPath](oauthprovider.setrequesttokenpath.md) — Define o caminho para o token de requisição
- [OAuthProvider::timestampNonceHandler](oauthprovider.timestampnoncehandler.md) — Define a função de retorno de gerenciamento de timestamp nonce
- [OAuthProvider::tokenHandler](oauthprovider.tokenhandler.md) — Define a função de retorno de gerenciamento de token

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
