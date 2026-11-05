# Cria um ReflectionReference a partir de um elemento de array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionreference.fromarrayelement.php

---

# ReflectionReference::fromArrayElement

(PHP 7 >= 7.4.0, PHP 8)

ReflectionReference::fromArrayElement — Cria um ReflectionReference a partir de um elemento de array

### Descrição

public static function **ReflectionReference::fromArrayElement**([array](language.types.array.md) `$array`, [int](language.types.integer.md)|[string](language.types.string.md) `$key`): [?](language.types.null.md)[ReflectionReference](class.reflectionreference.md)

Cria um [ReflectionReference](class.reflectionreference.md) a partir de um elemento de array.

### Parâmetros

`array`
:   O [array](language.types.array.md) que contém a referência potencial.

`key`
:   A chave; ou um [int](language.types.integer.md) ou uma [string](language.types.string.md).

### Valor Retornado

Retorna uma instância de [ReflectionReference](class.reflectionreference.md) se
`$array[$key]` for uma referência, ou **`null`** caso contrário.

### Erros/Exceções

Se `array` não for um [array](language.types.array.md), ou `key`
não for um [int](language.types.integer.md) ou [string](language.types.string.md), um [TypeError](class.typeerror.md) é lançado.
Se `$array[$key]` não existir,
uma exceção [ReflectionException](class.reflectionexception.md) é lançada.

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
