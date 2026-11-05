# Define o espaço de cores da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimagecolorspace.php

---

# Imagick::setImageColorspace

(PECL imagick 2, PECL imagick 3)

Imagick::setImageColorspace — Define o espaço de cores da imagem

### Descrição

public function **Imagick::setImageColorspace**([int](language.types.integer.md) `$colorspace`): [bool](language.types.boolean.md)

Define o espaço de cores da imagem. Este método deve ser usado ao criar novas imagens. Para alterar o espaço de cores de uma imagem existente, deve ser usado o método [Imagick::transformImageColorspace()](imagick.transformimagecolorspace.md).

### Parâmetros

`colorspace`
:   Uma das [constantes COLORSPACE](imagick.constants.md#imagick.constants.colorspace).

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
