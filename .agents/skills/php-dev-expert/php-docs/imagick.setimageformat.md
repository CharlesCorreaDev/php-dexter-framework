# Define o formato de uma imagem específica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimageformat.php

---

# Imagick::setImageFormat

(PECL imagick 2, PECL imagick 3)

Imagick::setImageFormat — Define o formato de uma imagem específica

### Descrição

public function **Imagick::setImageFormat**([string](language.types.string.md) `$format`): [bool](language.types.boolean.md)

Define o formato de uma imagem específica em uma sequência.

### Parâmetros

`format`
:   Apresentação em string do formato da imagem. O suporte ao formato
    depende da instalação do ImageMagick.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
