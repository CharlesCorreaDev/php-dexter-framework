# Obtém a gravidade da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagegravity.php

---

# Imagick::getImageGravity

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::getImageGravity — Obtém a gravidade da imagem

### Descrição

public function **Imagick::getImageGravity**(): [int](language.types.integer.md)

Obtém o valor atual da gravidade da
imagem. Ao contrário de [Imagick::getGravity()](imagick.getgravity.md), este método
retorna a gravidade definida para a sequência de imagens atual.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a propriedade de gravidade da imagem. Consulte a lista de
[constantes de gravidade](imagick.constants.md#imagick.constants.gravity).

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
