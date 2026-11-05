# Compor uma imagem em outra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.compositeimage.php

---

# Imagick::compositeImage

(PECL imagick 2, PECL imagick 3)

Imagick::compositeImage — Compor uma imagem em outra

### Descrição

public function **Imagick::compositeImage**(  
    [Imagick](class.imagick.md) `$composite_object`,  
    [int](language.types.integer.md) `$composite`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

Compõe uma imagem em outra na posição especificada. Quaisquer argumentos extras necessários para o algoritmo de composição devem ser passados ​​para setImageArtifact com 'compose:args' como o primeiro parâmetro e os dados como o segundo parâmetro.

### Parâmetros

`composite_object`
:   Objeto Imagick que contém a imagem composta.

`compose`
:   Operador de composição. Consulte [Constantes de Operador
    de Composição](imagick.constants.md#imagick.constants.compositeop)

`x`
:   A posição da coluna da imagem composta

`y`
:   A posição da linha da imagem composta

`channel`
:   Forneça qualquer constante de canal válida para o modo de canal. Para
    aplicar a mais de um canal, combine constantes de tipo de canal usando
    operadores bit a bit. Consulte esta lista de [constantes de canal](imagick.constants.md#imagick.constants.channel).

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Usando **Imagick::compositeImage()**:**

Compõe duas imagens com o método de composição 'matemática'

```
<?php

// Equivalente a executar o comando
// convert src1.png src2.png -compose mathematics -define compose:args="1,0,-0.5,0.5" -composite output.png

$src1 = new \Imagick("./src1.png");
$src2 = new \Imagick("./src2.png");

$src1->setImageVirtualPixelMethod(Imagick::VIRTUALPIXELMETHOD_TRANSPARENT);
$src1->setImageArtifact('compose:args', "1,0,-0.5,0.5");
$src1->compositeImage($src2, Imagick::COMPOSITE_MATHEMATICS, 0, 0);
$src1->writeImage("./output.png");

?>
```

### Veja também

- [Imagick::setImageArtifact()](imagick.setimageartifact.md) - Definir artefato de imagem

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
