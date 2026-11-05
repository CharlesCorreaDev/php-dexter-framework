# A classe ReflectionType

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectiontype.php

---

# A classe ReflectionType

(PHP 7, PHP 8)

## Introdução

A classe **ReflectionType** relata
informações sobre o tipo de parâmetro/retorno de uma função ou o tipo de propriedade de uma classe.
A extensão Reflection declara os seguintes subtipos:

- [ReflectionNamedType](class.reflectionnamedtype.md) (a partir do PHP 7.1.0)
- [ReflectionUnionType](class.reflectionuniontype.md) (a partir do PHP 8.0.0)
- [ReflectionIntersectionType](class.reflectionintersectiontype.md) (a partir do PHP 8.1.0)

## Resumo da classe

abstract
class ****ReflectionType****
implements
[Stringable](class.stringable.md) {

/\* Métodos \*/

public function [allowsNull](reflectiontype.allowsnull.md)(): [bool](language.types.boolean.md)

public function [\_\_toString](reflectiontype.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **ReflectionType** tornou-se abstrata e **ReflectionType::isBuiltin()** foi movida para [ReflectionNamedType::isBuiltin()](reflectionnamedtype.isbuiltin.md). |

## Índice

- [ReflectionType::allowsNull](reflectiontype.allowsnull.md) — Verifica se nulo é permitido
- [ReflectionType::\_\_toString](reflectiontype.tostring.md) — Para string

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
