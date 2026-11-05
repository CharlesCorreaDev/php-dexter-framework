# Simula uma imagem Polaroid

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.polaroidimage.php

---

# Imagick::polaroidImage

(PECL imagick 2, PECL imagick 3)

Imagick::polaroidImage — Simula uma imagem Polaroid

### Descrição

public function **Imagick::polaroidImage**([ImagickDraw](class.imagickdraw.md) `$properties`, [float](language.types.float.md) `$angle`): [bool](language.types.boolean.md)

Simula uma imagem Polaroid. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.2 ou superior.

### Parâmetros

`properties`
:   As propriedades da Polaroid.

`angle`
:   O ângulo da Polaroid.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Um exemplo de **Imagick::polaroidImage()****

Um exemplo de uso de Imagick::polaroidImage()

```
<?php
/* Cria o objeto */
$image = new Imagick('source.png');

/* Define a opacidade */
$image->polaroidImage(new ImagickDraw(), 25);

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
