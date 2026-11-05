# Obtem a fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getfont.php

---

# Imagick::getFont

(PECL imagick 2 >= 2.1.0, PECL imagick 3)

Imagick::getFont — Obtem a fonte

### Descrição

public function **Imagick::getFont**(): [string](language.types.string.md)

Retorna a proriedade da fonte do objeto.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.7 ou superior.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string contendo o nome da fonte ou **`false`** se nenhuma estiver definida.

### Veja também

- [Imagick::setFont()](imagick.setfont.md) - Define a fonte
- [ImagickDraw::setFont()](imagickdraw.setfont.md) - Define a fonte totalmente especificada a ser usada ao fazer anotações com texto
- [ImagickDraw::getFont()](imagickdraw.getfont.md) - Retorna a fonte

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
