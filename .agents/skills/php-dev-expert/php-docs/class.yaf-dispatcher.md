# A classe Yaf_Dispatcher

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-dispatcher.php

---

# A classe Yaf\_Dispatcher

(Yaf >=1.0.0)

## Introdução

O objetivo de **Yaf\_Dispatcher** é inicializar
o ambiente de requisição, rotear a requisição recebida e então despachar
quaisquer ações descobertas; ele agrega todas as respostas e as retorna
quando o processo é concluído.

**Yaf\_Dispatcher** também implementa o padrão Singleton,
o que significa que apenas uma única instância dele pode estar disponível a qualquer momento. Isso
permite que ele também atue como um registro no qual os outros objetos no
processo de despacho podem recorrer.

## Resumo da classe

final
class **Yaf\_Dispatcher**
{

/\* Propriedades \*/

protected
[$\_router](class.yaf-dispatcher.md#yaf-dispatcher.props.router);

protected
[$\_view](class.yaf-dispatcher.md#yaf-dispatcher.props.view);

protected
[$\_request](class.yaf-dispatcher.md#yaf-dispatcher.props.request);

protected
[$\_plugins](class.yaf-dispatcher.md#yaf-dispatcher.props.plugins);

protected
static
[$\_instance](class.yaf-dispatcher.md#yaf-dispatcher.props.instance);

protected
[$\_auto\_render](class.yaf-dispatcher.md#yaf-dispatcher.props.auto-render);

protected
[$\_return\_response](class.yaf-dispatcher.md#yaf-dispatcher.props.return-response);

protected
[$\_instantly\_flush](class.yaf-dispatcher.md#yaf-dispatcher.props.instantly-flush);

protected
[$\_default\_module](class.yaf-dispatcher.md#yaf-dispatcher.props.default-module);

protected
[$\_default\_controller](class.yaf-dispatcher.md#yaf-dispatcher.props.default-controller);

protected
[$\_default\_action](class.yaf-dispatcher.md#yaf-dispatcher.props.default-action);

/\* Métodos \*/

public function [\_\_construct](yaf-dispatcher.construct.md)()

public function [autoRender](yaf-dispatcher.autorender.md)([bool](language.types.boolean.md) `$flag` = ?): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

public function [catchException](yaf-dispatcher.catchexception.md)([bool](language.types.boolean.md) `$flag` = ?): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

public function [disableView](yaf-dispatcher.disableview.md)(): [bool](language.types.boolean.md)

public function [dispatch](yaf-dispatcher.dispatch.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`): [Yaf\_Response\_Abstract](class.yaf-response-abstract.md)

public function [enableView](yaf-dispatcher.enableview.md)(): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

public function [flushInstantly](yaf-dispatcher.flushinstantly.md)([bool](language.types.boolean.md) `$flag` = ?): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

public function [getApplication](yaf-dispatcher.getapplication.md)(): [Yaf\_Application](class.yaf-application.md)

public function [getDefaultAction](yaf-dispatcher.getdefaultaction.md)(): [string](language.types.string.md)

public function [getDefaultController](yaf-dispatcher.getdefaultcontroller.md)(): [string](language.types.string.md)

public function [getDefaultModule](yaf-dispatcher.getdefaultmodule.md)(): [string](language.types.string.md)

public static function [getInstance](yaf-dispatcher.getinstance.md)(): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

public function [getRequest](yaf-dispatcher.getrequest.md)(): [Yaf\_Request\_Abstract](class.yaf-request-abstract.md)

public function [getResponse](yaf-dispatcher.getresponse.md)(): [?](language.types.null.md)[Yaf\_Response\_Abstract](class.yaf-response-abstract.md)

public function [getRouter](yaf-dispatcher.getrouter.md)(): [Yaf\_Router](class.yaf-router.md)

public function [initView](yaf-dispatcher.initview.md)([string](language.types.string.md) `$templates_dir`, [array](language.types.array.md) `$options` = ?): [Yaf\_View\_Interface](class.yaf-view-interface.md)

public function [registerPlugin](yaf-dispatcher.registerplugin.md)([Yaf\_Plugin\_Abstract](class.yaf-plugin-abstract.md) `$plugin`): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

public function [returnResponse](yaf-dispatcher.returnresponse.md)([bool](language.types.boolean.md) `$flag`): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

public function [setDefaultAction](yaf-dispatcher.setdefaultaction.md)([string](language.types.string.md) `$action`): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

public function [setDefaultController](yaf-dispatcher.setdefaultcontroller.md)([string](language.types.string.md) `$controller`): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

public function [setDefaultModule](yaf-dispatcher.setdefaultmodule.md)([string](language.types.string.md) `$module`): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

public function [setErrorHandler](yaf-dispatcher.seterrorhandler.md)(call `$callback`, [int](language.types.integer.md) `$error_types`): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

public function [setRequest](yaf-dispatcher.setrequest.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

public function [setResponse](yaf-dispatcher.setresponse.md)([Yaf\_Response\_Abstract](class.yaf-response-abstract.md) `$response`): [?](language.types.null.md)[Yaf\_Dispatcher](class.yaf-dispatcher.md)

public function [setView](yaf-dispatcher.setview.md)([Yaf\_View\_Interface](class.yaf-view-interface.md) `$view`): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

public function [throwException](yaf-dispatcher.throwexception.md)([bool](language.types.boolean.md) `$flag` = ?): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

}

## Propriedades

\_router

\_view

\_request

\_plugins

\_instance

\_auto\_render

\_return\_response

\_instantly\_flush

\_default\_module

\_default\_controller

\_default\_action

## Índice

- [Yaf\_Dispatcher::autoRender](yaf-dispatcher.autorender.md) — Ativa/desativa a renderização automática
- [Yaf\_Dispatcher::catchException](yaf-dispatcher.catchexception.md) — Ativa/desativa a captura de exceções
- [Yaf\_Dispatcher::\_\_construct](yaf-dispatcher.construct.md) — Construtor de Yaf\_Dispatcher
- [Yaf\_Dispatcher::disableView](yaf-dispatcher.disableview.md) — Desativa a renderização de visualização
- [Yaf\_Dispatcher::dispatch](yaf-dispatcher.dispatch.md) — Despacha uma requisição
- [Yaf\_Dispatcher::enableView](yaf-dispatcher.enableview.md) — Ativa a renderização de visualização
- [Yaf\_Dispatcher::flushInstantly](yaf-dispatcher.flushinstantly.md) — Liga/desliga o descarregamento instantânea
- [Yaf\_Dispatcher::getApplication](yaf-dispatcher.getapplication.md) — Obtém a aplicação
- [Yaf\_Dispatcher::getDefaultAction](yaf-dispatcher.getdefaultaction.md) — Obtém o nome da ação padrão
- [Yaf\_Dispatcher::getDefaultController](yaf-dispatcher.getdefaultcontroller.md) — Obtém o nome do controlador padrão
- [Yaf\_Dispatcher::getDefaultModule](yaf-dispatcher.getdefaultmodule.md) — Obtém o nome do módulo padrão
- [Yaf\_Dispatcher::getInstance](yaf-dispatcher.getinstance.md) — Obtém a instância do despachante
- [Yaf\_Dispatcher::getRequest](yaf-dispatcher.getrequest.md) — Obtém a instância da requisição
- [Yaf\_Dispatcher::getResponse](yaf-dispatcher.getresponse.md) — Get the response object
- [Yaf\_Dispatcher::getRouter](yaf-dispatcher.getrouter.md) — Obtém a instância do roteador
- [Yaf\_Dispatcher::initView](yaf-dispatcher.initview.md) — Inicializa a visualização e a retorna
- [Yaf\_Dispatcher::registerPlugin](yaf-dispatcher.registerplugin.md) — Registra um plugin
- [Yaf\_Dispatcher::returnResponse](yaf-dispatcher.returnresponse.md) — returnResponse
- [Yaf\_Dispatcher::setDefaultAction](yaf-dispatcher.setdefaultaction.md) — Altera o nome da ação padrão
- [Yaf\_Dispatcher::setDefaultController](yaf-dispatcher.setdefaultcontroller.md) — Altera o nome do controlador padrão
- [Yaf\_Dispatcher::setDefaultModule](yaf-dispatcher.setdefaultmodule.md) — Altera o nome do módulo padrão
- [Yaf\_Dispatcher::setErrorHandler](yaf-dispatcher.seterrorhandler.md) — Define o manipulador de erros
- [Yaf\_Dispatcher::setRequest](yaf-dispatcher.setrequest.md) — setRequest
- [Yaf\_Dispatcher::setResponse](yaf-dispatcher.setresponse.md) — Set the response object
- [Yaf\_Dispatcher::setView](yaf-dispatcher.setview.md) — Define um mecanismo de visualização customizado
- [Yaf\_Dispatcher::throwException](yaf-dispatcher.throwexception.md) — Ativa/desativa o lançamento de exceção

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
