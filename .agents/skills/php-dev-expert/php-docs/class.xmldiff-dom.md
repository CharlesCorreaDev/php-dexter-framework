# A classe XMLDiff\DOM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.xmldiff-dom.php

---

# A classe XMLDiff\DOM

(PECL xmldiff >= 0.8.0)

## Introdução

## Resumo da classe

class **XMLDiff\DOM**

extends
[XMLDiff\Base](class.xmldiff-base.md)
{

/\* Métodos \*/

public function [diff](xmldiff-dom.diff.md)([DOMDocument](class.domdocument.md) `$from`, [DOMDocument](class.domdocument.md) `$to`): [DOMDocument](class.domdocument.md)

public function [merge](xmldiff-dom.merge.md)([DOMDocument](class.domdocument.md) `$src`, [DOMDocument](class.domdocument.md) `$diff`): [DOMDocument](class.domdocument.md)

/\* Métodos herdados \*/

abstract public function [XMLDiff\Base::diff](xmldiff-base.diff.md)([mixed](language.types.mixed.md) `$from`, [mixed](language.types.mixed.md) `$to`): [mixed](language.types.mixed.md)

abstract public function [XMLDiff\Base::merge](xmldiff-base.merge.md)([mixed](language.types.mixed.md) `$src`, [mixed](language.types.mixed.md) `$diff`): [mixed](language.types.mixed.md)

}

## Índice

- [XMLDiff\DOM::diff](xmldiff-dom.diff.md) — Diferencia dois objetos DOMDocument
- [XMLDiff\DOM::merge](xmldiff-dom.merge.md) — Produz DOMDocument mesclado

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
