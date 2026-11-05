# Altera o tamanho de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.thumbnailimage.php

---

# Imagick::thumbnailImage

(PECL imagick 2, PECL imagick 3)

Imagick::thumbnailImage — Altera o tamanho de uma imagem

### Descrição

public function **Imagick::thumbnailImage**(  
    [int](language.types.integer.md) `$columns`,  
    [int](language.types.integer.md) `$rows`,  
    [bool](language.types.boolean.md) `$bestfit` = **`false`**,  
    [bool](language.types.boolean.md) `$fill` = **`false`**,  
    [bool](language.types.boolean.md) `$legacy` = **`false`**  
): [bool](language.types.boolean.md)

Altera o tamanho de uma imagem para as dimensões fornecidas e remove quaisquer
perfis associados. O objetivo é produzir imagens em miniatura de baixo
custo, adequadas para exibição na Web.
Se **`true`** for informado no terceiro parâmetro, os parâmetros 'columns' (colunas) e 'rows' (linhas)
serão usados ​​como máximos para cada lado. Ambos os lados serão reduzidos até
corresponderem ou ficarem menores que o parâmetro fornecido para o lado.

> **Nota**:
>
> O comportamento do parâmetro `bestfit` mudou na Imagick 3.0.0.
> Antes desta versão, dadas as dimensões 400x400, uma imagem de dimensões 200x150 permaneceria
> intocada. Na Imagick 3.0.0 e superiores, a imagem será escalada para 400x300, pois
> este é o "melhor ajuste" para as dimensões fornecidas. Se o parâmetro `bestfit`
> for usado, tanto a largura quanto a altura devem ser informadas.

### Parâmetros

`columns`
:   Largura da imagem.

`rows`
:   Altura da imagem.

`bestfit`
:   Informa se os valores máximos devem ser forçados.

`fill`
:   Se a imagem não preencher completamente a caixa, ela será preenchida com
    a cor de fundo da imagem.

`legacy`
:   Arredonda para baixo a menor dimensão em vez de arredondar para o inteiro mais próximo.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::thumbnailImage()****

```
<?php
function thumbnailImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->setbackgroundcolor('rgb(64, 64, 64)');
    $imagick->thumbnailImage(100, 100, true, true);
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
