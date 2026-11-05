# Exporta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.export.php

---

# ReflectionProperty::export

(PHP 5, PHP 7)

ReflectionProperty::export — Exporta

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

public static function **ReflectionProperty::export**([mixed](language.types.mixed.md) `$class`, [string](language.types.string.md) `$name`, [bool](language.types.boolean.md) `$return` = ?): [string](language.types.string.md)

Exporta uma reflexão.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`argument`
:   A reflexão a ser exportada.

`name`
:   O nome da propriedade.

`return`
:   Definir como **`true`** retornará a exportação,
    em vez de emiti-la. Definir como **`false`** (o padrão) fará o oposto.

### Valor Retornado

### Veja também

- [ReflectionProperty::\_\_toString()](reflectionproperty.tostring.md) - Para string

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
