# Exportação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionextension.export.php

---

# ReflectionExtension::export

(PHP 5, PHP 7)

ReflectionExtension::export — Exportação

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

public static function **ReflectionExtension::export**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$return` = **`false`**): [string](language.types.string.md)

Exporta uma extensão refletida. O formato de saída desta função é
o mesmo que o argumento CLI `--re [extension]`.

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

- [ReflectionExtension::info()](reflectionextension.info.md) - Imprime informações da extensão
- [ReflectionExtension::\_\_toString()](reflectionextension.tostring.md) - Para string

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
