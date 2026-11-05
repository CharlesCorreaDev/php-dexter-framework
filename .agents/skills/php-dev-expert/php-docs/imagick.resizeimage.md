# Dimensiona uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.resizeimage.php

---

# Imagick::resizeImage

(PECL imagick 2, PECL imagick 3)

Imagick::resizeImage — Dimensiona uma imagem

### Descrição

public function **Imagick::resizeImage**(  
    [int](language.types.integer.md) `$columns`,  
    [int](language.types.integer.md) `$rows`,  
    [int](language.types.integer.md) `$filter`,  
    [float](language.types.float.md) `$blur`,  
    [bool](language.types.boolean.md) `$bestfit` = **`false`**,  
    [bool](language.types.boolean.md) `$legacy` = **`false`**  
): [bool](language.types.boolean.md)

Dimensiona uma imagem para as dimensões desejadas com um
[filtro](imagick.constants.md#imagick.constants.filters).

> **Nota**:
>
> O comportamento do parâmetro `bestfit` mudou na Imagick 3.0.0.
> Antes desta versão, dadas as dimensões 400x400, uma imagem de dimensões 200x150 permaneceria
> intocada. Na Imagick 3.0.0 e superiores, a imagem será escalada para 400x300, pois
> este é o "melhor ajuste" para as dimensões fornecidas. Se o parâmetro `bestfit`
> for usado, tanto a largura quanto a altura devem ser informadas.

### Parâmetros

`columns`
:   Largura da imagem

`rows`
:   Altura da imagem

`filter`
:   Consulte a lista de [constantes de filtros](imagick.constants.md#imagick.constants.filters).

`blur`
:   O fator de desfoque onde > 1 é desfocado, < 1 é nítido.

`bestfit`
:   Parâmetro [bool](language.types.boolean.md) opcional.
    Se definido como 'true', a imagem é redimensionada para caber dentro das dimensões fornecidas
    preservando a proporção.

`legacy`
:   Parâmetro [bool](language.types.boolean.md) opcional.
    Se definido como 'true', os cálculos são feitos com a pequena falha de arredondamento
    que existia no Imagick antes da versão 3.4.0. Se definido como 'false', os cálculos
    devem produzir os mesmos resultados que as ferramentas de linha de comando do ImageMagick.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Adicionado parâmetro de ajuste opcional. Este método agora oferece suporte ao dimensionamento proporcional. Passe zero como qualquer parâmetro para dimensionamento proporcional. |
| PECL imagick 3.4.0 | Adicionado o parâmetro `legacy`. |

### Examples

**Exemplo #1 Exemplo de **Imagick::resizeImage()****

```
<?php
function resizeImage($imagePath, $width, $height, $filterType, $blur, $bestFit, $cropZoom) {
    // O fator de desfoque onde > 1 é desfocado, < 1 é nítido.
    $imagick = new \Imagick(realpath($imagePath));

    $imagick->resizeImage($width, $height, $filterType, $blur, $bestFit);

    $cropWidth = $imagick->getImageWidth();
    $cropHeight = $imagick->getImageHeight();

    if ($cropZoom) {
        $newWidth = $cropWidth / 2;
        $newHeight = $cropHeight / 2;

        $imagick->cropimage(
            $newWidth,
            $newHeight,
            ($cropWidth - $newWidth) / 2,
            ($cropHeight - $newHeight) / 2
        );

        $imagick->scaleimage(
            $imagick->getImageWidth() * 4,
            $imagick->getImageHeight() * 4
        );
    }

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
