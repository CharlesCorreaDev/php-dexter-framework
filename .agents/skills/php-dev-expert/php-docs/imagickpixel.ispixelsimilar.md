# Verifica a distância entre esta cor e uma outra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixel.ispixelsimilar.php

---

# ImagickPixel::isPixelSimilar

(PECL imagick 3 >= 3.3.0)

ImagickPixel::isPixelSimilar — Verifica a distância entre esta cor e uma outra

### Descrição

public function **ImagickPixel::isPixelSimilar**([ImagickPixel](class.imagickpixel.md) `$color`, [float](language.types.float.md) `$fuzz`): [bool](language.types.boolean.md)

Verifica a distância entre a cor descrita por este objeto
ImagickPixel e a do objeto fornecido, traçando seus valores RGB
no cubo de cores. Se a distância entre os dois pontos for menor que
o valor de fuzz fornecido, as cores serão semelhantes.
Este método substitui [ImagickPixel::isSimilar()](imagickpixel.issimilar.md)
e normaliza corretamente o valor fuzz para o QuantumRange do ImageMagick.

### Parâmetros

`color`
:   O objeto ImagickPixel para comparar com este objeto.

`fuzz`
:   A distância máxima dentro da qual estas cores serão consideradas similares.
    O máximo teórico para este valor é a raiz quadrada de três
    (1.732).

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
