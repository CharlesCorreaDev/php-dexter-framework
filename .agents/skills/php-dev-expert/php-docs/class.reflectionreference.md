# A classe ReflectionReference

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionreference.php

---

# A classe ReflectionReference

(PHP 7 >= 7.4.0, PHP 8)

## Introdução

A classe **ReflectionReference** fornece informações sobre
uma referência.

## Resumo da classe

final
class ****ReflectionReference****
{

/\* Métodos \*/

private function [\_\_construct](reflectionreference.construct.md)()

public static function [fromArrayElement](reflectionreference.fromarrayelement.md)([array](language.types.array.md) `$array`, [int](language.types.integer.md)|[string](language.types.string.md) `$key`): [?](language.types.null.md)[ReflectionReference](class.reflectionreference.md)

public function [getId](reflectionreference.getid.md)(): [string](language.types.string.md)

}

## Índice

- [ReflectionReference::\_\_construct](reflectionreference.construct.md) — Construtor privado para proibir instanciação direta
- [ReflectionReference::fromArrayElement](reflectionreference.fromarrayelement.md) — Cria um ReflectionReference a partir de um elemento de array
- [ReflectionReference::getId](reflectionreference.getid.md) — Obtém ID exclusivo de uma referência

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
