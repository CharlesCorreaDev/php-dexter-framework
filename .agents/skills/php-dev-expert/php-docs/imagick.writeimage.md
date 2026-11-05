# Grava uma imagem no nome de arquivo especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.writeimage.php

---

# Imagick::writeImage

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::writeImage — Grava uma imagem no nome de arquivo especificado

### Descrição

public function **Imagick::writeImage**([string](language.types.string.md) `$filename` = NULL): [bool](language.types.boolean.md)

Grava uma imagem no nome de arquivo especificado. Se o parâmetro filename for NULL,
a imagem será gravada no nome de arquivo definido por Imagick::readImage()
ou Imagick::setImageFilename().

### Parâmetros

`filename`
:   Nome do arquivo onde a imagem será gravada. A extensão do nome do arquivo
    define o tipo do arquivo.
    O formato pode ser forçado independentemente da extensão do arquivo usando o prefixo "formato:",
    por exemplo "jpg:test.png".

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
