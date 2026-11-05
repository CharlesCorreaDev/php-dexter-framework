# A classe ReflectionFunction

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionfunction.php

---

# A classe ReflectionFunction

(PHP 5, PHP 7, PHP 8)

## Introdução

A classe **ReflectionFunction** reporta
informações sobre uma função.

## Resumo da classe

class ****ReflectionFunction****
extends
[ReflectionFunctionAbstract](class.reflectionfunctionabstract.md)
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[IS\_DEPRECATED](class.reflectionfunction.md#reflectionfunction.constants.is-deprecated);

/\* Propriedades herdadas \*/

public
[string](language.types.string.md)
[$name](class.reflectionfunctionabstract.md#reflectionfunctionabstract.props.name);

/\* Métodos \*/

public function [\_\_construct](reflectionfunction.construct.md)([Closure](class.closure.md)|[string](language.types.string.md) `$function`)

public static function [export](reflectionfunction.export.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$return` = ?): [string](language.types.string.md)

public function [getClosure](reflectionfunction.getclosure.md)(): [Closure](class.closure.md)

public function [invoke](reflectionfunction.invoke.md)([mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

public function [invokeArgs](reflectionfunction.invokeargs.md)([array](language.types.array.md) `$args`): [mixed](language.types.mixed.md)

public function [isAnonymous](reflectionfunction.isanonymous.md)(): [bool](language.types.boolean.md)

#[[\Deprecated](class.deprecated.md)]  
public function [isDisabled](reflectionfunction.isdisabled.md)(): [bool](language.types.boolean.md)

public function [\_\_toString](reflectionfunction.tostring.md)(): [string](language.types.string.md)

/\* Métodos herdados \*/

private function [ReflectionFunctionAbstract::\_\_clone](reflectionfunctionabstract.clone.md)(): [void](language.types.void.md)

public function [ReflectionFunctionAbstract::getAttributes](reflectionfunctionabstract.getattributes.md)([?](language.types.null.md)[string](language.types.string.md) `$name` = [null](reserved.constants.md#constant.null), [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

public function [ReflectionFunctionAbstract::getClosureCalledClass](reflectionfunctionabstract.getclosurecalledclass.md)(): [?](language.types.null.md)[ReflectionClass](class.reflectionclass.md)

public function [ReflectionFunctionAbstract::getClosureScopeClass](reflectionfunctionabstract.getclosurescopeclass.md)(): [?](language.types.null.md)[ReflectionClass](class.reflectionclass.md)

public function [ReflectionFunctionAbstract::getClosureThis](reflectionfunctionabstract.getclosurethis.md)(): [?](language.types.null.md)[object](language.types.object.md)

public function [ReflectionFunctionAbstract::getClosureUsedVariables](reflectionfunctionabstract.getclosureusedvariables.md)(): [array](language.types.array.md)

public function [ReflectionFunctionAbstract::getDocComment](reflectionfunctionabstract.getdoccomment.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [ReflectionFunctionAbstract::getEndLine](reflectionfunctionabstract.getendline.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [ReflectionFunctionAbstract::getExtension](reflectionfunctionabstract.getextension.md)(): [?](language.types.null.md)[ReflectionExtension](class.reflectionextension.md)

public function [ReflectionFunctionAbstract::getExtensionName](reflectionfunctionabstract.getextensionname.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [ReflectionFunctionAbstract::getFileName](reflectionfunctionabstract.getfilename.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [ReflectionFunctionAbstract::getName](reflectionfunctionabstract.getname.md)(): [string](language.types.string.md)

public function [ReflectionFunctionAbstract::getNamespaceName](reflectionfunctionabstract.getnamespacename.md)(): [string](language.types.string.md)

public function [ReflectionFunctionAbstract::getNumberOfParameters](reflectionfunctionabstract.getnumberofparameters.md)(): [int](language.types.integer.md)

public function [ReflectionFunctionAbstract::getNumberOfRequiredParameters](reflectionfunctionabstract.getnumberofrequiredparameters.md)(): [int](language.types.integer.md)

public function [ReflectionFunctionAbstract::getParameters](reflectionfunctionabstract.getparameters.md)(): [array](language.types.array.md)

public function [ReflectionFunctionAbstract::getReturnType](reflectionfunctionabstract.getreturntype.md)(): [?](language.types.null.md)[ReflectionType](class.reflectiontype.md)

public function [ReflectionFunctionAbstract::getShortName](reflectionfunctionabstract.getshortname.md)(): [string](language.types.string.md)

public function [ReflectionFunctionAbstract::getStartLine](reflectionfunctionabstract.getstartline.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [ReflectionFunctionAbstract::getStaticVariables](reflectionfunctionabstract.getstaticvariables.md)(): [array](language.types.array.md)

public function [ReflectionFunctionAbstract::getTentativeReturnType](reflectionfunctionabstract.gettentativereturntype.md)(): [?](language.types.null.md)[ReflectionType](class.reflectiontype.md)

public function [ReflectionFunctionAbstract::hasReturnType](reflectionfunctionabstract.hasreturntype.md)(): [bool](language.types.boolean.md)

public function [ReflectionFunctionAbstract::hasTentativeReturnType](reflectionfunctionabstract.hastentativereturntype.md)(): [bool](language.types.boolean.md)

public function [ReflectionFunctionAbstract::inNamespace](reflectionfunctionabstract.innamespace.md)(): [bool](language.types.boolean.md)

public function [ReflectionFunctionAbstract::isClosure](reflectionfunctionabstract.isclosure.md)(): [bool](language.types.boolean.md)

public function [ReflectionFunctionAbstract::isDeprecated](reflectionfunctionabstract.isdeprecated.md)(): [bool](language.types.boolean.md)

public function [ReflectionFunctionAbstract::isGenerator](reflectionfunctionabstract.isgenerator.md)(): [bool](language.types.boolean.md)

public function [ReflectionFunctionAbstract::isInternal](reflectionfunctionabstract.isinternal.md)(): [bool](language.types.boolean.md)

public function [ReflectionFunctionAbstract::isStatic](reflectiofunctionabstract.isstatic.md)(): [bool](language.types.boolean.md)

public function [ReflectionFunctionAbstract::isUserDefined](reflectionfunctionabstract.isuserdefined.md)(): [bool](language.types.boolean.md)

public function [ReflectionFunctionAbstract::isVariadic](reflectionfunctionabstract.isvariadic.md)(): [bool](language.types.boolean.md)

public function [ReflectionFunctionAbstract::returnsReference](reflectionfunctionabstract.returnsreference.md)(): [bool](language.types.boolean.md)

abstract public function [ReflectionFunctionAbstract::\_\_toString](reflectionfunctionabstract.tostring.md)(): [void](language.types.void.md)

}

## Constantes predefinidas

## Modificadores ReflectionFunction

[ReflectionFunction::IS\_DEPRECATED](class.reflectionfunction.md#reflectionfunction.constants.is-deprecated) [int](language.types.integer.md)
:   Indica funções descontinuadas.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |
| 8.0.0 | [ReflectionFunction::export()](reflectionfunction.export.md) foi removido. |

## Índice

- [ReflectionFunction::\_\_construct](reflectionfunction.construct.md) — Constrói um objeto ReflectionFunction
- [ReflectionFunction::export](reflectionfunction.export.md) — Função de exportação
- [ReflectionFunction::getClosure](reflectionfunction.getclosure.md) — Retorna um closure criado dinamicamente para a função
- [ReflectionFunction::invoke](reflectionfunction.invoke.md) — Invoca função
- [ReflectionFunction::invokeArgs](reflectionfunction.invokeargs.md) — Invoca argumentos de função
- [ReflectionFunction::isAnonymous](reflectionfunction.isanonymous.md) — Verifica se uma função é anônima
- [ReflectionFunction::isDisabled](reflectionfunction.isdisabled.md) — Verifica se a função está desativada
- [ReflectionFunction::\_\_toString](reflectionfunction.tostring.md) — Retorna a representação em string do objeto ReflectionFunction

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
