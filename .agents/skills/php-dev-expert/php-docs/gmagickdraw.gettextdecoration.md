# Retorna a decoração do texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.gettextdecoration.php

---

# GmagickDraw::gettextdecoration

(PECL gmagick >= Unknown)

GmagickDraw::gettextdecoration — Retorna a decoração do texto

### Descrição

public function **GmagickDraw::gettextdecoration**(): [int](language.types.integer.md)

Retorna a decoração aplicada ao anotar com texto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma das constantes DECORATION\_ ou 0 se nenhuma decoração estiver definida.

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
