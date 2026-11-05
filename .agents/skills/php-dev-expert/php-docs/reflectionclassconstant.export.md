# Exportação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclassconstant.export.php

---

# ReflectionClassConstant::export

(PHP 7 >= 7.1.0)

ReflectionClassConstant::export — Exportação

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

public static function **ReflectionClassConstant::export**([mixed](language.types.mixed.md) `$class`, [string](language.types.string.md) `$name`, [bool](language.types.boolean.md) `$return` = ?): [string](language.types.string.md)

Exporta um reflexo.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`class`
:   A reflexão a ser exportada.

`name`
:   O nome da constante da classe.

`return`
:   Definir como **`true`** retornará a exportação,
    em vez de emiti-la. Definir como **`false`** (o padrão) fará o oposto.

### Valor Retornado

### Veja também

- [ReflectionClassConstant::\_\_toString()](reflectionclassconstant.tostring.md) - Retorna a representação em string do objeto ReflectionClassConstant

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
