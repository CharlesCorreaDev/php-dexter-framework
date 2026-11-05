# Define espaço de cores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setcolorspace.php

---

# Imagick::setColorspace

(PECL imagick 3)

Imagick::setColorspace — Define espaço de cores

### Descrição

public function **Imagick::setColorspace**([int](language.types.integer.md) `$COLORSPACE`): [bool](language.types.boolean.md)

Define o valor global do espaço de cores para o objeto.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.5.7 ou superior.

### Parâmetros

`COLORSPACE`
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
