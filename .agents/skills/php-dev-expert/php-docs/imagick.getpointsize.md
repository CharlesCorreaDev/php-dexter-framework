# Obtém o tamanho do ponto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getpointsize.php

---

# Imagick::getPointSize

(PECL imagick 2 >= 2.1.0, PECL imagick 3)

Imagick::getPointSize — Obtém o tamanho do ponto

### Descrição

public function **Imagick::getPointSize**(): [float](language.types.float.md)

Retorna a propriedade de tamanho de ponto do objeto.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.7 ou superior.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [float](language.types.float.md) contendo o tamanho do ponto.

### Veja também

- [Imagick::setPointSize()](imagick.setpointsize.md) - Define o tamanho em pontos

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
