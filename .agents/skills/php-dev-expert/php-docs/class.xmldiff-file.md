# A classe XMLDiff\File

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.xmldiff-file.php

---

# A classe XMLDiff\File

(PECL xmldiff >= 0.8.0)

## Introdução

## Resumo da classe

class **XMLDiff\File**

extends
[XMLDiff\Base](class.xmldiff-base.md)
{

/\* Métodos \*/

public function [diff](xmldiff-file.diff.md)([string](language.types.string.md) `$from`, [string](language.types.string.md) `$to`): [string](language.types.string.md)

public function [merge](xmldiff-file.merge.md)([string](language.types.string.md) `$src`, [string](language.types.string.md) `$diff`): [string](language.types.string.md)

/\* Métodos herdados \*/

abstract public function [XMLDiff\Base::diff](xmldiff-base.diff.md)([mixed](language.types.mixed.md) `$from`, [mixed](language.types.mixed.md) `$to`): [mixed](language.types.mixed.md)

abstract public function [XMLDiff\Base::merge](xmldiff-base.merge.md)([mixed](language.types.mixed.md) `$src`, [mixed](language.types.mixed.md) `$diff`): [mixed](language.types.mixed.md)

}

## Índice

- [XMLDiff\File::diff](xmldiff-file.diff.md) — Diferencia dois arquivos XML
- [XMLDiff\File::merge](xmldiff-file.merge.md) — Produz documento XML mesclado

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
