# Grava quadros em um descritor de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.writeimagesfile.php

---

# Imagick::writeImagesFile

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::writeImagesFile — Grava quadros em um descritor de arquivo

### Descrição

public function **Imagick::writeImagesFile**([resource](language.types.resource.md) `$filehandle`, [string](language.types.string.md) `$format` = ?): [bool](language.types.boolean.md)

Grava todos os quadros da imagem em um descritor de arquivo aberto. Este método pode ser usado para gravar
GIFs animados ou outras imagens multi-quadros em um descritor de arquivo aberto.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

### Parâmetros

`filehandle`
:   Descritor do arquivo onde a imagem será gravada.

`format`
:   O formato da imagem.
    A lista de especificadores de formato válidos depende do conjunto de
    recursos compilados do ImageMagick e pode ser consultada em tempo de execução via [Imagick::queryFormats()](imagick.queryformats.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Veja também

- [Imagick::queryFormats()](imagick.queryformats.md) - Retorna formatos suportados pelo Imagick

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
