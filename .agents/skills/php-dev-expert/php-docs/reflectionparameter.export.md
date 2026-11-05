# Exporta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.export.php

---

# ReflectionParameter::export

(PHP 5, PHP 7)

ReflectionParameter::export — Exporta

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

public static function **ReflectionParameter::export**([string](language.types.string.md) `$function`, [string](language.types.string.md) `$parameter`, [bool](language.types.boolean.md) `$return` = ?): [string](language.types.string.md)

Exporta.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`function`
:   O nome da função.

`parameter`
:   O nome do parâmetro.

`return`
:   Definir como **`true`** retornará a exportação,
    em vez de emiti-la. Definir como **`false`** (o padrão) fará o oposto.

### Valor Retornado

A reflexão exportada.

### Veja também

- [ReflectionParameter::\_\_toString()](reflectionparameter.tostring.md) - Para string

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
