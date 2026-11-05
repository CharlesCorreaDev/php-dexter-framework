# SOAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.soap.php

---

# SOAP

# Introdução

A extensão SOAP pode ser usada para escrever Servidores e Clientes SOAP. Ele suporta
subconjuntos de [» SOAP 1.1](https://www.w3.org/TR/soap11/), [» SOAP 1.2](https://www.w3.org/TR/soap12/) e [» Especificações WSDL 1.1](https://www.w3.org/TR/wsdl).

- [Instalação/Configuração](soap.setup.md)
  - [Dependências](soap.requirements.md)
  - [Instalação](soap.installation.md)
  - [Configurações de Execução](soap.configuration.md)
- [Constantes predefinidas](soap.constants.md)
- [Funções SOAP](ref.soap.md)
  - [is\_soap\_fault](function.is-soap-fault.md) — Verifica se uma chamada SOAP falhou
  - [use\_soap\_error\_handler](function.use-soap-error-handler.md) — Define se deseja usar o manipulador de erros SOAP
- [SoapClient](class.soapclient.md) — A classe SoapClient
  - [SoapClient::\_\_call](soapclient.call.md) — Chama uma função SOAP (descontinuada)
  - [SoapClient::\_\_construct](soapclient.construct.md) — Construtor de SoapClient
  - [SoapClient::\_\_doRequest](soapclient.dorequest.md) — Executa uma solicitação SOAP
  - [SoapClient::\_\_getCookies](soapclient.getcookies.md) — Obtém uma lista de cookies
  - [SoapClient::\_\_getFunctions](soapclient.getfunctions.md) — Retorna uma lista de funções SOAP disponíveis
  - [SoapClient::\_\_getLastRequest](soapclient.getlastrequest.md) — Retorna a última solicitação SOAP
  - [SoapClient::\_\_getLastRequestHeaders](soapclient.getlastrequestheaders.md) — Retorna os cabeçalhos SOAP da última solicitação
  - [SoapClient::\_\_getLastResponse](soapclient.getlastresponse.md) — Retorna a última resposta SOAP
  - [SoapClient::\_\_getLastResponseHeaders](soapclient.getlastresponseheaders.md) — Retorna os cabeçalhos SOAP da última resposta
  - [SoapClient::\_\_getTypes](soapclient.gettypes.md) — Retorna uma lista de tipos SOAP
  - [SoapClient::\_\_setCookie](soapclient.setcookie.md) — Define um cookie para solicitações SOAP
  - [SoapClient::\_\_setLocation](soapclient.setlocation.md) — Define a localização do serviço Web a ser usado
  - [SoapClient::\_\_setSoapHeaders](soapclient.setsoapheaders.md) — Define cabeçalhos SOAP para chamadas subsequentes
  - [SoapClient::\_\_soapCall](soapclient.soapcall.md) — Chama uma função SOAP
- [SoapServer](class.soapserver.md) — A clase SoapServer
  - [SoapServer::addFunction](soapserver.addfunction.md) — Adiciona uma ou mais funções para lidar com solicitações SOAP
  - [SoapServer::addSoapHeader](soapserver.addsoapheader.md) — Adiciona um cabeçalho SOAP à resposta
  - [SoapServer::\_\_construct](soapserver.construct.md) — Construtor SoapServer
  - [SoapServer::fault](soapserver.fault.md) — Emite falha no SoapServer indicando um erro
  - [SoapServer::getFunctions](soapserver.getfunctions.md) — Retorna uma lista de funções definidas
  - [SoapServer::\_\_getLastResponse](soapserver.getlastresponse.md) — Retorna a última resposta SOAP
  - [SoapServer::handle](soapserver.handle.md) — Lida com uma solicitação SOAP
  - [SoapServer::setClass](soapserver.setclass.md) — Define a classe que trata as solicitações SOAP
  - [SoapServer::setObject](soapserver.setobject.md) — Define o objeto que será usado para tratar solicitações SOAP
  - [SoapServer::setPersistence](soapserver.setpersistence.md) — Define o modo de persistência do SoapServer
- [SoapFault](class.soapfault.md) — A classe SoapFault
  - [SoapFault::\_\_construct](soapfault.construct.md) — Construtor SoapFault
  - [SoapFault::\_\_toString](soapfault.tostring.md) — Obtém uma representação de string de um SoapFault
- [SoapHeader](class.soapheader.md) — A classe SoapHeader
  - [SoapHeader::\_\_construct](soapheader.construct.md) — Construtor SoapHeader
- [SoapParam](class.soapparam.md) — A classe SoapParam
  - [SoapParam::\_\_construct](soapparam.construct.md) — Construtor SoapParam
- [SoapVar](class.soapvar.md) — A classe SoapVar
  - [SoapVar::\_\_construct](soapvar.construct.md) — Construtor SoapVar
- [Soap\Sdl](class.soap-sdl.md) — A classe Soap\Sdl
- [Soap\Url](class.soap-url.md) — A classe Soap\Url

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
