# Grava uma imagem no arquivo especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.writeimage.php

---

# Gmagick::writeimage

(PECL gmagick >= Unknown)

Gmagick::writeimage — Grava uma imagem no arquivo especificado

### Descrição

public function **Gmagick::writeimage**([string](language.types.string.md) `$filename`, [bool](language.types.boolean.md) `$all_frames` = **`false`**): [Gmagick](class.gmagick.md)

Grava uma imagem no arquivo especificado. Se o parâmetro de nome de arquivo for **`null`**,
a imagem será gravada no nome de arquivo definido por [Gmagick::readimage()](gmagick.readimage.md) ou [Gmagick::setimagefilename()](gmagick.setimagefilename.md).

### Parâmetros

`filename`
:   O nome do arquivo da imagem.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md).

### Erros/Exceções

Lança uma exceção
**GmagickException** em caso de erro.

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
