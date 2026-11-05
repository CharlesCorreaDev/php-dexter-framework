# Busca atributos rapidamente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.pingimageblob.php

---

# Imagick::pingImageBlob

(PECL imagick 2, PECL imagick 3)

Imagick::pingImageBlob — Busca atributos rapidamente

### Descrição

public function **Imagick::pingImageBlob**([string](language.types.string.md) `$image`): [bool](language.types.boolean.md)

Este método pode ser usado para consultar a largura, altura, tamanho e
formato da imagem sem ler a imagem inteira na memória.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

`image`
:   Uma string contendo a imagem.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Usando **Imagick::pingImageBlob()****

Consultando uma imagem a partir de uma string

```
<?php
/* lê conteúdo da imagem */
$image = file_get_contents("test.jpg");

/* Cria novo objeto Imagick */
$im = new Imagick();

/* passa a string para o objeto Imagick */
$im->pingImageBlob($image);

/* exibe largura e altura da imagem */
echo $im->getImageWidth() . 'x' . $im->getImageHeight();
?>
```

### Veja também

- [Imagick::pingImage()](imagick.pingimage.md) - Busca atributos básicos sobre a imagem
- [Imagick::pingImageFile()](imagick.pingimagefile.md) - Obtém atributos básicos de imagem de maneira leve
- [Imagick::readImage()](imagick.readimage.md) - Lê imagem de um arquivo
- [Imagick::readImageBlob()](imagick.readimageblob.md) - Lê imagem de uma string binária
- [Imagick::readImageFile()](imagick.readimagefile.md) - Lê imagem a partir de um descritor de arquivo

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
