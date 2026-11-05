# Obtém a orientação da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimageorientation.php

---

# Imagick::getImageOrientation

(PECL imagick 2, PECL imagick 3)

Imagick::getImageOrientation — Obtém a orientação da imagem

### Descrição

public function **Imagick::getImageOrientation**(): [int](language.types.integer.md)

Obtém a orientação da imagem. O valor de retorno é uma das [constantes de orientação](imagick.constants.md#imagick.constants.orientation).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um inteiro em caso de sucesso.

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
