# Exporta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionobject.export.php

---

# ReflectionObject::export

(PHP 5, PHP 7)

ReflectionObject::export — Exporta

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

public static function **ReflectionObject::export**([string](language.types.string.md) `$argument`, [bool](language.types.boolean.md) `$return` = ?): [string](language.types.string.md)

Exporta uma reflexão.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`argument`
:   A reflexão a ser exportada.

`return`
:   Definir como **`true`** retornará a exportação,
    em vez de emiti-la. Definir como **`false`** (o padrão) fará o oposto.

### Valor Retornado

Se o parâmetro `return`
for definido como **`true`**, então a exportação será retornada como uma [string](language.types.string.md),
caso contrário, **`null`** será retornado.

### Veja também

- [ReflectionObject::\_\_construct()](reflectionobject.construct.md) - Constrói um ReflectionObject

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
