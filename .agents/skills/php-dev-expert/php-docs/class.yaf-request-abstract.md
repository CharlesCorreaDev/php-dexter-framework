# A classe Yaf_Request_Abstract

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-request-abstract.php

---

# A classe Yaf\_Request\_Abstract

(Yaf >=1.0.0)

## Introdução

## Resumo da classe

class **Yaf\_Request\_Abstract**
{

/\* Constantes \*/

const
[string](language.types.string.md)
[SCHEME\_HTTP](class.yaf-request-abstract.md#yaf-request-abstract.constants.scheme-http) = http;

const
[string](language.types.string.md)
[SCHEME\_HTTPS](class.yaf-request-abstract.md#yaf-request-abstract.constants.scheme-https) = https;

/\* Propriedades \*/

public
[$module](class.yaf-request-abstract.md#yaf-request-abstract.props.module);

public
[$controller](class.yaf-request-abstract.md#yaf-request-abstract.props.controller);

public
[$action](class.yaf-request-abstract.md#yaf-request-abstract.props.action);

public
[$method](class.yaf-request-abstract.md#yaf-request-abstract.props.method);

protected
[$params](class.yaf-request-abstract.md#yaf-request-abstract.props.params);

protected
[$language](class.yaf-request-abstract.md#yaf-request-abstract.props.language);

protected
[$\_exception](class.yaf-request-abstract.md#yaf-request-abstract.props.exception);

protected
[$\_base\_uri](class.yaf-request-abstract.md#yaf-request-abstract.props.base-uri);

protected
[$uri](class.yaf-request-abstract.md#yaf-request-abstract.props.uri);

protected
[$dispatched](class.yaf-request-abstract.md#yaf-request-abstract.props.dispatched);

protected
[$routed](class.yaf-request-abstract.md#yaf-request-abstract.props.routed);

/\* Métodos \*/

public function [clearParams](yaf-request-abstract.clearparams.md)(): [bool](language.types.boolean.md)

public function [get](yaf-request-abstract.get.md)([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

public function [getActionName](yaf-request-abstract.getactionname.md)(): [void](language.types.void.md)

public function [getBaseUri](yaf-request-abstract.getbaseuri.md)(): [void](language.types.void.md)

public function [getControllerName](yaf-request-abstract.getcontrollername.md)(): [void](language.types.void.md)

public function [getCookie](yaf-request-abstract.getcookie.md)([string](language.types.string.md) `$name` = ?, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

public function [getEnv](yaf-request-abstract.getenv.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$default` = ?): [void](language.types.void.md)

public function [getException](yaf-request-abstract.getexception.md)(): [void](language.types.void.md)

public function [getFiles](yaf-request-abstract.getfiles.md)([string](language.types.string.md) `$name` = ?, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

public function [getLanguage](yaf-request-abstract.getlanguage.md)(): [void](language.types.void.md)

public function [getMethod](yaf-request-abstract.getmethod.md)(): [string](language.types.string.md)

public function [getModuleName](yaf-request-abstract.getmodulename.md)(): [void](language.types.void.md)

public function [getParam](yaf-request-abstract.getparam.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$default` = ?): [mixed](language.types.mixed.md)

public function [getParams](yaf-request-abstract.getparams.md)(): [array](language.types.array.md)

public function [getPost](yaf-request-abstract.getpost.md)([string](language.types.string.md) `$name` = ?, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

public function [getQuery](yaf-request-abstract.getquery.md)([string](language.types.string.md) `$name` = ?, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

public function [getRaw](yaf-request-abstract.getraw.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getRequest](yaf-request-abstract.getrequest.md)([string](language.types.string.md) `$name` = ?, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

public function [getRequestUri](yaf-request-abstract.getrequesturi.md)(): [void](language.types.void.md)

public function [getServer](yaf-request-abstract.getserver.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$default` = ?): [void](language.types.void.md)

public function [isCli](yaf-request-abstract.iscli.md)(): [bool](language.types.boolean.md)

public function [isDelete](yaf-request-abstract.isdelete.md)(): [bool](language.types.boolean.md)

public function [isDispatched](yaf-request-abstract.isdispatched.md)(): [bool](language.types.boolean.md)

public function [isGet](yaf-request-abstract.isget.md)(): [bool](language.types.boolean.md)

public function [isHead](yaf-request-abstract.ishead.md)(): [bool](language.types.boolean.md)

public function [isOptions](yaf-request-abstract.isoptions.md)(): [bool](language.types.boolean.md)

public function [isPatch](yaf-request-abstract.ispatch.md)(): [bool](language.types.boolean.md)

public function [isPost](yaf-request-abstract.ispost.md)(): [bool](language.types.boolean.md)

public function [isPut](yaf-request-abstract.isput.md)(): [bool](language.types.boolean.md)

public function [isRouted](yaf-request-abstract.isrouted.md)(): [bool](language.types.boolean.md)

public function [isXmlHttpRequest](yaf-request-abstract.isxmlhttprequest.md)(): [bool](language.types.boolean.md)

public function [setActionName](yaf-request-abstract.setactionname.md)([string](language.types.string.md) `$action`, [bool](language.types.boolean.md) `$format_name` = true): [void](language.types.void.md)

public function [setBaseUri](yaf-request-abstract.setbaseuri.md)([string](language.types.string.md) `$uir`): [bool](language.types.boolean.md)

public function [setControllerName](yaf-request-abstract.setcontrollername.md)([string](language.types.string.md) `$controller`, [bool](language.types.boolean.md) `$format_name` = true): [void](language.types.void.md)

public function [setDispatched](yaf-request-abstract.setdispatched.md)(): [void](language.types.void.md)

public function [setModuleName](yaf-request-abstract.setmodulename.md)([string](language.types.string.md) `$module`, [bool](language.types.boolean.md) `$format_name` = true): [void](language.types.void.md)

public function [setParam](yaf-request-abstract.setparam.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value` = ?): [bool](language.types.boolean.md)

public function [setRequestUri](yaf-request-abstract.setrequesturi.md)([string](language.types.string.md) `$uir`): [void](language.types.void.md)

public function [setRouted](yaf-request-abstract.setrouted.md)([string](language.types.string.md) `$flag` = ?): [void](language.types.void.md)

}

## Propriedades

module

controller

action

method

params

language

\_exception

\_base\_uri

uri

dispatched

routed

## Constantes predefinidas

**`Yaf_Request_Abstract::SCHEME_HTTP`**

**`Yaf_Request_Abstract::SCHEME_HTTPS`**

## Índice

- [Yaf\_Request\_Abstract::clearParams](yaf-request-abstract.clearparams.md) — Remove todos os parâmetros
- [Yaf\_Request\_Abstract::get](yaf-request-abstract.get.md) — Retrieve a variable from the request
- [Yaf\_Request\_Abstract::getActionName](yaf-request-abstract.getactionname.md) — getActionName
- [Yaf\_Request\_Abstract::getBaseUri](yaf-request-abstract.getbaseuri.md) — getBaseUri
- [Yaf\_Request\_Abstract::getControllerName](yaf-request-abstract.getcontrollername.md) — getControllerName
- [Yaf\_Request\_Abstract::getCookie](yaf-request-abstract.getcookie.md) — Fetch a COOKIE variable
- [Yaf\_Request\_Abstract::getEnv](yaf-request-abstract.getenv.md) — Obtém a variável ENV
- [Yaf\_Request\_Abstract::getException](yaf-request-abstract.getexception.md) — getException
- [Yaf\_Request\_Abstract::getFiles](yaf-request-abstract.getfiles.md) — Fetch uploaded files
- [Yaf\_Request\_Abstract::getLanguage](yaf-request-abstract.getlanguage.md) — Obtém a língua preferida do cliente
- [Yaf\_Request\_Abstract::getMethod](yaf-request-abstract.getmethod.md) — Obtém o método de requisição
- [Yaf\_Request\_Abstract::getModuleName](yaf-request-abstract.getmodulename.md) — getModuleName
- [Yaf\_Request\_Abstract::getParam](yaf-request-abstract.getparam.md) — Obtém o parâmetro da chamada
- [Yaf\_Request\_Abstract::getParams](yaf-request-abstract.getparams.md) — Obtém todos os parâmetros de chamada
- [Yaf\_Request\_Abstract::getPost](yaf-request-abstract.getpost.md) — Fetch a POST parameter
- [Yaf\_Request\_Abstract::getQuery](yaf-request-abstract.getquery.md) — Fetch a query parameter
- [Yaf\_Request\_Abstract::getRaw](yaf-request-abstract.getraw.md) — Retrieve the raw request body
- [Yaf\_Request\_Abstract::getRequest](yaf-request-abstract.getrequest.md) — Fetch a REQUEST variable
- [Yaf\_Request\_Abstract::getRequestUri](yaf-request-abstract.getrequesturi.md) — getRequestUri
- [Yaf\_Request\_Abstract::getServer](yaf-request-abstract.getserver.md) — Obtém a variável SERVER
- [Yaf\_Request\_Abstract::isCli](yaf-request-abstract.iscli.md) — Informa se é uma requisição CLI
- [Yaf\_Request\_Abstract::isDelete](yaf-request-abstract.isdelete.md) — Determine if the request is a DELETE request
- [Yaf\_Request\_Abstract::isDispatched](yaf-request-abstract.isdispatched.md) — Informa se a requisição foi despachada
- [Yaf\_Request\_Abstract::isGet](yaf-request-abstract.isget.md) — Informa se a requisição é GET
- [Yaf\_Request\_Abstract::isHead](yaf-request-abstract.ishead.md) — Informa se a requisição é HEAD
- [Yaf\_Request\_Abstract::isOptions](yaf-request-abstract.isoptions.md) — Informa se a requisição é OPTIONS
- [Yaf\_Request\_Abstract::isPatch](yaf-request-abstract.ispatch.md) — Determine if the request is a PATCH request
- [Yaf\_Request\_Abstract::isPost](yaf-request-abstract.ispost.md) — Informa se a requisição é POST
- [Yaf\_Request\_Abstract::isPut](yaf-request-abstract.isput.md) — Informa se a requisição é PUT
- [Yaf\_Request\_Abstract::isRouted](yaf-request-abstract.isrouted.md) — Informa se a requisição foi roteada
- [Yaf\_Request\_Abstract::isXmlHttpRequest](yaf-request-abstract.isxmlhttprequest.md) — Informa se a requisição é AJAX
- [Yaf\_Request\_Abstract::setActionName](yaf-request-abstract.setactionname.md) — Define nome de ação
- [Yaf\_Request\_Abstract::setBaseUri](yaf-request-abstract.setbaseuri.md) — Define o URI base
- [Yaf\_Request\_Abstract::setControllerName](yaf-request-abstract.setcontrollername.md) — Define o nome do controlador
- [Yaf\_Request\_Abstract::setDispatched](yaf-request-abstract.setdispatched.md) — setDispatched
- [Yaf\_Request\_Abstract::setModuleName](yaf-request-abstract.setmodulename.md) — Define o nome do módulo
- [Yaf\_Request\_Abstract::setParam](yaf-request-abstract.setparam.md) — Define um parâmetro de chamada para uma solicitação
- [Yaf\_Request\_Abstract::setRequestUri](yaf-request-abstract.setrequesturi.md) — setRequestUri
- [Yaf\_Request\_Abstract::setRouted](yaf-request-abstract.setrouted.md) — setRouted

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
