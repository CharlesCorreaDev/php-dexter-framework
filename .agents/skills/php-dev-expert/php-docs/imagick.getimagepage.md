# Retorna a geometria da página

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagepage.php

---

# Imagick::getImagePage

(PECL imagick 2, PECL imagick 3)

Imagick::getImagePage — Retorna a geometria da página

### Descrição

public function **Imagick::getImagePage**(): [array](language.types.array.md)

Retorna a geometria da página associada à imagem em um array com as
chaves "width" (largura), "height" (altura), "x" e "y".

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a geometria da página associada à imagem em um array com as
chaves "width" (largura), "height" (altura), "x" e "y".

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

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
