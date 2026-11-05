# A classe Yaf_Request_Simple

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-request-simple.php

---

# A classe Yaf\_Request\_Simple

(Yaf >=1.0.0)

## Introdução

**Yaf\_Request\_Simple** é usada em particular para propósito de
testes. Ou seja, simular uma requisição especial no modo CLI.

## Resumo da classe

class **Yaf\_Request\_Simple**

extends
[Yaf\_Request\_Abstract](class.yaf-request-abstract.md)
{

/\* Constantes \*/

const
[string](language.types.string.md)
[SCHEME\_HTTP](class.yaf-request-simple.md#yaf-request-simple.constants.scheme-http) = http;

const
[string](language.types.string.md)
[SCHEME\_HTTPS](class.yaf-request-simple.md#yaf-request-simple.constants.scheme-https) = https;

/\* Propriedades \*/

/\* Métodos \*/

public function [\_\_construct](yaf-request-simple.construct.md)(  
    [string](language.types.string.md) `$method` = ?,  
    [string](language.types.string.md) `$module` = ?,  
    [string](language.types.string.md) `$controller` = ?,  
    [string](language.types.string.md) `$action` = ?,  
    [array](language.types.array.md) `$params` = ?  
)

public function [get](yaf-request-simple.get.md)(): [void](language.types.void.md)

public function [getCookie](yaf-request-simple.getcookie.md)(): [void](language.types.void.md)

public function [getFiles](yaf-request-simple.getfiles.md)(): [void](language.types.void.md)

public function [getPost](yaf-request-simple.getpost.md)(): [void](language.types.void.md)

public function [getQuery](yaf-request-simple.getquery.md)(): [void](language.types.void.md)

public function [getRequest](yaf-request-simple.getrequest.md)(): [void](language.types.void.md)

public function [isXmlHttpRequest](yaf-request-simple.isxmlhttprequest.md)(): [void](language.types.void.md)

/\* Métodos herdados \*/

public function [Yaf\_Request\_Abstract::clearParams](yaf-request-abstract.clearparams.md)(): [bool](language.types.boolean.md)

public function [Yaf\_Request\_Abstract::get](yaf-request-abstract.get.md)([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

public function [Yaf\_Request\_Abstract::getActionName](yaf-request-abstract.getactionname.md)(): [void](language.types.void.md)

public function [Yaf\_Request\_Abstract::getBaseUri](yaf-request-abstract.getbaseuri.md)(): [void](language.types.void.md)

public function [Yaf\_Request\_Abstract::getControllerName](yaf-request-abstract.getcontrollername.md)(): [void](language.types.void.md)

public function [Yaf\_Request\_Abstract::getCookie](yaf-request-abstract.getcookie.md)([string](language.types.string.md) `$name` = ?, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

public function [Yaf\_Request\_Abstract::getEnv](yaf-request-abstract.getenv.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$default` = ?): [void](language.types.void.md)

public function [Yaf\_Request\_Abstract::getException](yaf-request-abstract.getexception.md)(): [void](language.types.void.md)

public function [Yaf\_Request\_Abstract::getFiles](yaf-request-abstract.getfiles.md)([string](language.types.string.md) `$name` = ?, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

public function [Yaf\_Request\_Abstract::getLanguage](yaf-request-abstract.getlanguage.md)(): [void](language.types.void.md)

public function [Yaf\_Request\_Abstract::getMethod](yaf-request-abstract.getmethod.md)(): [string](language.types.string.md)

public function [Yaf\_Request\_Abstract::getModuleName](yaf-request-abstract.getmodulename.md)(): [void](language.types.void.md)

public function [Yaf\_Request\_Abstract::getParam](yaf-request-abstract.getparam.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$default` = ?): [mixed](language.types.mixed.md)

public function [Yaf\_Request\_Abstract::getParams](yaf-request-abstract.getparams.md)(): [array](language.types.array.md)

public function [Yaf\_Request\_Abstract::getPost](yaf-request-abstract.getpost.md)([string](language.types.string.md) `$name` = ?, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

public function [Yaf\_Request\_Abstract::getQuery](yaf-request-abstract.getquery.md)([string](language.types.string.md) `$name` = ?, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

public function [Yaf\_Request\_Abstract::getRaw](yaf-request-abstract.getraw.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [Yaf\_Request\_Abstract::getRequest](yaf-request-abstract.getrequest.md)([string](language.types.string.md) `$name` = ?, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

public function [Yaf\_Request\_Abstract::getRequestUri](yaf-request-abstract.getrequesturi.md)(): [void](language.types.void.md)

public function [Yaf\_Request\_Abstract::getServer](yaf-request-abstract.getserver.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$default` = ?): [void](language.types.void.md)

public function [Yaf\_Request\_Abstract::isCli](yaf-request-abstract.iscli.md)(): [bool](language.types.boolean.md)

public function [Yaf\_Request\_Abstract::isDelete](yaf-request-abstract.isdelete.md)(): [bool](language.types.boolean.md)

public function [Yaf\_Request\_Abstract::isDispatched](yaf-request-abstract.isdispatched.md)(): [bool](language.types.boolean.md)

public function [Yaf\_Request\_Abstract::isGet](yaf-request-abstract.isget.md)(): [bool](language.types.boolean.md)

public function [Yaf\_Request\_Abstract::isHead](yaf-request-abstract.ishead.md)(): [bool](language.types.boolean.md)

public function [Yaf\_Request\_Abstract::isOptions](yaf-request-abstract.isoptions.md)(): [bool](language.types.boolean.md)

public function [Yaf\_Request\_Abstract::isPatch](yaf-request-abstract.ispatch.md)(): [bool](language.types.boolean.md)

public function [Yaf\_Request\_Abstract::isPost](yaf-request-abstract.ispost.md)(): [bool](language.types.boolean.md)

public function [Yaf\_Request\_Abstract::isPut](yaf-request-abstract.isput.md)(): [bool](language.types.boolean.md)

public function [Yaf\_Request\_Abstract::isRouted](yaf-request-abstract.isrouted.md)(): [bool](language.types.boolean.md)

public function [Yaf\_Request\_Abstract::isXmlHttpRequest](yaf-request-abstract.isxmlhttprequest.md)(): [bool](language.types.boolean.md)

public function [Yaf\_Request\_Abstract::setActionName](yaf-request-abstract.setactionname.md)([string](language.types.string.md) `$action`, [bool](language.types.boolean.md) `$format_name` = true): [void](language.types.void.md)

public function [Yaf\_Request\_Abstract::setBaseUri](yaf-request-abstract.setbaseuri.md)([string](language.types.string.md) `$uir`): [bool](language.types.boolean.md)

public function [Yaf\_Request\_Abstract::setControllerName](yaf-request-abstract.setcontrollername.md)([string](language.types.string.md) `$controller`, [bool](language.types.boolean.md) `$format_name` = true): [void](language.types.void.md)

public function [Yaf\_Request\_Abstract::setDispatched](yaf-request-abstract.setdispatched.md)(): [void](language.types.void.md)

public function [Yaf\_Request\_Abstract::setModuleName](yaf-request-abstract.setmodulename.md)([string](language.types.string.md) `$module`, [bool](language.types.boolean.md) `$format_name` = true): [void](language.types.void.md)

public function [Yaf\_Request\_Abstract::setParam](yaf-request-abstract.setparam.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value` = ?): [bool](language.types.boolean.md)

public function [Yaf\_Request\_Abstract::setRequestUri](yaf-request-abstract.setrequesturi.md)([string](language.types.string.md) `$uir`): [void](language.types.void.md)

public function [Yaf\_Request\_Abstract::setRouted](yaf-request-abstract.setrouted.md)([string](language.types.string.md) `$flag` = ?): [void](language.types.void.md)

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

**`Yaf_Request_Simple::SCHEME_HTTP`**

**`Yaf_Request_Simple::SCHEME_HTTPS`**

## Índice

- [Yaf\_Request\_Simple::\_\_construct](yaf-request-simple.construct.md) — Construtor de Yaf\_Request\_Simple
- [Yaf\_Request\_Simple::get](yaf-request-simple.get.md) — get
- [Yaf\_Request\_Simple::getCookie](yaf-request-simple.getcookie.md) — getCookie
- [Yaf\_Request\_Simple::getFiles](yaf-request-simple.getfiles.md) — getFiles
- [Yaf\_Request\_Simple::getPost](yaf-request-simple.getpost.md) — getPost
- [Yaf\_Request\_Simple::getQuery](yaf-request-simple.getquery.md) — getQuery
- [Yaf\_Request\_Simple::getRequest](yaf-request-simple.getrequest.md) — getRequest
- [Yaf\_Request\_Simple::isXmlHttpRequest](yaf-request-simple.isxmlhttprequest.md) — Informa se a requisição é Ajax

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
