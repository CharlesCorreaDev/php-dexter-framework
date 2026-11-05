# A classe XMLDiff\Memory

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.xmldiff-memory.php

---

# A classe XMLDiff\Memory

(PECL xmldiff >= 0.8.0)

## Introdução

## Resumo da classe

class **XMLDiff\Memory**

extends
[XMLDiff\Base](class.xmldiff-base.md)
{

/\* Métodos \*/

public function [diff](xmldiff-memory.diff.md)([string](language.types.string.md) `$from`, [string](language.types.string.md) `$to`): [string](language.types.string.md)

public function [merge](xmldiff-memory.merge.md)([string](language.types.string.md) `$src`, [string](language.types.string.md) `$diff`): [string](language.types.string.md)

/\* Métodos herdados \*/

abstract public function [XMLDiff\Base::diff](xmldiff-base.diff.md)([mixed](language.types.mixed.md) `$from`, [mixed](language.types.mixed.md) `$to`): [mixed](language.types.mixed.md)

abstract public function [XMLDiff\Base::merge](xmldiff-base.merge.md)([mixed](language.types.mixed.md) `$src`, [mixed](language.types.mixed.md) `$diff`): [mixed](language.types.mixed.md)

}

## Índice

- [XMLDiff\Memory::diff](xmldiff-memory.diff.md) — Diferencia dois documentos XML
- [XMLDiff\Memory::merge](xmldiff-memory.merge.md) — Produz documento XML mesclado

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
