# Obtém a versão HTML detectada para o documento especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.gethtmlver.php

---

# tidy::getHtmlVer

# tidy\_get\_html\_ver

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.5.2)

tidy::getHtmlVer -- tidy\_get\_html\_ver — Obtém a versão HTML detectada para o documento especificado

### Descrição

Estilo orientado a objetos

public function **tidy::getHtmlVer**(): [int](language.types.integer.md)

Estilo procedural

function **tidy\_get\_html\_ver**([tidy](class.tidy.md) `$tidy`): [int](language.types.integer.md)

Retorna a versão HTML detectada para o `tidy`
especificado.

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

### Valor Retornado

Retorna a versão HTML detectada.

**Aviso**

Esta função ainda não foi implementada no próprio Tidylib, então ela sempre
retorna `0`.

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
