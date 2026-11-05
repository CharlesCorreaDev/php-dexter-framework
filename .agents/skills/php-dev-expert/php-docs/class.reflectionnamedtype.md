# A classe ReflectionNamedType

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionnamedtype.php

---

# A classe ReflectionNamedType

(PHP 7 >= 7.1.0, PHP 8)

## Introdução

## Resumo da classe

class ****ReflectionNamedType****
extends
[ReflectionType](class.reflectiontype.md)
{

/\* Métodos \*/

public function [getName](reflectionnamedtype.getname.md)(): [string](language.types.string.md)

public function [isBuiltin](reflectionnamedtype.isbuiltin.md)(): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [ReflectionType::allowsNull](reflectiontype.allowsnull.md)(): [bool](language.types.boolean.md)

public function [ReflectionType::\_\_toString](reflectiontype.tostring.md)(): [string](language.types.string.md)

}

## Índice

- [ReflectionNamedType::getName](reflectionnamedtype.getname.md) — Obtém o nome do tipo como uma string
- [ReflectionNamedType::isBuiltin](reflectionnamedtype.isbuiltin.md) — Verifica se é um tipo interno

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
