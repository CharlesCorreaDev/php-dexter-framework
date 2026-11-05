# Redimensiona imagem de forma adaptativa com triangulação dependente de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.adaptiveresizeimage.php

---

# Imagick::adaptiveResizeImage

(PECL imagick 2, PECL imagick 3)

Imagick::adaptiveResizeImage — Redimensiona imagem de forma adaptativa com triangulação dependente de dados

### Descrição

public function **Imagick::adaptiveResizeImage**(  
    [int](language.types.integer.md) `$columns`,  
    [int](language.types.integer.md) `$rows`,  
    [bool](language.types.boolean.md) `$bestfit` = **`false`**,  
    [bool](language.types.boolean.md) `$legacy` = **`false`**  
): [bool](language.types.boolean.md)

Redimensiona a imagem de forma adaptativa com triangulação dependente de dados. Evita
o desfoque em mudanças súbitas de cores. Mais útil quando usado para reduzir
imagens ligeiramente para um "tamanho da web"; pode não parecer bom
quando uma imagem em tamanho real é redimensionada de forma adaptativa para uma miniatura.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

> **Nota**:
>
> O comportamento do parâmetro `bestfit` mudou na Imagick 3.0.0.
> Antes desta versão, dadas as dimensões 400x400, uma imagem de dimensões 200x150 permaneceria
> intocada. Na Imagick 3.0.0 e superiores, a imagem será escalada para 400x300, pois
> este é o "melhor ajuste" para as dimensões fornecidas. Se o parâmetro `bestfit`
> for usado, tanto a largura quanto a altura devem ser informadas.

### Parâmetros

`columns`
:   O número de colunas na imagem dimensionada.

`rows`
:   O número de linhas na imagem dimensionada.

`bestfit`
:   Informa se a imagem deve ser ajustada dentro das dimensões fornecidas, preservando
    a proporção.

`legacy`
:   Parâmetro [bool](language.types.boolean.md) opcional.
    Se definido como 'true', os cálculos são feitos com a pequena falha de arredondamento
    que existia no Imagick antes da versão 3.4.0. Se definido como 'false', os cálculos
    devem produzir os mesmos resultados que as ferramentas de linha de comando do ImageMagick.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Adicionado o parâmetro opcional bestfit. |
| PECL imagick 2.1.0 | Este método agora suporta redimensionamento proporcional. Passe zero como um dos parâmetros para redimensionamento proporcional. |
| PECL imagick 3.4.0 | Adicionado o parâmetro `legacy`. |

### Examples

**Exemplo #1 Usando **Imagick::adaptiveResizeImage()****

Redimensiona uma imagem para um tamanho padrão para a web. Este método funciona melhor
ao redimensionar para um tamanho ligeiramente menor que o tamanho da imagem
anterior.

```
<?php
header('Content-type: image/jpeg');

$image = new Imagick('image.jpg');
$image->adaptiveResizeImage(1024,768);

echo $image;
?>
```

### Veja também

- [Imagick::chopImage()](imagick.chopimage.md) - Remove uma região de uma imagem e corta
- [Imagick::cropImage()](imagick.cropimage.md) - Extrai uma região da imagem
- [Imagick::magnifyImage()](imagick.magnifyimage.md) - Dimensiona uma imagem proporcionalmente 2x
- [Imagick::minifyImage()](imagick.minifyimage.md) - Dimensiona uma imagem proporcionalmente à metade do seu tamanho
- [Imagick::resizeImage()](imagick.resizeimage.md) - Dimensiona uma imagem
- [Imagick::scaleImage()](imagick.scaleimage.md) - Dimensiona o tamanho de uma imagem
- [Imagick::shaveImage()](imagick.shaveimage.md) - Raspa pixels das bordas da imagem
- [Imagick::thumbnailImage()](imagick.thumbnailimage.md) - Altera o tamanho de uma imagem
- [Imagick::trimImage()](imagick.trimimage.md) - Apara as bordas da imagem

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
