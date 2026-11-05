# Distorce uma imagem usando vários métodos de distorção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.distortimage.php

---

# Imagick::distortImage

(PECL imagick 2 >= 2.0.1, PECL imagick 3)

Imagick::distortImage — Distorce uma imagem usando vários métodos de distorção

### Descrição

public function **Imagick::distortImage**([int](language.types.integer.md) `$method`, [array](language.types.array.md) `$arguments`, [bool](language.types.boolean.md) `$bestfit`): [bool](language.types.boolean.md)

Distorce uma imagem usando vários métodos de distorção, mapeando pesquisas
de cores da imagem de origem para uma nova imagem de destino, geralmente do mesmo
tamanho da imagem de origem, a menos que 'bestfit' esteja definido como **`true`**.

Se 'bestfit' estiver ativado e a distorção permitir, a imagem de destino
será ajustada para garantir que toda a 'imagem' de origem caiba na
imagem de destino final, que será dimensionada e deslocada de acordo. Além disso,
em muitos casos, o deslocamento virtual da imagem de origem será levado em
consideração no mapeamento.

Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

### Parâmetros

`method`
:   O método de distorção de imagem. Consulte as [constantes de distorção](imagick.constants.md#imagick.constants.distortion)

`arguments`
:   Os argumentos para este método de distorção

`bestfit`
:   Tentativa de redimensionar o destino para caber na fonte distorcida

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Usando **Imagick::distortImage()****

Distorce uma imagem e exibe-a no navegador.

```
<?php
/* Cria novo objeto */
$im = new Imagick();

/* Cria novo padrão xadrez */
$im->newPseudoImage(100, 100, "pattern:checkerboard");

/* Define o formato da imagem como PNG */
$im->setImageFormat('png');

/* Preenche novas áreas visíveis com transparente */
$im->setImageVirtualPixelMethod(Imagick::VIRTUALPIXELMETHOD_TRANSPARENT);

/* Ativa fosco */
$im->setImageMatte(true);

/* Pontos de controle para a distorção */
$controlPoints = array( 10, 10,
                        10, 5,

                        10, $im->getImageHeight() - 20,
                        10, $im->getImageHeight() - 5,

                        $im->getImageWidth() - 10, 10,
                        $im->getImageWidth() - 10, 20,

                        $im->getImageWidth() - 10, $im->getImageHeight() - 10,
                        $im->getImageWidth() - 10, $im->getImageHeight() - 30);

/* Realiza a distorção */
$im->distortImage(Imagick::DISTORTION_PERSPECTIVE, $controlPoints, true);

/* Exibe a imagem */
header("Content-Type: image/png");
echo $im;
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo : Usando Imagick::distortImage()](images/c0d23d2d6769e53e24a1b3136c064577-distortImage.png)

### Veja também

- [Imagick::blurImage()](imagick.blurimage.md) - Adiciona filtro de desfoque à imagem
- [Imagick::motionBlurImage()](imagick.motionblurimage.md) - Simula desfoque de movimento
- [Imagick::radialBlurImage()](imagick.radialblurimage.md) - Desfoca uma imagem de forma radial

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
