# Exports

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflection.export.php

---

# Reflection::export

(PHP 5, PHP 7)

Reflection::export — Exports

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

public static function **Reflection::export**([Reflector](class.reflector.md) `$reflector`, [bool](language.types.boolean.md) `$return` = **`false`**): [string](language.types.string.md)

Exporta uma reflexão.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`reflector`
:   A reflexão a ser exportada.

`return`
:   Definir como **`true`** retornará a exportação,
    em vez de emiti-la. Definir como **`false`** (o padrão) fará o oposto.

### Valor Retornado

Se o parâmetro `return`
for definido como **`true`**, então a exportação será retornada como uma [string](language.types.string.md),
caso contrário, **`null`** será retornado.

### Veja também

- [Reflection::getModifierNames()](reflection.getmodifiernames.md) - Obtém os nomes dos modificadores

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
