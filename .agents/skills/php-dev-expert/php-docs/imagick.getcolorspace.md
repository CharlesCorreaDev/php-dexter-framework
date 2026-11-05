# Obtém o espaço de cores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getcolorspace.php

---

# Imagick::getColorspace

(PECL imagick 3)

Imagick::getColorspace — Obtém o espaço de cores

### Descrição

public function **Imagick::getColorspace**(): [int](language.types.integer.md)

Obtém o valor global do espaço de cores.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.5.7 ou superior.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um inteiro que pode ser comparado com [constantes COLORSPACE](imagick.constants.md#imagick.constants.colorspace).

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
