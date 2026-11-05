# A classe Yaf_Action_Abstract

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-action-abstract.php

---

# A classe Yaf\_Action\_Abstract

(Yaf >=1.0.0)

## Introdução

Uma ação pode ser definida em um arquivo separado no Yaf (consulte
[Yaf\_Controller\_Abstract](class.yaf-controller-abstract.md)). Ou seja, um método de ação
também pode ser uma classe **Yaf\_Action\_Abstract**.

Já que deve exisitir um ponto de entrada que possa ser chamado pelo Yaf,
o método abstrato
[Yaf\_Action\_Abstract::execute()](yaf-action-abstract.execute.md) deve ser implementado na
classe de ação customizada.

## Resumo da classe

class **Yaf\_Action\_Abstract**

extends
[Yaf\_Controller\_Abstract](class.yaf-controller-abstract.md)
{

/\* Propriedades \*/

protected
[$\_controller](class.yaf-action-abstract.md#yaf-action-abstract.props.controller);

/\* Métodos \*/

abstract publicfunction [execute](yaf-action-abstract.execute.md)([mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

publicfunction [getController](yaf-action-abstract.getcontroller.md)(): [Yaf\_Controller\_Abstract](class.yaf-controller-abstract.md)

public function [getControllerName](yaf-controller-abstract.getcontrollername.md)(): [string](language.types.string.md)

/\* Métodos herdados \*/

protected function [Yaf\_Controller\_Abstract::display](yaf-controller-abstract.display.md)([string](language.types.string.md) `$tpl`, [array](language.types.array.md) `$parameters` = ?): [bool](language.types.boolean.md)

public function [Yaf\_Controller\_Abstract::forward](yaf-controller-abstract.forward.md)([string](language.types.string.md) `$action`, [array](language.types.array.md) `$paramters` = ?): [bool](language.types.boolean.md)

public function [Yaf\_Controller\_Abstract::getInvokeArg](yaf-controller-abstract.getinvokearg.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [Yaf\_Controller\_Abstract::getInvokeArgs](yaf-controller-abstract.getinvokeargs.md)(): [void](language.types.void.md)

public function [Yaf\_Controller\_Abstract::getModuleName](yaf-controller-abstract.getmodulename.md)(): [string](language.types.string.md)

public function [Yaf\_Controller\_Abstract::getName](yaf-controller-abstract.getname.md)(): [string](language.types.string.md)

public function [Yaf\_Controller\_Abstract::getRequest](yaf-controller-abstract.getrequest.md)(): [Yaf\_Request\_Abstract](class.yaf-request-abstract.md)

public function [Yaf\_Controller\_Abstract::getResponse](yaf-controller-abstract.getresponse.md)(): [Yaf\_Response\_Abstract](class.yaf-response-abstract.md)

public function [Yaf\_Controller\_Abstract::getView](yaf-controller-abstract.getview.md)(): [Yaf\_View\_Interface](class.yaf-view-interface.md)

public function [Yaf\_Controller\_Abstract::getViewpath](yaf-controller-abstract.getviewpath.md)(): [string](language.types.string.md)

public function [Yaf\_Controller\_Abstract::init](yaf-controller-abstract.init.md)(): [void](language.types.void.md)

public function [Yaf\_Controller\_Abstract::initView](yaf-controller-abstract.initview.md)([array](language.types.array.md) `$options` = ?): [void](language.types.void.md)

public function [Yaf\_Controller\_Abstract::redirect](yaf-controller-abstract.redirect.md)([string](language.types.string.md) `$url`): [bool](language.types.boolean.md)

protected function [Yaf\_Controller\_Abstract::render](yaf-controller-abstract.render.md)([string](language.types.string.md) `$tpl`, [array](language.types.array.md) `$parameters` = ?): [string](language.types.string.md)

public function [Yaf\_Controller\_Abstract::setViewpath](yaf-controller-abstract.setviewpath.md)([string](language.types.string.md) `$view_directory`): [void](language.types.void.md)

}

## Propriedades

\_module

\_name

\_request

\_response

\_invoke\_args

\_view

\_controller

## Índice

- [Yaf\_Action\_Abstract::execute](yaf-action-abstract.execute.md) — Ponto de entrada da ação
- [Yaf\_Action\_Abstract::getController](yaf-action-abstract.getcontroller.md) — Obtém o objeto controlador
- [Yaf\_Action\_Abstract::getControllerName](yaf-controller-abstract.getcontrollername.md) — Obtém o nome do controlador

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
