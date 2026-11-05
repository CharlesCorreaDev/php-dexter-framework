# Obtém a máscara de recorte da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimageclipmask.php

---

# Imagick::getImageClipMask

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::getImageClipMask — Obtém a máscara de recorte da imagem

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::getImageClipMask**(): [Imagick](class.imagick.md)

Retorna a máscara de recorte da imagem. A máscara de recorte é um objeto Imagick contendo a máscara.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto Imagick contendo a máscara de recorte.

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
