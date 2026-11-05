# Cria um efeito simulado de botão 3D

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.raiseimage.php

---

# Imagick::raiseImage

(PECL imagick 2, PECL imagick 3)

Imagick::raiseImage — Cria um efeito simulado de botão 3D

### Descrição

public function **Imagick::raiseImage**(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [bool](language.types.boolean.md) `$raise`  
): [bool](language.types.boolean.md)

Cria um efeito simulado de botão tridimensional,
clareando e escurecendo as bordas da imagem.
Os membros "width" e "height" definem a largura
das bordas vertical e horizontal do efeito.

### Parâmetros

`width`

`height`

`x`

`y`

`raise`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::raiseImage()****

```
<?php
function raiseImage($imagePath, $width, $height, $x, $y, $raise) {
    $imagick = new \Imagick(realpath($imagePath));

    // verificando o efeito de x e y
    $imagick->raiseImage($width, $height, $x, $y, $raise);
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}

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
