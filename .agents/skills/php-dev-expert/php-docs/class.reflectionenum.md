# A classe ReflectionEnum

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionenum.php

---

# A classe ReflectionEnum

(PHP 8 >= 8.1.0)

## Introdução

A classe **ReflectionEnum** relata
informações sobre um Enum.

## Resumo da classe

class ****ReflectionEnum****
extends
[ReflectionClass](class.reflectionclass.md)
{

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[ReflectionClass::IS\_IMPLICIT\_ABSTRACT](class.reflectionclass.md#reflectionclass.constants.is-implicit-abstract);

public
const
[int](language.types.integer.md)
[ReflectionClass::IS\_EXPLICIT\_ABSTRACT](class.reflectionclass.md#reflectionclass.constants.is-explicit-abstract);

public
const
[int](language.types.integer.md)
[ReflectionClass::IS\_FINAL](class.reflectionclass.md#reflectionclass.constants.is-final);

public
const
[int](language.types.integer.md)
[ReflectionClass::IS\_READONLY](class.reflectionclass.md#reflectionclass.constants.is-readonly);

public
const
[int](language.types.integer.md)
[ReflectionClass::SKIP\_INITIALIZATION\_ON\_SERIALIZE](class.reflectionclass.md#reflectionclass.constants.skip-initialization-on-serialize);

public
const
[int](language.types.integer.md)
[ReflectionClass::SKIP\_DESTRUCTOR](class.reflectionclass.md#reflectionclass.constants.skip-destructor);

/\* Propriedades herdadas \*/

public
[string](language.types.string.md)
[$name](class.reflectionclass.md#reflectionclass.props.name);

/\* Métodos \*/

public function [\_\_construct](reflectionenum.construct.md)([object](language.types.object.md)|[string](language.types.string.md) `$objectOrClass`)

public function [getBackingType](reflectionenum.getbackingtype.md)(): [?](language.types.null.md)[ReflectionNamedType](class.reflectionnamedtype.md)

public function [getCase](reflectionenum.getcase.md)([string](language.types.string.md) `$name`): [ReflectionEnumUnitCase](class.reflectionenumunitcase.md)

public function [getCases](reflectionenum.getcases.md)(): [array](language.types.array.md)

public function [hasCase](reflectionenum.hascase.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [isBacked](reflectionenum.isbacked.md)(): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public static function [ReflectionClass::export](reflectionclass.export.md)([mixed](language.types.mixed.md) `$argument`, [bool](language.types.boolean.md) `$return` = **`false`**): [string](language.types.string.md)

public function [ReflectionClass::getAttributes](reflectionclass.getattributes.md)([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

public function [ReflectionClass::getConstant](reflectionclass.getconstant.md)([string](language.types.string.md) `$name`): [mixed](language.types.mixed.md)

public function [ReflectionClass::getConstants](reflectionclass.getconstants.md)([?](language.types.null.md)[int](language.types.integer.md) `$filter` = **`null`**): [array](language.types.array.md)

public function [ReflectionClass::getConstructor](reflectionclass.getconstructor.md)(): [?](language.types.null.md)[ReflectionMethod](class.reflectionmethod.md)

public function [ReflectionClass::getDefaultProperties](reflectionclass.getdefaultproperties.md)(): [array](language.types.array.md)

public function [ReflectionClass::getDocComment](reflectionclass.getdoccomment.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [ReflectionClass::getEndLine](reflectionclass.getendline.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [ReflectionClass::getExtension](reflectionclass.getextension.md)(): [?](language.types.null.md)[ReflectionExtension](class.reflectionextension.md)

public function [ReflectionClass::getExtensionName](reflectionclass.getextensionname.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [ReflectionClass::getFileName](reflectionclass.getfilename.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [ReflectionClass::getInterfaceNames](reflectionclass.getinterfacenames.md)(): [array](language.types.array.md)

public function [ReflectionClass::getInterfaces](reflectionclass.getinterfaces.md)(): [array](language.types.array.md)

public function [ReflectionClass::getLazyInitializer](reflectionclass.getlazyinitializer.md)([object](language.types.object.md) `$object`): [?](language.types.null.md)[callable](language.types.callable.md)

public function [ReflectionClass::getMethod](reflectionclass.getmethod.md)([string](language.types.string.md) `$name`): [ReflectionMethod](class.reflectionmethod.md)

public function [ReflectionClass::getMethods](reflectionclass.getmethods.md)([?](language.types.null.md)[int](language.types.integer.md) `$filter` = **`null`**): [array](language.types.array.md)

public function [ReflectionClass::getModifiers](reflectionclass.getmodifiers.md)(): [int](language.types.integer.md)

public function [ReflectionClass::getName](reflectionclass.getname.md)(): [string](language.types.string.md)

public function [ReflectionClass::getNamespaceName](reflectionclass.getnamespacename.md)(): [string](language.types.string.md)

public function [ReflectionClass::getParentClass](reflectionclass.getparentclass.md)(): [ReflectionClass](class.reflectionclass.md)|[false](language.types.singleton.md)

public function [ReflectionClass::getProperties](reflectionclass.getproperties.md)([?](language.types.null.md)[int](language.types.integer.md) `$filter` = **`null`**): [array](language.types.array.md)

public function [ReflectionClass::getProperty](reflectionclass.getproperty.md)([string](language.types.string.md) `$name`): [ReflectionProperty](class.reflectionproperty.md)

public function [ReflectionClass::getReflectionConstant](reflectionclass.getreflectionconstant.md)([string](language.types.string.md) `$name`): [ReflectionClassConstant](class.reflectionclassconstant.md)|[false](language.types.singleton.md)

public function [ReflectionClass::getReflectionConstants](reflectionclass.getreflectionconstants.md)([?](language.types.null.md)[int](language.types.integer.md) `$filter` = **`null`**): [array](language.types.array.md)

public function [ReflectionClass::getShortName](reflectionclass.getshortname.md)(): [string](language.types.string.md)

public function [ReflectionClass::getStartLine](reflectionclass.getstartline.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [ReflectionClass::getStaticProperties](reflectionclass.getstaticproperties.md)(): [array](language.types.array.md)

public function [ReflectionClass::getStaticPropertyValue](reflectionclass.getstaticpropertyvalue.md)([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `&$default` = ?): [mixed](language.types.mixed.md)

public function [ReflectionClass::getTraitAliases](reflectionclass.gettraitaliases.md)(): [array](language.types.array.md)

public function [ReflectionClass::getTraitNames](reflectionclass.gettraitnames.md)(): [array](language.types.array.md)

public function [ReflectionClass::getTraits](reflectionclass.gettraits.md)(): [array](language.types.array.md)

public function [ReflectionClass::hasConstant](reflectionclass.hasconstant.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [ReflectionClass::hasMethod](reflectionclass.hasmethod.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [ReflectionClass::hasProperty](reflectionclass.hasproperty.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [ReflectionClass::implementsInterface](reflectionclass.implementsinterface.md)([ReflectionClass](class.reflectionclass.md)|[string](language.types.string.md) `$interface`): [bool](language.types.boolean.md)

public function [ReflectionClass::initializeLazyObject](reflectionclass.initializelazyobject.md)([object](language.types.object.md) `$object`): [object](language.types.object.md)

public function [ReflectionClass::inNamespace](reflectionclass.innamespace.md)(): [bool](language.types.boolean.md)

public function [ReflectionClass::isAbstract](reflectionclass.isabstract.md)(): [bool](language.types.boolean.md)

public function [ReflectionClass::isAnonymous](reflectionclass.isanonymous.md)(): [bool](language.types.boolean.md)

public function [ReflectionClass::isCloneable](reflectionclass.iscloneable.md)(): [bool](language.types.boolean.md)

public function [ReflectionClass::isEnum](reflectionclass.isenum.md)(): [bool](language.types.boolean.md)

public function [ReflectionClass::isFinal](reflectionclass.isfinal.md)(): [bool](language.types.boolean.md)

public function [ReflectionClass::isInstance](reflectionclass.isinstance.md)([object](language.types.object.md) `$object`): [bool](language.types.boolean.md)

public function [ReflectionClass::isInstantiable](reflectionclass.isinstantiable.md)(): [bool](language.types.boolean.md)

public function [ReflectionClass::isInterface](reflectionclass.isinterface.md)(): [bool](language.types.boolean.md)

public function [ReflectionClass::isInternal](reflectionclass.isinternal.md)(): [bool](language.types.boolean.md)

public function [ReflectionClass::isIterable](reflectionclass.isiterable.md)(): [bool](language.types.boolean.md)

public function [ReflectionClass::isReadOnly](reflectionclass.isreadonly.md)(): [bool](language.types.boolean.md)

public function [ReflectionClass::isSubclassOf](reflectionclass.issubclassof.md)([ReflectionClass](class.reflectionclass.md)|[string](language.types.string.md) `$class`): [bool](language.types.boolean.md)

public function [ReflectionClass::isTrait](reflectionclass.istrait.md)(): [bool](language.types.boolean.md)

public function [ReflectionClass::isUninitializedLazyObject](reflectionclass.isuninitializedlazyobject.md)([object](language.types.object.md) `$object`): [bool](language.types.boolean.md)

public function [ReflectionClass::isUserDefined](reflectionclass.isuserdefined.md)(): [bool](language.types.boolean.md)

public function [ReflectionClass::markLazyObjectAsInitialized](reflectionclass.marklazyobjectasinitialized.md)([object](language.types.object.md) `$object`): [object](language.types.object.md)

public function [ReflectionClass::newInstance](reflectionclass.newinstance.md)([mixed](language.types.mixed.md) `...$args`): [object](language.types.object.md)

public function [ReflectionClass::newInstanceArgs](reflectionclass.newinstanceargs.md)([array](language.types.array.md) `$args` = []): [?](language.types.null.md)[object](language.types.object.md)

public function [ReflectionClass::newInstanceWithoutConstructor](reflectionclass.newinstancewithoutconstructor.md)(): [object](language.types.object.md)

public function [ReflectionClass::newLazyGhost](reflectionclass.newlazyghost.md)([callable](language.types.callable.md) `$initializer`, [int](language.types.integer.md) `$options` = 0): [object](language.types.object.md)

public function [ReflectionClass::newLazyProxy](reflectionclass.newlazyproxy.md)([callable](language.types.callable.md) `$factory`, [int](language.types.integer.md) `$options` = 0): [object](language.types.object.md)

public function [ReflectionClass::resetAsLazyGhost](reflectionclass.resetaslazyghost.md)([object](language.types.object.md) `$object`, [callable](language.types.callable.md) `$initializer`, [int](language.types.integer.md) `$options` = 0): [void](language.types.void.md)

public function [ReflectionClass::resetAsLazyProxy](reflectionclass.resetaslazyproxy.md)([object](language.types.object.md) `$object`, [callable](language.types.callable.md) `$factory`, [int](language.types.integer.md) `$options` = 0): [void](language.types.void.md)

public function [ReflectionClass::setStaticPropertyValue](reflectionclass.setstaticpropertyvalue.md)([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [ReflectionClass::\_\_toString](reflectionclass.tostring.md)(): [string](language.types.string.md)

}

## Veja também

- [Enumerações](language.enumerations.md)

## Índice

- [ReflectionEnum::\_\_construct](reflectionenum.construct.md) — Instancia um objeto ReflectionEnum
- [ReflectionEnum::getBackingType](reflectionenum.getbackingtype.md) — Obtém o tipo de apoio de um Enum, se houver
- [ReflectionEnum::getCase](reflectionenum.getcase.md) — Retorna um caso específico de um Enum
- [ReflectionEnum::getCases](reflectionenum.getcases.md) — Retorna uma lista de todos os casos em um Enum
- [ReflectionEnum::hasCase](reflectionenum.hascase.md) — Verifica um caso em um Enum
- [ReflectionEnum::isBacked](reflectionenum.isbacked.md) — Determina se um Enum é um Backed Enum

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
