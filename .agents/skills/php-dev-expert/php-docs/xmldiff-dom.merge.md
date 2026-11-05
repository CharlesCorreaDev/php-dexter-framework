# Produz DOMDocument mesclado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmldiff-dom.merge.php

---

# XMLDiff\DOM::merge

(PECL xmldiff >= 0.8.0)

XMLDiff\DOM::merge — Produz DOMDocument mesclado

### Descrição

public function **XMLDiff\DOM::merge**([DOMDocument](class.domdocument.md) `$src`, [DOMDocument](class.domdocument.md) `$diff`): [DOMDocument](class.domdocument.md)

Cria um novo DOMDocument com base nas diferenças.

### Parâmetros

`src`
:   Objeto DOMDocument de origem.

`diff`
:   Objeto DOMDocument contendo as informações de diferenças.

### Valor Retornado

DOMDocument mesclado ou NULL.

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
