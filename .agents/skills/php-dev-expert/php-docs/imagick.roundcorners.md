# Arredonda os cantos da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.roundcorners.php

---

# Imagick::roundCorners

(PECL imagick 2, PECL imagick 3)

Imagick::roundCorners — Arredonda os cantos da imagem

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::roundCorners**(  
    [float](language.types.float.md) `$x_rounding`,  
    [float](language.types.float.md) `$y_rounding`,  
    [float](language.types.float.md) `$stroke_width` = 10,  
    [float](language.types.float.md) `$displace` = 5,  
    [float](language.types.float.md) `$size_correction` = -6  
): [bool](language.types.boolean.md)

Arredonda os cantos da imagem. Os primeiros dois parâmetros controlam a quantidade
de arredondamento e os três últimos parâmetros podem ser usados ​​para ajuste fino
do processo de arredondamento. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.
Este método não estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 7.0.0 ou superior.

### Parâmetros

`x_rounding`
:   Arredondamento X.

`y_rounding`
:   Arredondamento Y.

`stroke_width`
:   Largura do traço.

`displace`
:   Deslocamento da imagem.

`size_correction`
:   Correção de tamanho.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Usando **Imagick::roundCorners()****

Arredonda os cantos da imagem.

```
<?php

$image = new Imagick();
$image->newPseudoImage(100, 100, "magick:rose");
$image->setImageFormat("png");

$image->roundCorners(5,3);
$image->writeImage("rounded.png");
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
