# A classe ReflectionMethod

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionmethod.php

---

# A classe ReflectionMethod

(PHP 5, PHP 7, PHP 8)

## Introdução

A classe **ReflectionMethod** relata
informações sobre um método.

## Resumo da classe

class ****ReflectionMethod****
extends
[ReflectionFunctionAbstract](class.reflectionfunctionabstract.md)
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[IS\_STATIC](class.reflectionmethod.md#reflectionmethod.constants.is-static);

public
const
[int](language.types.integer.md)
[IS\_PUBLIC](class.reflectionmethod.md#reflectionmethod.constants.is-public);

public
const
[int](language.types.integer.md)
[IS\_PROTECTED](class.reflectionmethod.md#reflectionmethod.constants.is-protected);

public
const
[int](language.types.integer.md)
[IS\_PRIVATE](class.reflectionmethod.md#reflectionmethod.constants.is-private);

public
const
[int](language.types.integer.md)
[IS\_ABSTRACT](class.reflectionmethod.md#reflectionmethod.constants.is-abstract);

public
const
[int](language.types.integer.md)
[IS\_FINAL](class.reflectionmethod.md#reflectionmethod.constants.is-final);

/\* Propriedades \*/

public
[string](language.types.string.md)
[$class](class.reflectionmethod.md#reflectionmethod.props.class);

/\* Propriedades herdadas \*/

public
[string](language.types.string.md)
[$name](class.reflectionfunctionabstract.md#reflectionfunctionabstract.props.name);

/\* Métodos \*/

public function [\_\_construct](reflectionmethod.construct.md)([object](language.types.object.md)|[string](language.types.string.md) `$objectOrMethod`, [string](language.types.string.md) `$method`)

public function [\_\_construct](reflectionmethod.construct.md)([string](language.types.string.md) `$classMethod`)

public static function [createFromMethodName](reflectionmethod.createfrommethodname.md)([string](language.types.string.md) `$method`): static

public static function [export](reflectionmethod.export.md)([string](language.types.string.md) `$class`, [string](language.types.string.md) `$name`, [bool](language.types.boolean.md) `$return` = **`false`**): [string](language.types.string.md)

public function [getClosure](reflectionmethod.getclosure.md)([?](language.types.null.md)[object](language.types.object.md) `$object` = **`null`**): [Closure](class.closure.md)

public function [getDeclaringClass](reflectionmethod.getdeclaringclass.md)(): [ReflectionClass](class.reflectionclass.md)

public function [getModifiers](reflectionmethod.getmodifiers.md)(): [int](language.types.integer.md)

public function [getPrototype](reflectionmethod.getprototype.md)(): [ReflectionMethod](class.reflectionmethod.md)

public function [hasPrototype](reflectionmethod.hasprototype.md)(): [bool](language.types.boolean.md)

public function [invoke](reflectionmethod.invoke.md)([?](language.types.null.md)[object](language.types.object.md) `$object`, [mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

public function [invokeArgs](reflectionmethod.invokeargs.md)([?](language.types.null.md)[object](language.types.object.md) `$object`, [array](language.types.array.md) `$args`): [mixed](language.types.mixed.md)

public function [isAbstract](reflectionmethod.isabstract.md)(): [bool](language.types.boolean.md)

public function [isConstructor](reflectionmethod.isconstructor.md)(): [bool](language.types.boolean.md)

public function [isDestructor](reflectionmethod.isdestructor.md)(): [bool](language.types.boolean.md)

public function [isFinal](reflectionmethod.isfinal.md)(): [bool](language.types.boolean.md)

public function [isPrivate](reflectionmethod.isprivate.md)(): [bool](language.types.boolean.md)

public function [isProtected](reflectionmethod.isprotected.md)(): [bool](language.types.boolean.md)

public function [isPublic](reflectionmethod.ispublic.md)(): [bool](language.types.boolean.md)

#[[\Deprecated](class.deprecated.md)]  
public function [setAccessible](reflectionmethod.setaccessible.md)([bool](language.types.boolean.md) `$accessible`): [void](language.types.void.md)

public function [\_\_toString](reflectionmethod.tostring.md)(): [string](language.types.string.md)

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

## Propriedades

name
:   Nome do método

class
:   Nome da classe

## Constantes predefinidas

## Modificadores de ReflectionMethod

**`ReflectionMethod::IS_STATIC`** [int](language.types.integer.md)
:   Indica que o método é estático.
    Antes do PHP 7.4.0, o valor era `1`.

**`ReflectionMethod::IS_PUBLIC`** [int](language.types.integer.md)
:   Indica que o método é público.
    Antes do PHP 7.4.0, o valor era `256`.

**`ReflectionMethod::IS_PROTECTED`** [int](language.types.integer.md)
:   Indica que o método é protegido.
    Antes do PHP 7.4.0, o valor era `512`.

**`ReflectionMethod::IS_PRIVATE`** [int](language.types.integer.md)
:   Indica que o método é privado.
    Antes do PHP 7.4.0, o valor era `1024`.

**`ReflectionMethod::IS_ABSTRACT`** [int](language.types.integer.md)
:   Indica que o método é abstrato.
    Antes do PHP 7.4.0, o valor era `2`.

**`ReflectionMethod::IS_FINAL`** [int](language.types.integer.md)
:   Indica que o método é final.
    Antes do PHP 7.4.0, o valor era `4`.

> **Nota**:
>
> Os valores dessas constantes podem mudar entre as versões do PHP.
> É recomendado sempre utilizar as constantes
> e não depender diretamente dos valores.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |
| 8.0.0 | [ReflectionMethod::export()](reflectionmethod.export.md) foi removido. |

## Índice

- [ReflectionMethod::\_\_construct](reflectionmethod.construct.md) — Constrói um ReflectionMethod
- [ReflectionMethod::createFromMethodName](reflectionmethod.createfrommethodname.md) — Cria um novo ReflectionMethod
- [ReflectionMethod::export](reflectionmethod.export.md) — Exporta um método de reflexão
- [ReflectionMethod::getClosure](reflectionmethod.getclosure.md) — Retorna um closure criado dinamicamente para o método
- [ReflectionMethod::getDeclaringClass](reflectionmethod.getdeclaringclass.md) — Obtém a classe declarada para o método refletido
- [ReflectionMethod::getModifiers](reflectionmethod.getmodifiers.md) — Obtém os modificadores do método
- [ReflectionMethod::getPrototype](reflectionmethod.getprototype.md) — Obtém o protótipo do método (se houver)
- [ReflectionMethod::hasPrototype](reflectionmethod.hasprototype.md) — Retorna se um método tem um protótipo
- [ReflectionMethod::invoke](reflectionmethod.invoke.md) — Invoca
- [ReflectionMethod::invokeArgs](reflectionmethod.invokeargs.md) — Invoca argumentos
- [ReflectionMethod::isAbstract](reflectionmethod.isabstract.md) — Verifica se o método é abstrato
- [ReflectionMethod::isConstructor](reflectionmethod.isconstructor.md) — Verifica se o método é um construtor
- [ReflectionMethod::isDestructor](reflectionmethod.isdestructor.md) — Verifica se o método é um destrutor
- [ReflectionMethod::isFinal](reflectionmethod.isfinal.md) — Verifica se o método é final
- [ReflectionMethod::isPrivate](reflectionmethod.isprivate.md) — Verifica se o método é privado
- [ReflectionMethod::isProtected](reflectionmethod.isprotected.md) — Verifica se o método é protegido
- [ReflectionMethod::isPublic](reflectionmethod.ispublic.md) — Verifica se o método é público
- [ReflectionMethod::setAccessible](reflectionmethod.setaccessible.md) — Define acessibilidade do método
- [ReflectionMethod::\_\_toString](reflectionmethod.tostring.md) — Retorna a representação em string do objeto do método Reflection

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
