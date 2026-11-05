# A classe ReflectionClassConstant

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionclassconstant.php

---

# A classe ReflectionClassConstant

(PHP 7 >= 7.1.0, PHP 8)

## Introdução

A classe **ReflectionClassConstant** relata
informações sobre uma constante de classe.

## Resumo da classe

class ****ReflectionClassConstant****
implements
[Reflector](class.reflector.md) {

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[IS\_PUBLIC](class.reflectionclassconstant.md#reflectionclassconstant.constants.is-public);

public
const
[int](language.types.integer.md)
[IS\_PROTECTED](class.reflectionclassconstant.md#reflectionclassconstant.constants.is-protected);

public
const
[int](language.types.integer.md)
[IS\_PRIVATE](class.reflectionclassconstant.md#reflectionclassconstant.constants.is-private);

public
const
[int](language.types.integer.md)
[IS\_FINAL](class.reflectionclassconstant.md#reflectionclassconstant.constants.is-final);

/\* Propriedades \*/

public
[string](language.types.string.md)
[$name](class.reflectionclassconstant.md#reflectionclassconstant.props.name);

public
[string](language.types.string.md)
[$class](class.reflectionclassconstant.md#reflectionclassconstant.props.class);

/\* Métodos \*/

public function [\_\_construct](reflectionclassconstant.construct.md)([object](language.types.object.md)|[string](language.types.string.md) `$class`, [string](language.types.string.md) `$constant`)

public static function [export](reflectionclassconstant.export.md)([mixed](language.types.mixed.md) `$class`, [string](language.types.string.md) `$name`, [bool](language.types.boolean.md) `$return` = ?): [string](language.types.string.md)

public function [getAttributes](reflectionclassconstant.getattributes.md)([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

public function [getDeclaringClass](reflectionclassconstant.getdeclaringclass.md)(): [ReflectionClass](class.reflectionclass.md)

public function [getDocComment](reflectionclassconstant.getdoccomment.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getModifiers](reflectionclassconstant.getmodifiers.md)(): [int](language.types.integer.md)

public function [getName](reflectionclassconstant.getname.md)(): [string](language.types.string.md)

public function [getType](reflectionclassconstant.gettype.md)(): [?](language.types.null.md)[ReflectionType](class.reflectiontype.md)

public function [getValue](reflectionclassconstant.getvalue.md)(): [mixed](language.types.mixed.md)

public function [hasType](reflectionclassconstant.hastype.md)(): [bool](language.types.boolean.md)

public function [isDeprecated](reflectionclassconstant.isdeprecated.md)(): [bool](language.types.boolean.md)

public function [isEnumCase](reflectionclassconstant.isenumcase.md)(): [bool](language.types.boolean.md)

public function [isFinal](reflectionclassconstant.isfinal.md)(): [bool](language.types.boolean.md)

public function [isPrivate](reflectionclassconstant.isprivate.md)(): [bool](language.types.boolean.md)

public function [isProtected](reflectionclassconstant.isprotected.md)(): [bool](language.types.boolean.md)

public function [isPublic](reflectionclassconstant.ispublic.md)(): [bool](language.types.boolean.md)

public function [\_\_toString](reflectionclassconstant.tostring.md)(): [string](language.types.string.md)

}

## Propriedades

name
:   Nome da constante de classe. Somente leitura, lança
    [ReflectionException](class.reflectionexception.md) em tentativa de escrita.

class
:   Nome da classe onde a constante de classe está definida. Somente leitura, lança
    [ReflectionException](class.reflectionexception.md) em tentativa de escrita.

## Constantes predefinidas

## Modificadores de ReflectionClassConstant

**`ReflectionClassConstant::IS_PUBLIC`** [int](language.types.integer.md)
:   Indica constantes [públicas](language.oop5.visibility.md).
    Antes do PHP 7.4.0, o valor era
    `256`.

**`ReflectionClassConstant::IS_PROTECTED`** [int](language.types.integer.md)
:   Indica constantes [protegidas](language.oop5.visibility.md).
    Antes do PHP 7.4.0, o valor era
    `512`.

**`ReflectionClassConstant::IS_PRIVATE`** [int](language.types.integer.md)
:   Indica constantes [privadas](language.oop5.visibility.md).
    Antes do PHP 7.4.0, o valor era
    `1024`.

**`ReflectionClassConstant::IS_FINAL`** [int](language.types.integer.md)
:   Indica constantes [finais](language.oop5.final.md).
    Disponível a partir do PHP 8.1.0.

> **Nota**:
>
> Os valores dessas constantes podem mudar entre as versões do PHP.
> É recomendado sempre utilizar as constantes
> e não depender diretamente dos valores.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |
| 8.0.0 | [ReflectionClassConstant::export()](reflectionclassconstant.export.md) foi removido. |

## Índice

- [ReflectionClassConstant::\_\_construct](reflectionclassconstant.construct.md) — Constrói uma ReflectionClassConstant
- [ReflectionClassConstant::export](reflectionclassconstant.export.md) — Exportação
- [ReflectionClassConstant::getAttributes](reflectionclassconstant.getattributes.md) — Obtém atributos
- [ReflectionClassConstant::getDeclaringClass](reflectionclassconstant.getdeclaringclass.md) — Obtém a classe declarada
- [ReflectionClassConstant::getDocComment](reflectionclassconstant.getdoccomment.md) — Obtém comentários doc
- [ReflectionClassConstant::getModifiers](reflectionclassconstant.getmodifiers.md) — Obtém os modificadores constantes da classe
- [ReflectionClassConstant::getName](reflectionclassconstant.getname.md) — Obtém o nome da constante
- [ReflectionClassConstant::getType](reflectionclassconstant.gettype.md) — Obtém o tipo de uma constante de classe
- [ReflectionClassConstant::getValue](reflectionclassconstant.getvalue.md) — Obtém valor
- [ReflectionClassConstant::hasType](reflectionclassconstant.hastype.md) — Verifica se uma constante de classe tem um tipo
- [ReflectionClassConstant::isDeprecated](reflectionclassconstant.isdeprecated.md) — Verifica se está descontinuada
- [ReflectionClassConstant::isEnumCase](reflectionclassconstant.isenumcase.md) — Verifica se a constante de classe é um caso de enumeração
- [ReflectionClassConstant::isFinal](reflectionclassconstant.isfinal.md) — Verifica se a constante da classe é final
- [ReflectionClassConstant::isPrivate](reflectionclassconstant.isprivate.md) — Verifica se a constante da classe é privada
- [ReflectionClassConstant::isProtected](reflectionclassconstant.isprotected.md) — Verifica se a constante de classe é protegida
- [ReflectionClassConstant::isPublic](reflectionclassconstant.ispublic.md) — Verifica se a constante da classe é pública
- [ReflectionClassConstant::\_\_toString](reflectionclassconstant.tostring.md) — Retorna a representação em string do objeto ReflectionClassConstant

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
