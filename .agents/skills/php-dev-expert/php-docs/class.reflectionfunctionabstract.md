# A classe ReflectionFunctionAbstract

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionfunctionabstract.php

---

# A classe ReflectionFunctionAbstract

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

## Introdução

Uma classe pai para [ReflectionFunction](class.reflectionfunction.md), leia sua
descrição para detalhes.

## Resumo da classe

abstract
class ****ReflectionFunctionAbstract****
implements
[Reflector](class.reflector.md) {

/\* Propriedades \*/

public
[string](language.types.string.md)
[$name](class.reflectionfunctionabstract.md#reflectionfunctionabstract.props.name);

/\* Métodos \*/

private function [\_\_clone](reflectionfunctionabstract.clone.md)(): [void](language.types.void.md)

public function [getAttributes](reflectionfunctionabstract.getattributes.md)([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

public function [getClosureCalledClass](reflectionfunctionabstract.getclosurecalledclass.md)(): [?](language.types.null.md)[ReflectionClass](class.reflectionclass.md)

public function [getClosureScopeClass](reflectionfunctionabstract.getclosurescopeclass.md)(): [?](language.types.null.md)[ReflectionClass](class.reflectionclass.md)

public function [getClosureThis](reflectionfunctionabstract.getclosurethis.md)(): [?](language.types.null.md)[object](language.types.object.md)

public function [getClosureUsedVariables](reflectionfunctionabstract.getclosureusedvariables.md)(): [array](language.types.array.md)

public function [getDocComment](reflectionfunctionabstract.getdoccomment.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getEndLine](reflectionfunctionabstract.getendline.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getExtension](reflectionfunctionabstract.getextension.md)(): [?](language.types.null.md)[ReflectionExtension](class.reflectionextension.md)

public function [getExtensionName](reflectionfunctionabstract.getextensionname.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getFileName](reflectionfunctionabstract.getfilename.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getName](reflectionfunctionabstract.getname.md)(): [string](language.types.string.md)

public function [getNamespaceName](reflectionfunctionabstract.getnamespacename.md)(): [string](language.types.string.md)

public function [getNumberOfParameters](reflectionfunctionabstract.getnumberofparameters.md)(): [int](language.types.integer.md)

public function [getNumberOfRequiredParameters](reflectionfunctionabstract.getnumberofrequiredparameters.md)(): [int](language.types.integer.md)

public function [getParameters](reflectionfunctionabstract.getparameters.md)(): [array](language.types.array.md)

public function [getReturnType](reflectionfunctionabstract.getreturntype.md)(): [?](language.types.null.md)[ReflectionType](class.reflectiontype.md)

public function [getShortName](reflectionfunctionabstract.getshortname.md)(): [string](language.types.string.md)

public function [getStartLine](reflectionfunctionabstract.getstartline.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getStaticVariables](reflectionfunctionabstract.getstaticvariables.md)(): [array](language.types.array.md)

public function [getTentativeReturnType](reflectionfunctionabstract.gettentativereturntype.md)(): [?](language.types.null.md)[ReflectionType](class.reflectiontype.md)

public function [hasReturnType](reflectionfunctionabstract.hasreturntype.md)(): [bool](language.types.boolean.md)

public function [hasTentativeReturnType](reflectionfunctionabstract.hastentativereturntype.md)(): [bool](language.types.boolean.md)

public function [inNamespace](reflectionfunctionabstract.innamespace.md)(): [bool](language.types.boolean.md)

public function [isClosure](reflectionfunctionabstract.isclosure.md)(): [bool](language.types.boolean.md)

public function [isDeprecated](reflectionfunctionabstract.isdeprecated.md)(): [bool](language.types.boolean.md)

public function [isGenerator](reflectionfunctionabstract.isgenerator.md)(): [bool](language.types.boolean.md)

public function [isInternal](reflectionfunctionabstract.isinternal.md)(): [bool](language.types.boolean.md)

public function [isStatic](reflectiofunctionabstract.isstatic.md)(): [bool](language.types.boolean.md)

public function [isUserDefined](reflectionfunctionabstract.isuserdefined.md)(): [bool](language.types.boolean.md)

public function [isVariadic](reflectionfunctionabstract.isvariadic.md)(): [bool](language.types.boolean.md)

public function [returnsReference](reflectionfunctionabstract.returnsreference.md)(): [bool](language.types.boolean.md)

abstract public function [\_\_toString](reflectionfunctionabstract.tostring.md)(): [void](language.types.void.md)

}

## Propriedades

name
:   Nome da função. Somente leitura, lança
    [ReflectionException](class.reflectionexception.md) em tentativa de escrita.

## Índice

- [ReflectionFunctionAbstract::\_\_clone](reflectionfunctionabstract.clone.md) — Função de clone
- [ReflectionFunctionAbstract::getAttributes](reflectionfunctionabstract.getattributes.md) — Obtém atributos
- [ReflectionFunctionAbstract::getClosureCalledClass](reflectionfunctionabstract.getclosurecalledclass.md) — Retorna a classe correspondente a static:: dentro de uma closure
- [ReflectionFunctionAbstract::getClosureScopeClass](reflectionfunctionabstract.getclosurescopeclass.md) — Retorna a classe correspondente ao escopo dentro de uma closure
- [ReflectionFunctionAbstract::getClosureThis](reflectionfunctionabstract.getclosurethis.md) — Retorna o objeto que corresponde a $this dentro de uma closure
- [ReflectionFunctionAbstract::getClosureUsedVariables](reflectionfunctionabstract.getclosureusedvariables.md) — Retorna um array das variáveis ​​usadas no Closure
- [ReflectionFunctionAbstract::getDocComment](reflectionfunctionabstract.getdoccomment.md) — Obtém comentário doc
- [ReflectionFunctionAbstract::getEndLine](reflectionfunctionabstract.getendline.md) — Obtém o número da linha final
- [ReflectionFunctionAbstract::getExtension](reflectionfunctionabstract.getextension.md) — Obtém informações da extensão
- [ReflectionFunctionAbstract::getExtensionName](reflectionfunctionabstract.getextensionname.md) — Obtém o nome da extensão
- [ReflectionFunctionAbstract::getFileName](reflectionfunctionabstract.getfilename.md) — Obtém o nome do arquivo
- [ReflectionFunctionAbstract::getName](reflectionfunctionabstract.getname.md) — Obtém o nome da função
- [ReflectionFunctionAbstract::getNamespaceName](reflectionfunctionabstract.getnamespacename.md) — Obtém o nome do namespace
- [ReflectionFunctionAbstract::getNumberOfParameters](reflectionfunctionabstract.getnumberofparameters.md) — Obtém o número de parâmetros
- [ReflectionFunctionAbstract::getNumberOfRequiredParameters](reflectionfunctionabstract.getnumberofrequiredparameters.md) — Obtém o número de parâmetros necessários
- [ReflectionFunctionAbstract::getParameters](reflectionfunctionabstract.getparameters.md) — Obtém parâmetros
- [ReflectionFunctionAbstract::getReturnType](reflectionfunctionabstract.getreturntype.md) — Obtém o tipo de retorno especificado de uma função
- [ReflectionFunctionAbstract::getShortName](reflectionfunctionabstract.getshortname.md) — Obtém o nome curto da função
- [ReflectionFunctionAbstract::getStartLine](reflectionfunctionabstract.getstartline.md) — Obtém o número da linha inicial
- [ReflectionFunctionAbstract::getStaticVariables](reflectionfunctionabstract.getstaticvariables.md) — Obtém variáveis estáticas
- [ReflectionFunctionAbstract::getTentativeReturnType](reflectionfunctionabstract.gettentativereturntype.md) — Retorna o tipo de retorno provisório associado à função
- [ReflectionFunctionAbstract::hasReturnType](reflectionfunctionabstract.hasreturntype.md) — Verifica se a função possui um tipo de retorno especificado
- [ReflectionFunctionAbstract::hasTentativeReturnType](reflectionfunctionabstract.hastentativereturntype.md) — Retorna se a função tem um tipo de retorno provisório
- [ReflectionFunctionAbstract::inNamespace](reflectionfunctionabstract.innamespace.md) — Verifica se a função está no namespace
- [ReflectionFunctionAbstract::isClosure](reflectionfunctionabstract.isclosure.md) — Verifica se é um closure
- [ReflectionFunctionAbstract::isDeprecated](reflectionfunctionabstract.isdeprecated.md) — Verifica se está descontinuada
- [ReflectionFunctionAbstract::isGenerator](reflectionfunctionabstract.isgenerator.md) — Retorna se esta função é um gerador
- [ReflectionFunctionAbstract::isInternal](reflectionfunctionabstract.isinternal.md) — Verifica se é interno
- [ReflectionFunctionAbstract::isStatic](reflectiofunctionabstract.isstatic.md) — Verifica se a função é estática
- [ReflectionFunctionAbstract::isUserDefined](reflectionfunctionabstract.isuserdefined.md) — Verifica se foi definido pelo usuário
- [ReflectionFunctionAbstract::isVariadic](reflectionfunctionabstract.isvariadic.md) — Verifica se a função é variável
- [ReflectionFunctionAbstract::returnsReference](reflectionfunctionabstract.returnsreference.md) — Verifica se retorna referência
- [ReflectionFunctionAbstract::\_\_toString](reflectionfunctionabstract.tostring.md) — Retorna a representação em string do objeto ReflectionFunctionAbstract

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
