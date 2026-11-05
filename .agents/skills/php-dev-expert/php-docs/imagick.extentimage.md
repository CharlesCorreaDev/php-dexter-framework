# Define tamanho da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.extentimage.php

---

# Imagick::extentImage

(PECL imagick 2, PECL imagick 3)

Imagick::extentImage — Define tamanho da imagem

### Descrição

public function **Imagick::extentImage**(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

Método de conforto para definir o tamanho da imagem. O método define o tamanho da imagem e permite
definir as coordenadas x,y onde começa a nova área.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.1 ou superior.

**Cuidado**

Antes do ImageMagick 6.5.7-8 (1623), $x era positivo ao deslocar para a esquerda e negativo ao deslocar para a direita, e $y era positivo ao deslocar uma imagem para cima e negativo ao deslocar uma imagem para baixo.
Em algum momento entre o ImageMagick 6.3.7 (1591) e o ImageMagick 6.5.7-8 (1623), os eixos de $x e $y foram invertidos, de modo que $x fosse negativo ao deslocar para a esquerda e positivo ao deslocar para a direita, e $y foi negativo ao deslocar uma imagem para cima e positivo ao deslocar uma imagem para baixo.
Em algum momento entre o ImageMagick 6.5.7-8 (1623) e o ImageMagick 6.6.9-7 (1641), os eixos de $x e $y foram revertidos para a funcionalidade pré-ImageMagick 6.5.7-8 (1623).

### Parâmetros

`width`
:   A nova largura

`height`
:   A nova altura

`x`
:   Posição X para o novo tamanho

`y`
:   Posição Y para o novo tamanho

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Veja também

- [Imagick::resizeImage()](imagick.resizeimage.md) - Dimensiona uma imagem
- [Imagick::thumbnailImage()](imagick.thumbnailimage.md) - Altera o tamanho de uma imagem
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
