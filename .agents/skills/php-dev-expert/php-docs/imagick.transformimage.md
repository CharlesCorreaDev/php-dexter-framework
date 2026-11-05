# Método conveniente para definir o tamanho do corte e a geometria da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.transformimage.php

---

# Imagick::transformImage

(PECL imagick 2, PECL imagick 3)

Imagick::transformImage — Método conveniente para definir o tamanho do corte e a geometria da imagem

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::transformImage**([string](language.types.string.md) `$crop`, [string](language.types.string.md) `$geometry`): [Imagick](class.imagick.md)

Um método conveniente para definir o tamanho do corte e a geometria da imagem a partir de strings.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

`crop`
:   Uma string de geometria de corte. Esta geometria define uma sub-região da imagem a ser cortada.

`geometry`
:   Uma string de geometria de imagem. Esta geometria define o tamanho final da imagem.

### Valor Retornado

Retorna um objeto Imagick contendo a imagem transformada.

### Examples

**Exemplo #1 Usando **Imagick::transformImage()****

O exemplo cria uma imagem preta de 100x100.

```
<?php
$image = new Imagick();
$image->newImage(300, 200, "black");
$new_image = $image->transformImage("100x100", "100x100");
$new_image->writeImage('test_out.jpg');
?>
```

### Veja também

- [Imagick::cropImage()](imagick.cropimage.md) - Extrai uma região da imagem
- [Imagick::resizeImage()](imagick.resizeimage.md) - Dimensiona uma imagem
- [Imagick::thumbnailImage()](imagick.thumbnailimage.md) - Altera o tamanho de uma imagem

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
