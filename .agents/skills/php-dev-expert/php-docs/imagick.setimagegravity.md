# Define a gravidade da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimagegravity.php

---

# Imagick::setImageGravity

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::setImageGravity — Define a gravidade da imagem

### Descrição

public function **Imagick::setImageGravity**([int](language.types.integer.md) `$gravity`): [bool](language.types.boolean.md)

Define a propriedade de gravidade da imagem atual. Este método pode ser usado
para definir a propriedade de gravidade para uma única sequência de imagens.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

### Parâmetros

`gravity`
:   A propriedade da gravidade. Consulte a lista de
    [constantes de gravidade](imagick.constants.md#imagick.constants.gravity).

### Valor Retornado

Nenhum valor é retornado.

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
