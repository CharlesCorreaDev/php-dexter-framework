# Indica se o documento é um documento XHTML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.isxhtml.php

---

# tidy::isXhtml

# tidy\_is\_xhtml

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.5.2)

tidy::isXhtml -- tidy\_is\_xhtml — Indica se o documento é um documento XHTML

### Descrição

Estilo orientado a objetos

public function **tidy::isXhtml**(): [bool](language.types.boolean.md)

Estilo procedural

function **tidy\_is\_xhtml**([tidy](class.tidy.md) `$tidy`): [bool](language.types.boolean.md)

Indica se o documento é um documento XHTML.

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

### Valor Retornado

Esta função retorna **`true`** se o `tidy` especificado
for um documento XHTML, ou **`false`** caso contrário.

**Aviso**

Esta função ainda não foi implementada no próprio Tidylib, então ela sempre
retorna **`false`**.

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
