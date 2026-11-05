# A classe finfo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.finfo.php

---

# A classe finfo

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL fileinfo >= 0.1.0)

## Introdução

Esta classe fornece uma interface orientada a objetos para as funções
fileinfo.

## Resumo da classe

class ****finfo****
{

/\* Métodos \*/

public function [\_\_construct](finfo.construct.md)([int](language.types.integer.md) `$flags` = **`FILEINFO_NONE`**, [?](language.types.null.md)[string](language.types.string.md) `$magic_database` = **`null`**)

public function [buffer](finfo.buffer.md)([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$flags` = **`FILEINFO_NONE`**, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [file](finfo.file.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = **`FILEINFO_NONE`**, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [set\_flags](finfo.set-flags.md)([int](language.types.integer.md) `$flags`): [true](language.types.singleton.md)

}

## Índice

- [finfo::buffer](finfo.buffer.md) — Sinônimo de finfo\_buffer()
- [finfo::\_\_construct](finfo.construct.md) — Sinônimo de finfo\_open
- [finfo::file](finfo.file.md) — Sinônimo de finfo\_file()
- [finfo::set\_flags](finfo.set-flags.md) — Sinônimo de finfo\_set\_flags()

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
