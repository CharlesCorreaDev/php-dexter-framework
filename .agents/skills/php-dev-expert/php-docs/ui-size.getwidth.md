# Recupera largura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-size.getwidth.php

---

# UI\Size::getWidth

(UI 0.9.9)

UI\Size::getWidth — Recupera largura

### Descrição

public function **UI\Size::getWidth**(): [float](language.types.float.md)

Recupera a largura.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A largura atual.

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
