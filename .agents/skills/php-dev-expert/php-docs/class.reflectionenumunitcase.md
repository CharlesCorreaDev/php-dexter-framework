# A classe ReflectionEnumUnitCase

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionenumunitcase.php

---

# A classe ReflectionEnumUnitCase

(PHP 8 >= 8.1.0)

## Introdução

A classe **ReflectionEnumUnitCase** relata
informações sobre um caso de unidade Enum, que não tem um equivalente escalar.

## Resumo da classe

class ****ReflectionEnumUnitCase****
extends
[ReflectionClassConstant](class.reflectionclassconstant.md)
{

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[ReflectionClassConstant::IS\_PUBLIC](class.reflectionclassconstant.md#reflectionclassconstant.constants.is-public);

public
const
[int](language.types.integer.md)
[ReflectionClassConstant::IS\_PROTECTED](class.reflectionclassconstant.md#reflectionclassconstant.constants.is-protected);

public
const
[int](language.types.integer.md)
[ReflectionClassConstant::IS\_PRIVATE](class.reflectionclassconstant.md#reflectionclassconstant.constants.is-private);

public
const
[int](language.types.integer.md)
[ReflectionClassConstant::IS\_FINAL](class.reflectionclassconstant.md#reflectionclassconstant.constants.is-final);

/\* Propriedades herdadas \*/

public
[string](language.types.string.md)
[$name](class.reflectionclassconstant.md#reflectionclassconstant.props.name);

public
[string](language.types.string.md)
[$class](class.reflectionclassconstant.md#reflectionclassconstant.props.class);

/\* Métodos \*/

public function [\_\_construct](reflectionenumunitcase.construct.md)([object](language.types.object.md)|[string](language.types.string.md) `$class`, [string](language.types.string.md) `$constant`)

public function [getEnum](reflectionenumunitcase.getenum.md)(): [ReflectionEnum](class.reflectionenum.md)

public function [getValue](reflectionenumunitcase.getvalue.md)(): [UnitEnum](class.unitenum.md)

/\* Métodos herdados \*/

public static function [ReflectionClassConstant::export](reflectionclassconstant.export.md)([mixed](language.types.mixed.md) `$class`, [string](language.types.string.md) `$name`, [bool](language.types.boolean.md) `$return` = ?): [string](language.types.string.md)

public function [ReflectionClassConstant::getAttributes](reflectionclassconstant.getattributes.md)([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

public function [ReflectionClassConstant::getDeclaringClass](reflectionclassconstant.getdeclaringclass.md)(): [ReflectionClass](class.reflectionclass.md)

public function [ReflectionClassConstant::getDocComment](reflectionclassconstant.getdoccomment.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [ReflectionClassConstant::getModifiers](reflectionclassconstant.getmodifiers.md)(): [int](language.types.integer.md)

public function [ReflectionClassConstant::getName](reflectionclassconstant.getname.md)(): [string](language.types.string.md)

public function [ReflectionClassConstant::getType](reflectionclassconstant.gettype.md)(): [?](language.types.null.md)[ReflectionType](class.reflectiontype.md)

public function [ReflectionClassConstant::getValue](reflectionclassconstant.getvalue.md)(): [mixed](language.types.mixed.md)

public function [ReflectionClassConstant::hasType](reflectionclassconstant.hastype.md)(): [bool](language.types.boolean.md)

public function [ReflectionClassConstant::isDeprecated](reflectionclassconstant.isdeprecated.md)(): [bool](language.types.boolean.md)

public function [ReflectionClassConstant::isEnumCase](reflectionclassconstant.isenumcase.md)(): [bool](language.types.boolean.md)

public function [ReflectionClassConstant::isFinal](reflectionclassconstant.isfinal.md)(): [bool](language.types.boolean.md)

public function [ReflectionClassConstant::isPrivate](reflectionclassconstant.isprivate.md)(): [bool](language.types.boolean.md)

public function [ReflectionClassConstant::isProtected](reflectionclassconstant.isprotected.md)(): [bool](language.types.boolean.md)

public function [ReflectionClassConstant::isPublic](reflectionclassconstant.ispublic.md)(): [bool](language.types.boolean.md)

public function [ReflectionClassConstant::\_\_toString](reflectionclassconstant.tostring.md)(): [string](language.types.string.md)

}

## Veja também

- [Enumerações](language.enumerations.md)
- [ReflectionEnumBackedCase](class.reflectionenumbackedcase.md)

## Índice

- [ReflectionEnumUnitCase::\_\_construct](reflectionenumunitcase.construct.md) — Instancia um objeto ReflectionEnumUnitCase
- [ReflectionEnumUnitCase::getEnum](reflectionenumunitcase.getenum.md) — Obtém o reflexo do enum deste caso
- [ReflectionEnumUnitCase::getValue](reflectionenumunitcase.getvalue.md) — Obtém o objeto enum case descrito por este objeto de reflexão

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
