# Retorna a geometria da página

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getpage.php

---

# Imagick::getPage

(PECL imagick 2, PECL imagick 3)

Imagick::getPage — Retorna a geometria da página

### Descrição

public function **Imagick::getPage**(): [array](language.types.array.md)

Retorna a geometria da página associada ao objeto Imagick em
um array associativo com as chaves "width" (largura), "height" (altura), "x" e "y".

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a geometria da página associada ao objeto Imagick em
um array associativo com as chaves "width" (largura), "height" (altura), "x" e "y",
e lançando uma ImagickException em caso de erro.

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
