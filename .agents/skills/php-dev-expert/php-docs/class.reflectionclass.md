# Classe ReflectionClass

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionclass.php

---

# Classe ReflectionClass

(PHP 5, PHP 7, PHP 8)

## Introdução

Classe **ReflectionClass**reporta
informações sobre uma classe.

## Resumo da classe

class ****ReflectionClass****
implements
[Reflector](class.reflector.md) {

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[IS\_IMPLICIT\_ABSTRACT](class.reflectionclass.md#reflectionclass.constants.is-implicit-abstract);

public
const
[int](language.types.integer.md)
[IS\_EXPLICIT\_ABSTRACT](class.reflectionclass.md#reflectionclass.constants.is-explicit-abstract);

public
const
[int](language.types.integer.md)
[IS\_FINAL](class.reflectionclass.md#reflectionclass.constants.is-final);

public
const
[int](language.types.integer.md)
[IS\_READONLY](class.reflectionclass.md#reflectionclass.constants.is-readonly);

public
const
[int](language.types.integer.md)
[SKIP\_INITIALIZATION\_ON\_SERIALIZE](class.reflectionclass.md#reflectionclass.constants.skip-initialization-on-serialize);

public
const
[int](language.types.integer.md)
[SKIP\_DESTRUCTOR](class.reflectionclass.md#reflectionclass.constants.skip-destructor);

/\* Propriedades \*/

public
[string](language.types.string.md)
[$name](class.reflectionclass.md#reflectionclass.props.name);

/\* Métodos \*/

public function [\_\_construct](reflectionclass.construct.md)([object](language.types.object.md)|[string](language.types.string.md) `$objectOrClass`)

public static function [export](reflectionclass.export.md)([mixed](language.types.mixed.md) `$argument`, [bool](language.types.boolean.md) `$return` = **`false`**): [string](language.types.string.md)

public function [getAttributes](reflectionclass.getattributes.md)([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

public function [getConstant](reflectionclass.getconstant.md)([string](language.types.string.md) `$name`): [mixed](language.types.mixed.md)

public function [getConstants](reflectionclass.getconstants.md)([?](language.types.null.md)[int](language.types.integer.md) `$filter` = **`null`**): [array](language.types.array.md)

public function [getConstructor](reflectionclass.getconstructor.md)(): [?](language.types.null.md)[ReflectionMethod](class.reflectionmethod.md)

public function [getDefaultProperties](reflectionclass.getdefaultproperties.md)(): [array](language.types.array.md)

public function [getDocComment](reflectionclass.getdoccomment.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getEndLine](reflectionclass.getendline.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getExtension](reflectionclass.getextension.md)(): [?](language.types.null.md)[ReflectionExtension](class.reflectionextension.md)

public function [getExtensionName](reflectionclass.getextensionname.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getFileName](reflectionclass.getfilename.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getInterfaceNames](reflectionclass.getinterfacenames.md)(): [array](language.types.array.md)

public function [getInterfaces](reflectionclass.getinterfaces.md)(): [array](language.types.array.md)

public function [getLazyInitializer](reflectionclass.getlazyinitializer.md)([object](language.types.object.md) `$object`): [?](language.types.null.md)[callable](language.types.callable.md)

public function [getMethod](reflectionclass.getmethod.md)([string](language.types.string.md) `$name`): [ReflectionMethod](class.reflectionmethod.md)

public function [getMethods](reflectionclass.getmethods.md)([?](language.types.null.md)[int](language.types.integer.md) `$filter` = **`null`**): [array](language.types.array.md)

public function [getModifiers](reflectionclass.getmodifiers.md)(): [int](language.types.integer.md)

public function [getName](reflectionclass.getname.md)(): [string](language.types.string.md)

public function [getNamespaceName](reflectionclass.getnamespacename.md)(): [string](language.types.string.md)

public function [getParentClass](reflectionclass.getparentclass.md)(): [ReflectionClass](class.reflectionclass.md)|[false](language.types.singleton.md)

public function [getProperties](reflectionclass.getproperties.md)([?](language.types.null.md)[int](language.types.integer.md) `$filter` = **`null`**): [array](language.types.array.md)

public function [getProperty](reflectionclass.getproperty.md)([string](language.types.string.md) `$name`): [ReflectionProperty](class.reflectionproperty.md)

public function [getReflectionConstant](reflectionclass.getreflectionconstant.md)([string](language.types.string.md) `$name`): [ReflectionClassConstant](class.reflectionclassconstant.md)|[false](language.types.singleton.md)

public function [getReflectionConstants](reflectionclass.getreflectionconstants.md)([?](language.types.null.md)[int](language.types.integer.md) `$filter` = **`null`**): [array](language.types.array.md)

public function [getShortName](reflectionclass.getshortname.md)(): [string](language.types.string.md)

public function [getStartLine](reflectionclass.getstartline.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getStaticProperties](reflectionclass.getstaticproperties.md)(): [array](language.types.array.md)

public function [getStaticPropertyValue](reflectionclass.getstaticpropertyvalue.md)([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `&$default` = ?): [mixed](language.types.mixed.md)

public function [getTraitAliases](reflectionclass.gettraitaliases.md)(): [array](language.types.array.md)

public function [getTraitNames](reflectionclass.gettraitnames.md)(): [array](language.types.array.md)

public function [getTraits](reflectionclass.gettraits.md)(): [array](language.types.array.md)

public function [hasConstant](reflectionclass.hasconstant.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [hasMethod](reflectionclass.hasmethod.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [hasProperty](reflectionclass.hasproperty.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [implementsInterface](reflectionclass.implementsinterface.md)([ReflectionClass](class.reflectionclass.md)|[string](language.types.string.md) `$interface`): [bool](language.types.boolean.md)

public function [initializeLazyObject](reflectionclass.initializelazyobject.md)([object](language.types.object.md) `$object`): [object](language.types.object.md)

public function [inNamespace](reflectionclass.innamespace.md)(): [bool](language.types.boolean.md)

public function [isAbstract](reflectionclass.isabstract.md)(): [bool](language.types.boolean.md)

public function [isAnonymous](reflectionclass.isanonymous.md)(): [bool](language.types.boolean.md)

public function [isCloneable](reflectionclass.iscloneable.md)(): [bool](language.types.boolean.md)

public function [isEnum](reflectionclass.isenum.md)(): [bool](language.types.boolean.md)

public function [isFinal](reflectionclass.isfinal.md)(): [bool](language.types.boolean.md)

public function [isInstance](reflectionclass.isinstance.md)([object](language.types.object.md) `$object`): [bool](language.types.boolean.md)

public function [isInstantiable](reflectionclass.isinstantiable.md)(): [bool](language.types.boolean.md)

public function [isInterface](reflectionclass.isinterface.md)(): [bool](language.types.boolean.md)

public function [isInternal](reflectionclass.isinternal.md)(): [bool](language.types.boolean.md)

public function [isIterable](reflectionclass.isiterable.md)(): [bool](language.types.boolean.md)

public function [isReadOnly](reflectionclass.isreadonly.md)(): [bool](language.types.boolean.md)

public function [isSubclassOf](reflectionclass.issubclassof.md)([ReflectionClass](class.reflectionclass.md)|[string](language.types.string.md) `$class`): [bool](language.types.boolean.md)

public function [isTrait](reflectionclass.istrait.md)(): [bool](language.types.boolean.md)

public function [isUninitializedLazyObject](reflectionclass.isuninitializedlazyobject.md)([object](language.types.object.md) `$object`): [bool](language.types.boolean.md)

public function [isUserDefined](reflectionclass.isuserdefined.md)(): [bool](language.types.boolean.md)

public function [markLazyObjectAsInitialized](reflectionclass.marklazyobjectasinitialized.md)([object](language.types.object.md) `$object`): [object](language.types.object.md)

public function [newInstance](reflectionclass.newinstance.md)([mixed](language.types.mixed.md) `...$args`): [object](language.types.object.md)

public function [newInstanceArgs](reflectionclass.newinstanceargs.md)([array](language.types.array.md) `$args` = []): [?](language.types.null.md)[object](language.types.object.md)

public function [newInstanceWithoutConstructor](reflectionclass.newinstancewithoutconstructor.md)(): [object](language.types.object.md)

public function [newLazyGhost](reflectionclass.newlazyghost.md)([callable](language.types.callable.md) `$initializer`, [int](language.types.integer.md) `$options` = 0): [object](language.types.object.md)

public function [newLazyProxy](reflectionclass.newlazyproxy.md)([callable](language.types.callable.md) `$factory`, [int](language.types.integer.md) `$options` = 0): [object](language.types.object.md)

public function [resetAsLazyGhost](reflectionclass.resetaslazyghost.md)([object](language.types.object.md) `$object`, [callable](language.types.callable.md) `$initializer`, [int](language.types.integer.md) `$options` = 0): [void](language.types.void.md)

public function [resetAsLazyProxy](reflectionclass.resetaslazyproxy.md)([object](language.types.object.md) `$object`, [callable](language.types.callable.md) `$factory`, [int](language.types.integer.md) `$options` = 0): [void](language.types.void.md)

public function [setStaticPropertyValue](reflectionclass.setstaticpropertyvalue.md)([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [\_\_toString](reflectionclass.tostring.md)(): [string](language.types.string.md)

}

## Propriedades

name
:   Nome da classe. Apenas leitura, gera
    [ReflectionException](class.reflectionexception.md) na tentativa de escrita.

## Constantes predefinidas

## Modificadores ReflectionClass

**`ReflectionClass::IS_IMPLICIT_ABSTRACT`** [int](language.types.integer.md)
:   Indica que a classe é [abstrata](language.oop5.abstract.md) pois possui alguns métodos abstratos.

**`ReflectionClass::IS_EXPLICIT_ABSTRACT`** [int](language.types.integer.md)
:   Indica que a classe é [abstrata](language.oop5.abstract.md) por causa da sua definição.

**`ReflectionClass::IS_FINAL`** [int](language.types.integer.md)
:   Indica que a classe é [final](language.oop5.final.md).

**`ReflectionClass::IS_READONLY`** [int](language.types.integer.md)
:   Indica que a classe é [readonly](language.oop5.basic.md#language.oop5.basic.class.readonly).

**`ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE`** [int](language.types.integer.md)
:   Indica que [serialize()](function.serialize.md) não deve disparar
    a inicialização de um objeto lento.

**`ReflectionClass::SKIP_DESTRUCTOR`** [int](language.types.integer.md)
:   Indica que um destrutor de objeto não deve ser chamado ao redefini-lo como
    lento.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |
| 8.0.0 | [ReflectionClass::export()](reflectionclass.export.md) foi removida. |

## Índice

- [ReflectionClass::\_\_construct](reflectionclass.construct.md) — Constrói uma ReflectionClass
- [ReflectionClass::export](reflectionclass.export.md) — Exporta uma classe
- [ReflectionClass::getAttributes](reflectionclass.getattributes.md) — Obtém atributos
- [ReflectionClass::getConstant](reflectionclass.getconstant.md) — Obtém uma constante definida
- [ReflectionClass::getConstants](reflectionclass.getconstants.md) — Obtém constantes
- [ReflectionClass::getConstructor](reflectionclass.getconstructor.md) — Obtém o construtor da classe
- [ReflectionClass::getDefaultProperties](reflectionclass.getdefaultproperties.md) — Obtém propriedades padrão
- [ReflectionClass::getDocComment](reflectionclass.getdoccomment.md) — Obtém comentários doc
- [ReflectionClass::getEndLine](reflectionclass.getendline.md) — Obtém a linha final
- [ReflectionClass::getExtension](reflectionclass.getextension.md) — Obtém um objeto ReflectionExtension para a extensão que definiu a classe
- [ReflectionClass::getExtensionName](reflectionclass.getextensionname.md) — Obtém o nome da extensão que definiu a classe
- [ReflectionClass::getFileName](reflectionclass.getfilename.md) — Obtém o nome do arquivo no qual a classe foi definida
- [ReflectionClass::getInterfaceNames](reflectionclass.getinterfacenames.md) — Obtém os nomes das interfaces
- [ReflectionClass::getInterfaces](reflectionclass.getinterfaces.md) — Obtém as interfaces
- [ReflectionClass::getLazyInitializer](reflectionclass.getlazyinitializer.md) — Obtém o inicializador lento
- [ReflectionClass::getMethod](reflectionclass.getmethod.md) — Obtém um ReflectionMethod para um método de classe
- [ReflectionClass::getMethods](reflectionclass.getmethods.md) — Obtém um array de métodos
- [ReflectionClass::getModifiers](reflectionclass.getmodifiers.md) — Obtém os modificadores de classe
- [ReflectionClass::getName](reflectionclass.getname.md) — Obtém o nome da classe
- [ReflectionClass::getNamespaceName](reflectionclass.getnamespacename.md) — Obtém o nome do namespace
- [ReflectionClass::getParentClass](reflectionclass.getparentclass.md) — Obtém a classe pai
- [ReflectionClass::getProperties](reflectionclass.getproperties.md) — Obtém propriedades
- [ReflectionClass::getProperty](reflectionclass.getproperty.md) — Obtém um ReflectionProperty para a propriedade de uma classe
- [ReflectionClass::getReflectionConstant](reflectionclass.getreflectionconstant.md) — Obtém um ReflectionClassConstant para a constante de uma classe
- [ReflectionClass::getReflectionConstants](reflectionclass.getreflectionconstants.md) — Obtém constantes de classe
- [ReflectionClass::getShortName](reflectionclass.getshortname.md) — Obtém o nome curto
- [ReflectionClass::getStartLine](reflectionclass.getstartline.md) — Obtém o número da linha inicial
- [ReflectionClass::getStaticProperties](reflectionclass.getstaticproperties.md) — Obtém propriedades estáticas
- [ReflectionClass::getStaticPropertyValue](reflectionclass.getstaticpropertyvalue.md) — Obtém o valor da propriedade estática
- [ReflectionClass::getTraitAliases](reflectionclass.gettraitaliases.md) — RRetorna um array de aliases de trait
- [ReflectionClass::getTraitNames](reflectionclass.gettraitnames.md) — Retorna um array de nomes de traits usadas por esta classe
- [ReflectionClass::getTraits](reflectionclass.gettraits.md) — Retorna um array de traits usadas por esta classe
- [ReflectionClass::hasConstant](reflectionclass.hasconstant.md) — Verifica se a constante está definida
- [ReflectionClass::hasMethod](reflectionclass.hasmethod.md) — Verifica se o método está definido
- [ReflectionClass::hasProperty](reflectionclass.hasproperty.md) — Verifica se a propriedade está definida
- [ReflectionClass::implementsInterface](reflectionclass.implementsinterface.md) — Implementa interface
- [ReflectionClass::initializeLazyObject](reflectionclass.initializelazyobject.md) — Força a inicialização de um objeto lento
- [ReflectionClass::inNamespace](reflectionclass.innamespace.md) — Verifica se está no namespace
- [ReflectionClass::isAbstract](reflectionclass.isabstract.md) — Verifica se a classe é abstrata
- [ReflectionClass::isAnonymous](reflectionclass.isanonymous.md) — Verifica se uma classe é anônima
- [ReflectionClass::isCloneable](reflectionclass.iscloneable.md) — Retorna se esta classe é clonável
- [ReflectionClass::isEnum](reflectionclass.isenum.md) — Retorna se esta é um enum
- [ReflectionClass::isFinal](reflectionclass.isfinal.md) — Verifica se a classe é final
- [ReflectionClass::isInstance](reflectionclass.isinstance.md) — Verifica a classe por instância
- [ReflectionClass::isInstantiable](reflectionclass.isinstantiable.md) — Verifica se a classe é instanciável
- [ReflectionClass::isInterface](reflectionclass.isinterface.md) — Verifica se a classe é uma interface
- [ReflectionClass::isInternal](reflectionclass.isinternal.md) — Verifica se a classe está definida internamente por uma extensão ou pelo núcleo
- [ReflectionClass::isIterable](reflectionclass.isiterable.md) — Verifica se esta classe é iterável
- [ReflectionClass::isIterateable](reflectionclass.isiterateable.md) — Sinônimo de ReflectionClass::isIterable
- [ReflectionClass::isReadOnly](reflectionclass.isreadonly.md) — Verifica se a classe é somente leitura
- [ReflectionClass::isSubclassOf](reflectionclass.issubclassof.md) — Verifica se é uma subclasse
- [ReflectionClass::isTrait](reflectionclass.istrait.md) — Retorna se esta é uma trait
- [ReflectionClass::isUninitializedLazyObject](reflectionclass.isuninitializedlazyobject.md) — Verifica se um objeto é lento e não inicializado
- [ReflectionClass::isUserDefined](reflectionclass.isuserdefined.md) — Verifica se foi definida pelo usuário
- [ReflectionClass::markLazyObjectAsInitialized](reflectionclass.marklazyobjectasinitialized.md) — Marca um objeto lento como inicializado sem chamar o inicializador ou a fábrica
- [ReflectionClass::newInstance](reflectionclass.newinstance.md) — Cria uma nova instância de classe a partir de determinados argumentos
- [ReflectionClass::newInstanceArgs](reflectionclass.newinstanceargs.md) — Cria uma nova instância de classe a partir de determinados argumentos
- [ReflectionClass::newInstanceWithoutConstructor](reflectionclass.newinstancewithoutconstructor.md) — Cria uma nova instância de classe sem invocar o construtor
- [ReflectionClass::newLazyGhost](reflectionclass.newlazyghost.md) — Cria uma nova instância de fantasma lento
- [ReflectionClass::newLazyProxy](reflectionclass.newlazyproxy.md) — Cria uma nova instância de proxy lento
- [ReflectionClass::resetAsLazyGhost](reflectionclass.resetaslazyghost.md) — Redefine um objeto e o marca como lento
- [ReflectionClass::resetAsLazyProxy](reflectionclass.resetaslazyproxy.md) — Redefine um objeto e o marca como lento
- [ReflectionClass::setStaticPropertyValue](reflectionclass.setstaticpropertyvalue.md) — Define o valor da propriedade estática pública
- [ReflectionClass::\_\_toString](reflectionclass.tostring.md) — Retorna a representação em string do objeto ReflectionClass

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
