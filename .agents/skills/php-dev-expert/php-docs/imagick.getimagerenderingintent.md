# Obtém a intenção de renderização da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagerenderingintent.php

---

# Imagick::getImageRenderingIntent

(PECL imagick 2, PECL imagick 3)

Imagick::getImageRenderingIntent — Obtém a intenção de renderização da imagem

### Descrição

public function **Imagick::getImageRenderingIntent**(): [int](language.types.integer.md)

Obtém a intenção de renderização da imagem.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Returns a [intenção de renderização](imagick.constants.md#imagick.constants.renderingintent) da imagem.

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
