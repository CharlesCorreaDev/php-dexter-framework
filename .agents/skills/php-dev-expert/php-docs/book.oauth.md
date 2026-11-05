# OAuth

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.oauth.php

---

# OAuth

# Introdução

Essa extensão fornece vínculos de consumidor e provedor OAuth 1.0a. OAuth é um
protocolo de autorização construído em cima do HTTP que permite que aplicativos
acessem dados com segurança sem precisar armazenar nomes de usuário e
senhas.

- [Instalação/Configuração](oauth.setup.md)
  - [Dependências](oauth.requirements.md)
  - [Instalação](oauth.installation.md)
- [Constantes predefinidas](oauth.constants.md)
- [Examples](oauth.examples.md)
  - [FireEagle](oauth.examples.fireeagle.md)
- [Funções OAuth](ref.oauth.md)
  - [oauth\_get\_sbs](function.oauth-get-sbs.md) — Gera uma String Base de Assinatura
  - [oauth\_urlencode](function.oauth-urlencode.md) — Codifica uma URI conforme RFC 3986
- [OAuth](class.oauth.md) — A classe OAuth
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
- [OAuthProvider](class.oauthprovider.md) — A classe OAuthProvider
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
- [OAuthException](class.oauthexception.md) — Classe OAuthException

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
