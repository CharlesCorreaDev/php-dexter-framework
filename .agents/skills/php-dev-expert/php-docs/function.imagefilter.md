# Aplica um filtro a uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagefilter.php

---

# imagefilter

(PHP 5, PHP 7, PHP 8)

imagefilter — Aplica um filtro a uma imagem

### Descrição

function **imagefilter**([GdImage](class.gdimage.md) `$image`, [int](language.types.integer.md) `$filter`, [array](language.types.array.md)|[int](language.types.integer.md)|[float](language.types.float.md)|[bool](language.types.boolean.md) `...$args`): [bool](language.types.boolean.md)

**imagefilter()** aplica o filtro informado em
`filter` na imagem fornecida em `image`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`filter`
:   `filter` pode ser uma das seguintes constantes:

    - **`IMG_FILTER_NEGATE`**: Inverte todas as cores
      da imagem.
    - **`IMG_FILTER_GRAYSCALE`**: Converte a imagem em
      escala de cinza alterando os componentes vermelho, verde e azul para suas
      respectivas somas ponderadas, usando os mesmos coeficientes de cálculo de luminância (Y')
      da REC.601. Os componentes alfa são retidos. Para imagens de paleta, o
      resultado pode ser diferente devido a limitações da paleta.
    - **`IMG_FILTER_BRIGHTNESS`**: Altera o brilho
      da imagem. Use `args` para definir o nível de
      brilho. O intervalo de brilho é de -255 a 255.
    - **`IMG_FILTER_CONTRAST`**: Altera o contraste da
      imagem. Use `args` para definir o nível de
      contraste.
    - **`IMG_FILTER_COLORIZE`**: Parecida com
      **`IMG_FILTER_GRAYSCALE`**, exceto que pode-se especificar
      a cor. Use `args`, `arg2` e
      `arg3` na forma de
      `red` (vermelho), `green` (verde),
      `blue` (azul) e `arg4` para o canal
      `alpha` (alfa). O intervalo de cada cor é de 0 a 255.
    - **`IMG_FILTER_EDGEDETECT`**: Usa detecção de borda para
      destacar as bordas da imagem.
    - **`IMG_FILTER_EMBOSS`**: Faz alto relevo da imagem.
    - **`IMG_FILTER_GAUSSIAN_BLUR`**: Desfoca a imagem usando
      o método gaussiano.
    - **`IMG_FILTER_SELECTIVE_BLUR`**: Desfoca a imagem.
    - **`IMG_FILTER_MEAN_REMOVAL`**: Usa a remoção de média para
      alcançar um efeito de "esboço".
    - **`IMG_FILTER_SMOOTH`**: Torna a imagem mais suave.
      Use `args` para definir o nível de suavidade.
    - **`IMG_FILTER_PIXELATE`**: Aplica efeito de pixelização
      à imagem, use `args` para definir o tamanho do bloco
      e `arg2` para definir o modo do efeito de pixelização.
    - **`IMG_FILTER_SCATTER`**: Aplica efeito de dispersão
      à imagem, use `args` e
      `arg2` para definir a intensidade do efeito e
      adicionalmente `arg3` para aplicar o efeito somente
      em cores de pixels selecionadas.

`args`
:   - **`IMG_FILTER_BRIGHTNESS`**: Nível de brilho.
    - **`IMG_FILTER_CONTRAST`**: Nível de contraste.
    - **`IMG_FILTER_COLORIZE`**: Valor do componente vermelho.
    - **`IMG_FILTER_SMOOTH`**: Nível de suavidade.
    - **`IMG_FILTER_PIXELATE`**: Tamanho do bloco em pixels.
    - **`IMG_FILTER_SCATTER`**: Nível de subtração de efeito.
      Não pode ser maior ou igual ao nível de adição de efeito definido com
      `arg2`.

`arg2`
:   - **`IMG_FILTER_COLORIZE`**: Valor do componente verde.
    - **`IMG_FILTER_PIXELATE`**: Informa se deve ser usada efeito de pixelização
      avançada ou não (o padrão é **`false`**).
    - **`IMG_FILTER_SCATTER`**: Nível de adição de efeito.

`arg3`
:   - **`IMG_FILTER_COLORIZE`**: Valor do componente azul.
    - **`IMG_FILTER_SCATTER`**: Array opcional indexado com valores de cores
      nas quais os efeitos serão aplicados.

`arg4`
:   - **`IMG_FILTER_COLORIZE`**: Canal alfa, um valor
      entre 0 e 127. 0 indica completamente opaco e 127 indica
      completamente transparente.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md)
