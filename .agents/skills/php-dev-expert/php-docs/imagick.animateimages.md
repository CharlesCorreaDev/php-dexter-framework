# Anima uma imagem ou imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.animateimages.php

---

# Imagick::animateImages

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::animateImages — Anima uma imagem ou imagens

### Descrição

public function **Imagick::animateImages**([string](language.types.string.md) `$x_server`): [bool](language.types.boolean.md)

Este método anima a imagem em um servidor X local ou remoto. Este método
não está disponível no Windows.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

### Parâmetros

`x_server`
:   Endereço do servidor X.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Veja também

- [Imagick::displayImage()](imagick.displayimage.md) - Exibe uma imagem

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
