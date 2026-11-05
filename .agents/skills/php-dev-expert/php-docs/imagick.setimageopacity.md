# Define o nível de opacidade da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimageopacity.php

---

# Imagick::setImageOpacity

(PECL imagick 2, PECL imagick 3)

Imagick::setImageOpacity — Define o nível de opacidade da imagem

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::setImageOpacity**([float](language.types.float.md) `$opacity`): [bool](language.types.boolean.md)

Define a imagem para o nível de opacidade especificado. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.1 ou superior.
Este método funciona em todos os canais, o que significa que, por exemplo, um valor
de opacidade de 0.5 definirá todas as áreas transparentes como parcialmente opacas. Para adicionar transparência
a áreas que ainda não são transparentes, use [Imagick::evaluateImage()](imagick.evaluateimage.md).

### Parâmetros

`opacity`
:   O nível de transparência: 1.0 é totalmente opaco e 0.0 é totalmente
    transparente.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Um exemplo de **Imagick::setImageOpacity()****

Um exemplo de uso de Imagick::setImageOpacity()

```
<?php
/* Cria o objeto */
$image = new Imagick('source.png');

/* Define a opacidade */
$image->setImageOpacity(0.7);

/* exibe a imagem */
header('Content-type: image/png');
echo $image;

?>
```

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