se `sub` ou `plus` puderem causar um estouro de limites
com **`IMG_FILTER_SCATTER`** definido em `filter`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora lança um [ValueError](class.valueerror.md) se `sub` ou `plus` puderem causar um estouro de limites com **`IMG_FILTER_SCATTER`** definido em `filter`. |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |
| 7.4.0 | Suporte a dispersão (**`IMG_FILTER_SCATTER`**) foi adicionado. |

### Examples

**Exemplo #1 Exemplo de escala de cinza com **imagefilter()****

```
<?php
$im = imagecreatefrompng('dave.png');

if($im && imagefilter($im, IMG_FILTER_GRAYSCALE))
{
    echo 'Imagem convertida para escala de cinza.';

    imagepng($im, 'dave.png');
}
else
{
    echo 'Conversão para escala de cinza falhou.';
}
?>
```

**Exemplo #2 Exemplo de brilho com **imagefilter()****

```
<?php
$im = imagecreatefrompng('sean.png');

if($im && imagefilter($im, IMG_FILTER_BRIGHTNESS, 20))
{
    echo 'Brilho da imagem alterado.';

    imagepng($im, 'sean.png');
}
else
{
    echo 'Alteração no brilho da imagem falhou.';
}
?>
```

**Exemplo #3 Exemplo de colorização com **imagefilter()****

```
<?php
$im = imagecreatefrompng('philip.png');

/* R, G, B, portanto 0, 255, 0 é verde */
if($im && imagefilter($im, IMG_FILTER_COLORIZE, 0, 255, 0))
{
    echo 'Imagem tonalizada em verde com sucesso.';

    imagepng($im, 'philip.png');
}
else
{
    echo 'Tonalização em verde falhou.';
}
?>
```

**Exemplo #4 Exemplo de inversão com **imagefilter()****

```
<?php
// Define a função de inversão de forma que seja portável
// para versões de php sem imagefilter()
function negate($im)
{
    if(function_exists('imagefilter'))
    {
        return imagefilter($im, IMG_FILTER_NEGATE);
    }

    for($x = 0; $x < imagesx($im); ++$x)
    {
        for($y = 0; $y < imagesy($im); ++$y)
        {
            $index = imagecolorat($im, $x, $y);
            $rgb = imagecolorsforindex($index);
            $color = imagecolorallocate($im, 255 - $rgb['red'], 255 - $rgb['green'], 255 - $rgb['blue']);

            imagesetpixel($im, $x, $y, $color);
        }
    }

    return(true);
}

$im = imagecreatefromjpeg('kalle.jpg');

if($im && negate($im))
{
    echo 'Imagem convertida com sucesso para cores invertidas.';

    imagejpeg($im, 'kalle.jpg', 100);
}
else
{
    echo 'Conversão para cores invertidas falhou.';
}
?>
```

**Exemplo #5 Exemplo de pixelização com **imagefilter()****

```
<?php
// Carrega a logomarca do PHP, necessáio criar duas instâncias
// para mostrar as diferenças
$logo1 = imagecreatefrompng('./php.png');
$logo2 = imagecreatefrompng('./php.png');

// Cria a instância da imagem onde as diferenças serão
// mostradas
$output = imagecreatetruecolor(imagesx($logo1) * 2, imagesy($logo1));

// Aplica a pixelização para cada instância, com um bloco
// de tamanho 3
imagefilter($logo1, IMG_FILTER_PIXELATE, 3);
imagefilter($logo2, IMG_FILTER_PIXELATE, 3, true);

// Funde as diferenças na imagem de saída
imagecopy($output, $logo1, 0, 0, 0, 0, imagesx($logo1) - 1, imagesy($logo1) - 1);
imagecopy($output, $logo2, imagesx($logo2), 0, 0, 0, imagesx($logo2) - 1, imagesy($logo2) - 1);

// Mostra a diferença
header('Content-Type: image/png');
imagepng($output);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Pixelização com imagefilter()](images/21009b70229598c6a80eef8b45bf282b-imagefilterpixelate.png)

**Exemplo #6 Exemplo de dispersão com **imagefilter()****

```
<?php
// Carrega a imagem
$logo = imagecreatefrompng('./php.png');

// Aplica um efeito bem leve de dispersão à imagem
imagefilter($logo, IMG_FILTER_SCATTER, 3, 5);

// Mostra a imagem com o efeito de dispersão
header('Content-Type: image/png');
imagepng($logo);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: dispersão com imagefilter()](images/21009b70229598c6a80eef8b45bf282b-scatter.png)

### Notas

> **Nota**:
>
> O resultado de **`IMG_FILTER_SCATTER`** é sempre aleatório.

### Veja também

- [imageconvolution()](function.imageconvolution.md) - Aplica uma matriz de convolução 3x3, usando coeficiente e deslocamento

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
