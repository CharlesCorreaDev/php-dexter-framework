# A classe ReflectionParameter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionparameter.php

---

# A classe ReflectionParameter

(PHP 5, PHP 7, PHP 8)

## Introdução

A classe **ReflectionParameter** recupera
informações sobre os parâmetros de uma função ou método.

Para inspecionar os parâmetros de uma função, primeiro crie uma instância
das classes [ReflectionFunction](class.reflectionfunction.md) ou
[ReflectionMethod](class.reflectionmethod.md) e, em seguida, use seus
método [ReflectionFunctionAbstract::getParameters()](reflectionfunctionabstract.getparameters.md)
para recuperar uma array de parâmetros.

## Resumo da classe

class ****ReflectionParameter****
implements
[Reflector](class.reflector.md) {

/\* Propriedades \*/

public
[string](language.types.string.md)
[$name](class.reflectionparameter.md#reflectionparameter.props.name);

/\* Métodos \*/

public function [\_\_construct](reflectionparameter.construct.md)([string](language.types.string.md)|[array](language.types.array.md)|[object](language.types.object.md) `$function`, [int](language.types.integer.md)|[string](language.types.string.md) `$param`)

public function [allowsNull](reflectionparameter.allowsnull.md)(): [bool](language.types.boolean.md)

public function [canBePassedByValue](reflectionparameter.canbepassedbyvalue.md)(): [bool](language.types.boolean.md)

private function [\_\_clone](reflectionparameter.clone.md)(): [void](language.types.void.md)

public static function [export](reflectionparameter.export.md)([string](language.types.string.md) `$function`, [string](language.types.string.md) `$parameter`, [bool](language.types.boolean.md) `$return` = ?): [string](language.types.string.md)

public function [getAttributes](reflectionparameter.getattributes.md)([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

#[[\Deprecated](class.deprecated.md)]  
public function [getClass](reflectionparameter.getclass.md)(): [?](language.types.null.md)[ReflectionClass](class.reflectionclass.md)

public function [getDeclaringClass](reflectionparameter.getdeclaringclass.md)(): [?](language.types.null.md)[ReflectionClass](class.reflectionclass.md)

public function [getDeclaringFunction](reflectionparameter.getdeclaringfunction.md)(): [ReflectionFunctionAbstract](class.reflectionfunctionabstract.md)

public function [getDefaultValue](reflectionparameter.getdefaultvalue.md)(): [mixed](language.types.mixed.md)

public function [getDefaultValueConstantName](reflectionparameter.getdefaultvalueconstantname.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getName](reflectionparameter.getname.md)(): [string](language.types.string.md)

public function [getPosition](reflectionparameter.getposition.md)(): [int](language.types.integer.md)

public function [getType](reflectionparameter.gettype.md)(): [?](language.types.null.md)[ReflectionType](class.reflectiontype.md)

public function [hasType](reflectionparameter.hastype.md)(): [bool](language.types.boolean.md)

#[[\Deprecated](class.deprecated.md)]  
public function [isArray](reflectionparameter.isarray.md)(): [bool](language.types.boolean.md)

#[[\Deprecated](class.deprecated.md)]  
public function [isCallable](reflectionparameter.iscallable.md)(): [bool](language.types.boolean.md)

public function [isDefaultValueAvailable](reflectionparameter.isdefaultvalueavailable.md)(): [bool](language.types.boolean.md)

public function [isDefaultValueConstant](reflectionparameter.isdefaultvalueconstant.md)(): [bool](language.types.boolean.md)

public function [isOptional](reflectionparameter.isoptional.md)(): [bool](language.types.boolean.md)

public function [isPassedByReference](reflectionparameter.ispassedbyreference.md)(): [bool](language.types.boolean.md)

public function [isPromoted](reflectionparameter.ispromoted.md)(): [bool](language.types.boolean.md)

public function [isVariadic](reflectionparameter.isvariadic.md)(): [bool](language.types.boolean.md)

public function [\_\_toString](reflectionparameter.tostring.md)(): [string](language.types.string.md)

}

## Propriedades

name
:   Nome do parâmetro. Somente leitura, lança
    [ReflectionException](class.reflectionexception.md) ao tentar escrever.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | [ReflectionParameter::export()](reflectionparameter.export.md) foi removido. |

## Índice

- [ReflectionParameter::allowsNull](reflectionparameter.allowsnull.md) — Verifica se nulo é permitido
- [ReflectionParameter::canBePassedByValue](reflectionparameter.canbepassedbyvalue.md) — Retorna se este parâmetro pode ser passado por valor
- [ReflectionParameter::\_\_clone](reflectionparameter.clone.md) — Clone
- [ReflectionParameter::\_\_construct](reflectionparameter.construct.md) — Constrói
- [ReflectionParameter::export](reflectionparameter.export.md) — Exporta
- [ReflectionParameter::getAttributes](reflectionparameter.getattributes.md) — Obtém Atributos
- [ReflectionParameter::getClass](reflectionparameter.getclass.md) — Obtém um objeto ReflectionClass para o parâmetro que está sendo refletido ou null
- [ReflectionParameter::getDeclaringClass](reflectionparameter.getdeclaringclass.md) — Obtém a classe declarada
- [ReflectionParameter::getDeclaringFunction](reflectionparameter.getdeclaringfunction.md) — Obtém a função de declaração
- [ReflectionParameter::getDefaultValue](reflectionparameter.getdefaultvalue.md) — Obtém o valor padrão do parâmetro
- [ReflectionParameter::getDefaultValueConstantName](reflectionparameter.getdefaultvalueconstantname.md) — Retorna o nome da constante do valor padrão se o valor padrão for constante ou nulo
- [ReflectionParameter::getName](reflectionparameter.getname.md) — Obtém o nome do parâmetro
- [ReflectionParameter::getPosition](reflectionparameter.getposition.md) — Obtém a posição do parâmetro
- [ReflectionParameter::getType](reflectionparameter.gettype.md) — Obtém o tipo de um parâmetro
- [ReflectionParameter::hasType](reflectionparameter.hastype.md) — Verifica se o parâmetro tem um tipo
- [ReflectionParameter::isArray](reflectionparameter.isarray.md) — Verifica se o parâmetro espera um array
- [ReflectionParameter::isCallable](reflectionparameter.iscallable.md) — Retorna se o parâmetro DEVE ser um callable
- [ReflectionParameter::isDefaultValueAvailable](reflectionparameter.isdefaultvalueavailable.md) — Verifica se um valor padrão está disponível
- [ReflectionParameter::isDefaultValueConstant](reflectionparameter.isdefaultvalueconstant.md) — Retorna se o valor padrão deste parâmetro é uma constante
- [ReflectionParameter::isOptional](reflectionparameter.isoptional.md) — Verifica se opcional
- [ReflectionParameter::isPassedByReference](reflectionparameter.ispassedbyreference.md) — Verifica se foi passado por referência
- [ReflectionParameter::isPromoted](reflectionparameter.ispromoted.md) — Verifica se um parâmetro está promovido a uma propriedade
- [ReflectionParameter::isVariadic](reflectionparameter.isvariadic.md) — Verifica se o parâmetro é variado
- [ReflectionParameter::\_\_toString](reflectionparameter.tostring.md) — Para string

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
