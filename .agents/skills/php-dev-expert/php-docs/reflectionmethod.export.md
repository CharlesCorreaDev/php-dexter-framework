# Exporta um método de reflexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.export.php

---

# ReflectionMethod::export

(PHP 5, PHP 7)

ReflectionMethod::export — Exporta um método de reflexão

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

public static function **ReflectionMethod::export**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$name`, [bool](language.types.boolean.md) `$return` = **`false`**): [string](language.types.string.md)

Exporta um ReflectionMethod.

### Parâmetros

`class`
:   O nome da classe.

`name`
:   O nome do método.

`return`
:   Definir como **`true`** retornará a exportação,
    em vez de emiti-la. Definir como **`false`** (o padrão) fará o oposto.

### Valor Retornado

Se o parâmetro `return`
for definido como **`true`**, então a exportação será retornada como uma [string](language.types.string.md),
caso contrário, **`null`** será retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi removida. |
| 7.4.0 | Esta função foi descontinuada. |

### Veja também

- [ReflectionMethod::\_\_construct()](reflectionmethod.construct.md) - Constrói um ReflectionMethod
- [ReflectionMethod::\_\_toString()](reflectionmethod.tostring.md) - Retorna a representação em string do objeto do método Reflection

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
