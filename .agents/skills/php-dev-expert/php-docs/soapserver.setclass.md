# Define a classe que trata as solicitações SOAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapserver.setclass.php

---

# SoapServer::setClass

(PHP 5, PHP 7, PHP 8)

SoapServer::setClass — Define a classe que trata as solicitações SOAP

### Descrição

public function **SoapServer::setClass**([string](language.types.string.md) `$class`, [mixed](language.types.mixed.md) `...$args`): [void](language.types.void.md)

Exporta todos os métodos da classe especificada.

O objeto pode se tornar persistente durante a solicitação para uma determinada sessão PHP
com o método [SoapServer::setPersistence()](soapserver.setpersistence.md).

### Parâmetros

`class`
:   O nome da classe exportada.

`args`
:   Esses parâmetros opcionais serão passados para o construtor de classe padrão
    durante a criação do objeto.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [SoapServer::\_\_construct()](soapserver.construct.md) - Construtor SoapServer
- [SoapServer::addFunction()](soapserver.addfunction.md) - Adiciona uma ou mais funções para lidar com solicitações SOAP
- [SoapServer::setPersistence()](soapserver.setpersistence.md) - Define o modo de persistência do SoapServer

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
