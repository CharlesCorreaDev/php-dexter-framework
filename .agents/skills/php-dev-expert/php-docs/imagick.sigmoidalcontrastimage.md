# Ajusta o contraste de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.sigmoidalcontrastimage.php

---

# Imagick::sigmoidalContrastImage

(PECL imagick 2, PECL imagick 3)

Imagick::sigmoidalContrastImage — Ajusta o contraste de uma imagem

### Descrição

public function **Imagick::sigmoidalContrastImage**(  
    [bool](language.types.boolean.md) `$sharpen`,  
    [float](language.types.float.md) `$alpha`,  
    [float](language.types.float.md) `$beta`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

Ajusta o contraste de uma imagem com um algoritmo de contraste sigmoide
não linear. Aumenta o contraste da imagem usando uma função de transferência
sigmoide sem saturar realces ou sombras. O parâmetro 'alpha' indica
quanto aumentar o contraste (0 é nada; 3 é típico; 20 é
muito); o parâmetro 'beta' indica onde os tons médios caem na imagem
resultante (0 é branco; 50 é cinza médio; 100 é preto). Defina 'sharpen'
**`true`** para aumentar o contraste da imagem, caso contrário o contraste será reduzido.

Consulte também [» Exemplos do ImageMagick
v6 - Transformações de Imagem - Constraste Não-linear Sigmoide](https://usage.imagemagick.org/color_mods/#sigmoidal)

### Parâmetros

`sharpen`
:   Se definido para true, aumenta o contraste, se definido para false, diminui o contraste.

`alpha`
:   A quantidade de contraste a ser aplicada. 1 é muito pouco, 5 é uma quantia significativa, 20 é extremo.

`beta`
:   Define onde estará o ponto médio do gradiente. Este valor deve estar no intervalo de 0 a 1 - multiplicado pelo valor Quantum do ImageMagick.

`channel`
:   Em quais canais de cores o contraste será aplicado.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1
Cria uma imagem gradiente usando **Imagick::sigmoidalContrastImage()**
adequado para mesclar duas imagens suavemente, com a mesclagem
definida por $contrast e $midpoint**

```
<?php

function generateBlendImage($width, $height, $contrast = 10, $midpoint = 0.5) {
    $imagick = new Imagick();
    $imagick->newPseudoImage($width, $height, 'gradient:black-white');
    $quanta = $imagick->getQuantumRange();
    $imagick->sigmoidalContrastImage(true, $contrast, $midpoint * $quanta["quantumRangeLong"]);

    return $imagick;
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
