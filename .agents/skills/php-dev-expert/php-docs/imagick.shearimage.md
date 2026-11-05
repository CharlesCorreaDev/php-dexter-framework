# Cria um paralelogramo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.shearimage.php

---

# Imagick::shearImage

(PECL imagick 2, PECL imagick 3)

Imagick::shearImage — Cria um paralelogramo

### Descrição

public function **Imagick::shearImage**([mixed](language.types.mixed.md) `$background`, [float](language.types.float.md) `$x_shear`, [float](language.types.float.md) `$y_shear`): [bool](language.types.boolean.md)

Desliza uma borda de uma imagem ao longo do eixo X ou Y, criando um paralelogramo.
Um cisalhamento na direção X desliza uma aresta ao longo do eixo X, enquanto um cisalhamento
na direção Y desliza uma aresta ao longo do eixo Y. A quantidade de cisalhamento é controlada
por um ângulo de cisalhamento. Para cisalhamentos na direção X, x\_shear é medido em relação ao
eixo Y e, da mesma forma, para cisalhamentos na direção Y, y\_shear é medido
em relação ao eixo X. Os triângulos vazios que sobrarem do corte da imagem
são preenchidos com a cor de fundo.

### Parâmetros

`background`
:   A cor de fundo.

`x_shear`
:   O número de graus para cisalhar no eixo X.

`y_shear`
:   O número de graus para cisalhar no eixo Y.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Agora permite uma string representando a cor como primeiro parâmetro. As versões anteriores permitiam apenas um objeto ImagickPixel. |

### Examples

**Exemplo #1 Exemplo de **Imagick::shearImage()****

```
<?php
function shearImage($imagePath, $color, $shearX, $shearY) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->shearimage($color, $shearX, $shearY);
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
