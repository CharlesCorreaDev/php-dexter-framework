# A classe Yaconf

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaconf.php

---

# A classe Yaconf

(PECL yaconf >= 1.0.0)

## Introdução

Yaconf é um contêiner de configurações
que analisa arquivos INI, armazena o resultado no
PHP quando ele é iniciado, e o resultado é mantido
durante todo o ciclo de vida do PHP.

## Resumo da classe

class **Yaconf**
{

/\* Métodos \*/

public static function [\_\_debug\_info](yaconf.debug-info.md)([string](language.types.string.md) `$name`): [?](language.types.null.md)[array](language.types.array.md)

public static function [get](yaconf.get.md)([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$default_value` = NULL): [mixed](language.types.mixed.md)

public static function [has](yaconf.has.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

}

## Índice

- [Yaconf::\_\_debug\_info](yaconf.debug-info.md) — Inspect how a configuration value is stored
- [Yaconf::get](yaconf.get.md) — Recupera um item
- [Yaconf::has](yaconf.has.md) — Determina se um item existe

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
