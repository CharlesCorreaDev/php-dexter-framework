# Retorna o estilo da fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.getfontstyle.php

---

# GmagickDraw::getfontstyle

(PECL gmagick >= Unknown)

GmagickDraw::getfontstyle — Retorna o estilo da fonte

### Descrição

public function **GmagickDraw::getfontstyle**(): [int](language.types.integer.md)

Retorna o estilo de fonte usado ao fazer anotações com texto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a constante (STYLE\_) de estilo da fonte associada ao
objeto [GmagickDraw](class.gmagickdraw.md) ou `0` se nenhum estilo
estiver definido.

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
