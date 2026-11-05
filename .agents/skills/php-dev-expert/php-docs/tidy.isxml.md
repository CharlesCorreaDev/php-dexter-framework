# Indica se o documento é um documento XML genérico (não HTML/XHTML)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.isxml.php

---

# tidy::isXml

# tidy\_is\_xml

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.5.2)

tidy::isXml -- tidy\_is\_xml — Indica se o documento é um documento XML genérico (não HTML/XHTML)

### Descrição

Estilo orientado a objetos

public function **tidy::isXml**(): [bool](language.types.boolean.md)

Estilo procedural

function **tidy\_is\_xml**([tidy](class.tidy.md) `$tidy`): [bool](language.types.boolean.md)

Indica se o documento é um documento XML genérico (não HTML/XHTML).

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

### Valor Retornado

Esta função retorna **`true`** se o `tidy` especificado
for um documento XML genérico (não HTML/XHTML),
ou **`false`** caso contrário.

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
