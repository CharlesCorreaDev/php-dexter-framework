# Diferencia dois objetos DOMDocument

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmldiff-dom.diff.php

---

# XMLDiff\DOM::diff

(PECL xmldiff >= 0.8.0)

XMLDiff\DOM::diff — Diferencia dois objetos DOMDocument

### Descrição

public function **XMLDiff\DOM::diff**([DOMDocument](class.domdocument.md) `$from`, [DOMDocument](class.domdocument.md) `$to`): [DOMDocument](class.domdocument.md)

Diferencia duas instâncias de DOMDocument e produz uma nova com as informações de diferença.

### Parâmetros

`from`
:   Objeto DOMDocument de origem.

`to`
:   Objeto DOMDocument de destino.

### Valor Retornado

DOMDocument com as informações de diferença ou NULL.

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
