# Retorna o método de interpolação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimageinterpolatemethod.php

---

# Imagick::getImageInterpolateMethod

(PECL imagick 2, PECL imagick 3)

Imagick::getImageInterpolateMethod — Retorna o método de interpolação

### Descrição

public function **Imagick::getImageInterpolateMethod**(): [int](language.types.integer.md)

Retorna o método de interpolação para a imagem especificada. O método é uma das
constantes **`Imagick::INTERPOLATE_*`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o método de interpolação em caso de sucesso.

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
