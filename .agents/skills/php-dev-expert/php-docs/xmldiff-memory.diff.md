# Diferencia dois documentos XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmldiff-memory.diff.php

---

# XMLDiff\Memory::diff

(PECL xmldiff >= 0.8.0)

XMLDiff\Memory::diff — Diferencia dois documentos XML

### Descrição

public function **XMLDiff\Memory::diff**([string](language.types.string.md) `$from`, [string](language.types.string.md) `$to`): [string](language.types.string.md)

Diferencia duas strings contendo documentos XML e produz informações de diferenças.

### Parâmetros

`from`
:   Documento XML de origem.

`to`
:   Documento XML de destino.

### Valor Retornado

String com o documento XML contendo as informações de diferenças ou NULL.

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
