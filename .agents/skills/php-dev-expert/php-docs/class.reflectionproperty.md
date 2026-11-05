# A classe ReflectionProperty

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionproperty.php

---

# A classe ReflectionProperty

(PHP 5, PHP 7, PHP 8)

## Introdução

A classe **ReflectionProperty** relata
informações sobre as propriedades de uma classe.

## Resumo da classe

class ****ReflectionProperty****
implements
[Reflector](class.reflector.md) {

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[IS\_STATIC](class.reflectionproperty.md#reflectionproperty.constants.is-static);

public
const
[int](language.types.integer.md)
[IS\_READONLY](class.reflectionproperty.md#reflectionproperty.constants.is-readonly);

public
const
[int](language.types.integer.md)
[IS\_PUBLIC](class.reflectionproperty.md#reflectionproperty.constants.is-public);

public
const
[int](language.types.integer.md)
[IS\_PROTECTED](class.reflectionproperty.md#reflectionproperty.constants.is-protected);

public
const
[int](language.types.integer.md)
[IS\_PRIVATE](class.reflectionproperty.md#reflectionproperty.constants.is-private);

public
const
[int](language.types.integer.md)
[IS\_ABSTRACT](class.reflectionproperty.md#reflectionproperty.constants.is-abstract);

public
const
[int](language.types.integer.md)
[IS\_PROTECTED\_SET](class.reflectionproperty.md#reflectionproperty.constants.is-protected-set);

public
const
[int](language.types.integer.md)
[IS\_PRIVATE\_SET](class.reflectionproperty.md#reflectionproperty.constants.is-private-set);

public
const
[int](language.types.integer.md)
[IS\_VIRTUAL](class.reflectionproperty.md#reflectionproperty.constants.is-virtual);

public
const
[int](language.types.integer.md)
[IS\_FINAL](class.reflectionproperty.md#reflectionproperty.constants.is-final);

/\* Propriedades \*/

public
[string](language.types.string.md)
[$name](class.reflectionproperty.md#reflectionproperty.props.name);

public
[string](language.types.string.md)
[$class](class.reflectionproperty.md#reflectionproperty.props.class);

/\* Métodos \*/

public function [\_\_construct](reflectionproperty.construct.md)([object](language.types.object.md)|[string](language.types.string.md) `$class`, [string](language.types.string.md) `$property`)

private function [\_\_clone](reflectionproperty.clone.md)(): [void](language.types.void.md)

public static function [export](reflectionproperty.export.md)([mixed](language.types.mixed.md) `$class`, [string](language.types.string.md) `$name`, [bool](language.types.boolean.md) `$return` = ?): [string](language.types.string.md)

public function [getAttributes](reflectionproperty.getattributes.md)([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

public function [getDeclaringClass](reflectionproperty.getdeclaringclass.md)(): [ReflectionClass](class.reflectionclass.md)

public function [getDefaultValue](reflectionproperty.getdefaultvalue.md)(): [mixed](language.types.mixed.md)

public function [getDocComment](reflectionproperty.getdoccomment.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getHook](reflectionproperty.gethook.md)([PropertyHookType](enum.propertyhooktype.md) `$type`): [?](language.types.null.md)[ReflectionMethod](class.reflectionmethod.md)

public function [getHooks](reflectionproperty.gethooks.md)(): [array](language.types.array.md)

public function [getMangledName](reflectionproperty.getmangledname.md)(): [string](language.types.string.md)

public function [getModifiers](reflectionproperty.getmodifiers.md)(): [int](language.types.integer.md)

public function [getName](reflectionproperty.getname.md)(): [string](language.types.string.md)

public function [getRawValue](reflectionproperty.getrawvalue.md)([object](language.types.object.md) `$object`): [mixed](language.types.mixed.md)

public function [getSettableType](reflectionproperty.getsettabletype.md)(): [?](language.types.null.md)[ReflectionType](class.reflectiontype.md)

public function [getType](reflectionproperty.gettype.md)(): [?](language.types.null.md)[ReflectionType](class.reflectiontype.md)

public function [getValue](reflectionproperty.getvalue.md)([?](language.types.null.md)[object](language.types.object.md) `$object` = **`null`**): [mixed](language.types.mixed.md)

public function [hasDefaultValue](reflectionproperty.hasdefaultvalue.md)(): [bool](language.types.boolean.md)

public function [hasHook](reflectionproperty.hashook.md)([PropertyHookType](enum.propertyhooktype.md) `$type`): [bool](language.types.boolean.md)

public function [hasHooks](reflectionproperty.hashooks.md)(): [bool](language.types.boolean.md)

public function [hasType](reflectionproperty.hastype.md)(): [bool](language.types.boolean.md)

public function [isAbstract](reflectionproperty.isabstract.md)(): [bool](language.types.boolean.md)

public function [isDefault](reflectionproperty.isdefault.md)(): [bool](language.types.boolean.md)

public function [isDynamic](reflectionproperty.isdynamic.md)(): [bool](language.types.boolean.md)

public function [isFinal](reflectionproperty.isfinal.md)(): [bool](language.types.boolean.md)

public function [isInitialized](reflectionproperty.isinitialized.md)([?](language.types.null.md)[object](language.types.object.md) `$object` = **`null`**): [bool](language.types.boolean.md)

public function [isLazy](reflectionproperty.islazy.md)([object](language.types.object.md) `$object`): [bool](language.types.boolean.md)

public function [isPrivate](reflectionproperty.isprivate.md)(): [bool](language.types.boolean.md)

public function [isPrivateSet](reflectionproperty.isprivateset.md)(): [bool](language.types.boolean.md)

public function [isPromoted](reflectionproperty.ispromoted.md)(): [bool](language.types.boolean.md)

public function [isProtected](reflectionproperty.isprotected.md)(): [bool](language.types.boolean.md)

public function [isProtectedSet](reflectionproperty.isprotectedset.md)(): [bool](language.types.boolean.md)

public function [isPublic](reflectionproperty.ispublic.md)(): [bool](language.types.boolean.md)

public function [isReadOnly](reflectionproperty.isreadonly.md)(): [bool](language.types.boolean.md)

public function [isStatic](reflectionproperty.isstatic.md)(): [bool](language.types.boolean.md)

public function [isVirtual](reflectionproperty.isvirtual.md)(): [bool](language.types.boolean.md)

#[[\Deprecated](class.deprecated.md)]  
public function [setAccessible](reflectionproperty.setaccessible.md)([bool](language.types.boolean.md) `$accessible`): [void](language.types.void.md)

public function [setRawValue](reflectionproperty.setrawvalue.md)([object](language.types.object.md) `$object`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [setRawValueWithoutLazyInitialization](reflectionproperty.setrawvaluewithoutlazyinitialization.md)([object](language.types.object.md) `$object`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [setValue](reflectionproperty.setvalue.md)([?](language.types.null.md)[object](language.types.object.md) `$object`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [skipLazyInitialization](reflectionproperty.skiplazyinitialization.md)([object](language.types.object.md) `$object`): [void](language.types.void.md)

public function [\_\_toString](reflectionproperty.tostring.md)(): [string](language.types.string.md)

}

## Propriedades

name
:   Nome da propriedade. Somente leitura, lança
    [ReflectionException](class.reflectionexception.md) ao tentar escrever.

class
:   Nome da classe onde a propriedade está definida. Somente leitura, lança
    [ReflectionException](class.reflectionexception.md) ao tentar escrever.

## Constantes predefinidas

## Modificadores de ReflectionProperty

**`ReflectionProperty::IS_STATIC`** [int](language.types.integer.md)
:   Indica propriedades [estáticas](language.oop5.static.md).
    Antes do PHP 7.4.0, o valor era
    `1`.

**`ReflectionProperty::IS_READONLY`** [int](language.types.integer.md)
:   Indica propriedades [somente leitura](language.oop5.properties.md#language.oop5.properties.readonly-properties).
    Disponível a partir do PHP 8.1.0.

**`ReflectionProperty::IS_PUBLIC`** [int](language.types.integer.md)
:   Indica propriedades [públicas](language.oop5.visibility.md).
    Antes do PHP 7.4.0, o valor era
    `256`.

**`ReflectionProperty::IS_PROTECTED`** [int](language.types.integer.md)
:   Indica propriedades [protegidas](language.oop5.visibility.md).
    Antes do PHP 7.4.0, o valor era
    `512`.

**`ReflectionProperty::IS_PRIVATE`** [int](language.types.integer.md)
:   Indica propriedades [privadas](language.oop5.visibility.md).
    Antes do PHP 7.4.0, o valor era
    `1024`.

**`ReflectionProperty::IS_ABSTRACT`** [int](language.types.integer.md)
:   Indica que a propriedade é
    [abstrata](language.oop5.abstract.md).
    Disponível a partir do PHP 8.4.0.

**`ReflectionProperty::IS_PROTECTED_SET`** [int](language.types.integer.md)
:   Disponível a partir do PHP 8.4.0.

**`ReflectionProperty::IS_PRIVATE_SET`** [int](language.types.integer.md)
:   Disponível a partir do PHP 8.4.0.

**`ReflectionProperty::IS_VIRTUAL`** [int](language.types.integer.md)
:   Disponível a partir do PHP 8.4.0.

**`ReflectionProperty::IS_FINAL`** [int](language.types.integer.md)
:   Indica que a propriedade é
    [final](language.oop5.final.md).
    Disponível a partir do PHP 8.4.0.

> **Nota**:
>
> Os valores dessas constantes podem mudar entre as versões do PHP.
> É recomendável sempre usar as constantes
> e não depender dos valores diretamente.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |
| 8.4.0 | Adicionadas **`ReflectionProperty::IS_VIRTUAL`**, **`ReflectionProperty::IS_PRIVATE_SET`**, **`ReflectionProperty::IS_PROTECTED_SET`**, **`ReflectionProperty::IS_ABSTRACT`**, e **`ReflectionProperty::IS_FINAL`**. |
| 8.0.0 | [ReflectionProperty::export()](reflectionproperty.export.md) foi removido. |

## Índice

- [ReflectionProperty::\_\_clone](reflectionproperty.clone.md) — Clone
- [ReflectionProperty::\_\_construct](reflectionproperty.construct.md) — Constrói um objeto ReflectionProperty
- [ReflectionProperty::export](reflectionproperty.export.md) — Exporta
- [ReflectionProperty::getAttributes](reflectionproperty.getattributes.md) — Obtém atributos
- [ReflectionProperty::getDeclaringClass](reflectionproperty.getdeclaringclass.md) — Obtém a classe declarada
- [ReflectionProperty::getDefaultValue](reflectionproperty.getdefaultvalue.md) — Retorna o valor padrão declarado para uma propriedade
- [ReflectionProperty::getDocComment](reflectionproperty.getdoccomment.md) — Obtém o comentário doc da propriedade
- [ReflectionProperty::getHook](reflectionproperty.gethook.md) — Retorna um objeto de reflexão para um gancho especificado
- [ReflectionProperty::getHooks](reflectionproperty.gethooks.md) — Retorna um array de todos os ganchos nesta propriedade
- [ReflectionProperty::getMangledName](reflectionproperty.getmangledname.md) — Obtém o nome codificado da propriedade
- [ReflectionProperty::getModifiers](reflectionproperty.getmodifiers.md) — Obtém os modificadores de propriedade
- [ReflectionProperty::getName](reflectionproperty.getname.md) — Obtém o nome da propriedade
- [ReflectionProperty::getRawValue](reflectionproperty.getrawvalue.md) — Retorna o valor de uma propriedade, ignorando um gancho get se definido
- [ReflectionProperty::getSettableType](reflectionproperty.getsettabletype.md) — Retorna o tipo de parâmetro de um gancho set
- [ReflectionProperty::getType](reflectionproperty.gettype.md) — Obtém o tipo de uma propriedade
- [ReflectionProperty::getValue](reflectionproperty.getvalue.md) — Obtém o valor
- [ReflectionProperty::hasDefaultValue](reflectionproperty.hasdefaultvalue.md) — Verifica se a propriedade tem um valor padrão declarado
- [ReflectionProperty::hasHook](reflectionproperty.hashook.md) — Retorna se a propriedade tem um determinado gancho definido
- [ReflectionProperty::hasHooks](reflectionproperty.hashooks.md) — Retorna se a propriedade tem algum gancho definido
- [ReflectionProperty::hasType](reflectionproperty.hastype.md) — Verifica se a propriedade tem um tipo
- [ReflectionProperty::isAbstract](reflectionproperty.isabstract.md) — Determina se uma propriedade é abstrata
- [ReflectionProperty::isDefault](reflectionproperty.isdefault.md) — Verifica se a propriedade é uma propriedade padrão
- [ReflectionProperty::isDynamic](reflectionproperty.isdynamic.md) — Verifica se a propriedade é dinâmica
- [ReflectionProperty::isFinal](reflectionproperty.isfinal.md) — Determina se esta propriedade é final ou não
- [ReflectionProperty::isInitialized](reflectionproperty.isinitialized.md) — Verifica se uma propriedade foi inicializada
- [ReflectionProperty::isLazy](reflectionproperty.islazy.md) — Verifica se uma propriedade é lenta
- [ReflectionProperty::isPrivate](reflectionproperty.isprivate.md) — Verifica se a propriedade é privada
- [ReflectionProperty::isPrivateSet](reflectionproperty.isprivateset.md) — Verifica se a propriedade é privada para escrita
- [ReflectionProperty::isPromoted](reflectionproperty.ispromoted.md) — Verifica se a propriedade é promovida
- [ReflectionProperty::isProtected](reflectionproperty.isprotected.md) — Verifica se a propriedade é protegida
- [ReflectionProperty::isProtectedSet](reflectionproperty.isprotectedset.md) — Verifica se a propriedade está protegida para escrita
- [ReflectionProperty::isPublic](reflectionproperty.ispublic.md) — Verifica se a propriedade é pública
- [ReflectionProperty::isReadOnly](reflectionproperty.isreadonly.md) — Verifica se a propriedade é somente leitura
- [ReflectionProperty::isStatic](reflectionproperty.isstatic.md) — Verifica se a propriedade é estática
- [ReflectionProperty::isVirtual](reflectionproperty.isvirtual.md) — Determina se uma propriedade é virtual
- [ReflectionProperty::setAccessible](reflectionproperty.setaccessible.md) — Define acessibilidade da propriedade
- [ReflectionProperty::setRawValue](reflectionproperty.setrawvalue.md) — Define o valor de uma propriedade, ignorando um gancho de configuração se definido
- [ReflectionProperty::setRawValueWithoutLazyInitialization](reflectionproperty.setrawvaluewithoutlazyinitialization.md) — Define o valor bruto da propriedade sem acionar a inicialização lenta
- [ReflectionProperty::setValue](reflectionproperty.setvalue.md) — Define valor da propriedade
- [ReflectionProperty::skipLazyInitialization](reflectionproperty.skiplazyinitialization.md) — Marca a propriedade como não lenta
- [ReflectionProperty::\_\_toString](reflectionproperty.tostring.md) — Para string

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
