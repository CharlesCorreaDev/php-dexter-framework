# Remove uma região de uma imagem e corta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.chopimage.php

---

# Imagick::chopImage

(PECL imagick 2, PECL imagick 3)

Imagick::chopImage — Remove uma região de uma imagem e corta

### Descrição

public function **Imagick::chopImage**(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

Remove uma região de uma imagem e colapsa a imagem para ocupar a parte removida.

### Parâmetros

`width`
:   Largura da área cortada

`height`
:   Altura da área cortada

`x`
:   X da origem da área cortada

`y`
:   Y da origem da área cortada

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Usando **Imagick::chopImage()**:**

Exemplo de uso de Imagick::chopImage

```
<?php
/* Cria alguns objetos */
$image = new Imagick();
$pixel = new ImagickPixel( 'gray' );

/* Nova imagem */
$image->newImage(400, 200, $pixel);

/* Corta a imagem */
$image->chopImage(200, 200, 0, 0);

/* Seleciona formato da imagem */
$image->setImageFormat('png');

/* Mostra a imagem com cabeçalho */
header('Content-type: image/png');
echo $image;

?>
```

### Veja também

- [Imagick::cropImage()](imagick.cropimage.md) - Extrai uma região da imagem

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
