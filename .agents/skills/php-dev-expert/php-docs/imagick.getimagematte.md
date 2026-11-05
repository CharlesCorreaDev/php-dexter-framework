# Informa se a imagem tem um canal fosco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagematte.php

---

# Imagick::getImageMatte

(PECL imagick 2, PECL imagick 3)

Imagick::getImageMatte — Informa se a imagem tem um canal fosco

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::getImageMatte**(): [bool](language.types.boolean.md)

Retorna **`true`** sese a imagem tiver um canal fosco, false caso contrário.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
