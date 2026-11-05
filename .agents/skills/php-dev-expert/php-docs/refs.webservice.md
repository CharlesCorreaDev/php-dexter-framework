# Serviços para Web

> **Fonte / Source:** https://www.php.net/manual/pt_BR/refs.webservice.php

---

# Serviços para Web

- [OAuth](book.oauth.md)
  - [Instalação/Configuração](oauth.setup.md)
  - [Constantes predefinidas](oauth.constants.md)
  - [Examples](oauth.examples.md)
  - [Funções OAuth](ref.oauth.md)
  - [OAuth](class.oauth.md) — A classe OAuth
  - [OAuthProvider](class.oauthprovider.md) — A classe OAuthProvider
  - [OAuthException](class.oauthexception.md) — Classe OAuthException
- [SOAP](book.soap.md)
  - [Instalação/Configuração](soap.setup.md)
  - [Constantes predefinidas](soap.constants.md)
  - [Funções SOAP](ref.soap.md)
  - [SoapClient](class.soapclient.md) — A classe SoapClient
  - [SoapServer](class.soapserver.md) — A clase SoapServer
  - [SoapFault](class.soapfault.md) — A classe SoapFault
  - [SoapHeader](class.soapheader.md) — A classe SoapHeader
  - [SoapParam](class.soapparam.md) — A classe SoapParam
  - [SoapVar](class.soapvar.md) — A classe SoapVar
  - [Soap\Sdl](class.soap-sdl.md) — A classe Soap\Sdl
  - [Soap\Url](class.soap-url.md) — A classe Soap\Url
- [Yar](book.yar.md) — Yet Another RPC Framework
  - [Instalação/Configuração](yar.setup.md)
  - [Constantes predefinidas](yar.constants.md)
  - [Examples](yar.examples.md)
  - [Yar\_Server](class.yar-server.md) — A classe Yar\_Server
  - [Yar\_Client](class.yar-client.md) — A classe Yar\_Client
  - [Yar\_Concurrent\_Client](class.yar-concurrent-client.md) — A classe Yar\_Concurrent\_Client
  - [Yar\_Server\_Exception](class.yar-server-exception.md) — A classe Yar\_Server\_Exception
  - [Yar\_Client\_Exception](class.yar-client-exception.md) — A classe Yar\_Client\_Exception
- [XML-RPC](book.xmlrpc.md)
  - [Instalação/Configuração](xmlrpc.setup.md)
  - [Funções para XML-RPC](ref.xmlrpc.md)

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
