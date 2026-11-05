# Função de exportação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunction.export.php

---

# ReflectionFunction::export

(PHP 5, PHP 7)

ReflectionFunction::export — Função de exportação

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

public static function **ReflectionFunction::export**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$return` = ?): [string](language.types.string.md)

Exporta uma função refletida.

### Parâmetros

`name`
:   A reflexão a ser exportada.

`return`
:   Definir como **`true`** retornará a exportação,
    em vez de emiti-la. Definir como **`false`** (o padrão) fará o oposto.

### Valor Retornado

Se o parâmetro `return`
for definido como **`true`**, então a exportação será retornada como uma [string](language.types.string.md),
caso contrário, **`null`** será retornado.

### Veja também

- [ReflectionFunction::invoke()](reflectionfunction.invoke.md) - Invoca função
- [ReflectionFunction::\_\_toString()](reflectionfunction.tostring.md) - Retorna a representação em string do objeto ReflectionFunction

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
