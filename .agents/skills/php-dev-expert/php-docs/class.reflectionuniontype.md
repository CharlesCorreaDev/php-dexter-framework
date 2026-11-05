# A classe ReflectionUnionType

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionuniontype.php

---

# A classe ReflectionUnionType

(PHP 8)

## Introdução

## Resumo da classe

class ****ReflectionUnionType****
extends
[ReflectionType](class.reflectiontype.md)
{

/\* Métodos \*/

public function [getTypes](reflectionuniontype.gettypes.md)(): [array](language.types.array.md)

/\* Métodos herdados \*/

public function [ReflectionType::allowsNull](reflectiontype.allowsnull.md)(): [bool](language.types.boolean.md)

public function [ReflectionType::\_\_toString](reflectiontype.tostring.md)(): [string](language.types.string.md)

}

## Índice

- [ReflectionUnionType::getTypes](reflectionuniontype.gettypes.md) — Retorna os tipos incluídos no tipo de união

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
