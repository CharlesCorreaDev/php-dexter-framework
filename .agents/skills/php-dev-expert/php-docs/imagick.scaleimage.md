# Dimensiona o tamanho de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.scaleimage.php

---

# Imagick::scaleImage

(PECL imagick 2, PECL imagick 3)

Imagick::scaleImage — Dimensiona o tamanho de uma imagem

### Descrição

public function **Imagick::scaleImage**(  
    [int](language.types.integer.md) `$columns`,  
    [int](language.types.integer.md) `$rows`,  
    [bool](language.types.boolean.md) `$bestfit` = **`false`**,  
    [bool](language.types.boolean.md) `$legacy` = **`false`**  
): [bool](language.types.boolean.md)

Dimensiona o tamanho de uma imagem para as dimensões fornecidas. O outro parâmetro
será calculado se 0 for passado como qualquer um dos parâmetros.

> **Nota**:
>
> O comportamento do parâmetro `bestfit` mudou na Imagick 3.0.0.
> Antes desta versão, dadas as dimensões 400x400, uma imagem de dimensões 200x150 permaneceria
> intocada. Na Imagick 3.0.0 e superiores, a imagem será escalada para 400x300, pois
> este é o "melhor ajuste" para as dimensões fornecidas. Se o parâmetro `bestfit`
> for usado, tanto a largura quanto a altura devem ser informadas.

### Parâmetros

`columns`
:   O número de colunas na imagem redimensionada.

`rows`
:   O número de linhas na imagem redimensionada.

`bestfit`
:   Informa se a imagem deve caber nas dimensões fornecidas, preservando
    a proporção.

`legacy`
:   Parâmetro [bool](language.types.boolean.md) opcional.
    Se definido como 'true', os cálculos são feitos com o pequeno bug de arredondamento
    que existia no Imagick antes da versão 3.4.0. Se definido como 'false', os cálculos
    devem produzir os mesmos resultados que as ferramentas de linha de comando do ImageMagick.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Adicionado parâmetro de ajuste opcional. Este método agora oferece suporte ao dimensionamento proporcional. Passe zero como qualquer parâmetro para dimensionamento proporcional. |
| PECL imagick 3.4.0 | Adicionado o parâmetro `legacy`. |

### Examples

**Exemplo #1 Exemplo de **Imagick::scaleImage()****

```
<?php
function scaleImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->scaleImage(150, 150, true);
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
