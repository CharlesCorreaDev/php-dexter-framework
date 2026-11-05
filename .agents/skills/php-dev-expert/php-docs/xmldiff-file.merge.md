# Produz documento XML mesclado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmldiff-file.merge.php

---

# XMLDiff\File::merge

(PECL xmldiff >= 0.8.0)

XMLDiff\File::merge — Produz documento XML mesclado

### Descrição

public function **XMLDiff\File::merge**([string](language.types.string.md) `$src`, [string](language.types.string.md) `$diff`): [string](language.types.string.md)

Cria um novo documento XML com base em diferenças e no documento de origem.

### Parâmetros

`src`
:   Caminho para o documento XML de origem.

`diff`
:   Caminho para o documento XML com as informações de diferença.

### Valor Retornado

String com o novo documento XML ou NULL.

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
