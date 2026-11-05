# Exporta os pixels da imagem não processada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.exportimagepixels.php

---

# Imagick::exportImagePixels

(PECL imagick 2 >=2.3.0, PECL imagick 3)

Imagick::exportImagePixels — Exporta os pixels da imagem não processada

### Descrição

public function **Imagick::exportImagePixels**(  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [string](language.types.string.md) `$map`,  
    [int](language.types.integer.md) `$STORAGE`  
): [array](language.types.array.md)

Exporta pixels da imagem para um array. O mapa define a ordem dos pixels
exportados. O tamanho do array retornado é `width * height * strlen(map)`.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.7 ou superior.

### Parâmetros

`x`
:   Coordenada X da área exportada

`y`
:   Coordenada Y da área exportada

`width`
:   Largura da área exportada

`height`
:   Altura da área exportada

`map`
:   Ordenação dos pixels exportados. Por exemplo `"RGB"`.
    Os caracteres válidos para o mapa são R, G, B, A, O, C, Y, M, K, I e P.

`STORAGE`
:   Consulte esta lista de [constantes de tipo de pixel](imagick.constants.md#imagick.constants.pixel)

### Valor Retornado

Retorna um array contendo os valores dos pixels.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Usando **Imagick::exportImagePixels()****

Exporta pixels da imagem para um array

```
<?php

/* Cria novo objeto */
$im = new Imagick();

/* Cria nova imagem */
$im->newPseudoImage(0, 0, "magick:rose");

/* Exporta os pixels da imagem */
$pixels = $im->exportImagePixels(10, 10, 2, 2, "RGB", Imagick::PIXEL_CHAR);

/* Exibe */
var_dump($pixels);
?>
```

O exemplo acima produzirá:

```
array(12) {
  [0]=>
  int(72)
  [1]=>
  int(64)
  [2]=>
  int(57)
  [3]=>
  int(69)
  [4]=>
  int(59)
  [5]=>
  int(43)
  [6]=>
  int(124)
  [7]=>
  int(120)
  [8]=>
  int(-96)
  [9]=>
  int(91)
  [10]=>
  int(84)
  [11]=>
  int(111)
}
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
