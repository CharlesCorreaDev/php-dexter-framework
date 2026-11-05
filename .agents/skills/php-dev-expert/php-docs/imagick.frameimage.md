# Adiciona uma borda tridimensional simulada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.frameimage.php

---

# Imagick::frameImage

(PECL imagick 2, PECL imagick 3)

Imagick::frameImage — Adiciona uma borda tridimensional simulada

### Descrição

public function **Imagick::frameImage**(  
    [mixed](language.types.mixed.md) `$matte_color`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$inner_bevel`,  
    [int](language.types.integer.md) `$outer_bevel`  
): [bool](language.types.boolean.md)

Adiciona uma borda tridimensional simulada ao redor da imagem.
A largura e a altura especificam a largura da borda dos lados vertical
e horizontal do quadro. Os chanfros internos e externos
indicam a largura das sombras internas e externas
do quadro.

### Parâmetros

`matte_color`
:   Objeto ImagickPixel ou uma string representando a cor fosca

`width`
:   A largura da borda

`height`
:   A altura da borda

`inner_bevel`
:   A largura do chanfro interno

`outer_bevel`
:   A largura do chanfro externo

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Agora permite uma string representando a cor como primeiro parâmetro. As versões anteriores permitiam apenas um objeto ImagickPixel. |

### Examples

**Exemplo #1 Exemplo de **Imagick::frameImage()****

```
<?php
function frameImage($imagePath, $color, $width, $height, $innerBevel, $outerBevel) {
    $imagick = new \Imagick(realpath($imagePath));

    $width = $width + $innerBevel + $outerBevel;
    $height = $height + $innerBevel + $outerBevel;

    $imagick->frameimage(
        $color,
        $width,
        $height,
        $innerBevel,
        $outerBevel
    );
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
