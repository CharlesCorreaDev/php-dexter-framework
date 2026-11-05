# Adiciona um item ao registro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-registry.set.php

---

# Yaf\_Registry::set

(Yaf >=1.0.0)

Yaf\_Registry::set — Adiciona um item ao registro

### Descrição

public static function **Yaf\_Registry::set**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Adiciona um item ao registro.

### Parâmetros

`name`

`value`

### Valor Retornado

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
