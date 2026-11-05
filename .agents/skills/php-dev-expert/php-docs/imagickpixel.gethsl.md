# Retorna a cor HSL normalizada do objeto ImagickPixel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixel.gethsl.php

---

# ImagickPixel::getHSL

(PECL imagick 2, PECL imagick 3)

ImagickPixel::getHSL — Retorna a cor HSL normalizada do objeto ImagickPixel

### Descrição

public function **ImagickPixel::getHSL**(): [array](language.types.array.md)

Retorna a cor HSL normalizada descrita pelo objeto ImagickPixel,
com cada um dos três valores como números de ponto flutuante entre 0.0
e 1.0.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o valor HSL em um array com as chaves "hue" (matiz),
"saturation" (saturação) e "luminosity" (luminosidade). Lança uma ImagickPixelException em caso de falha.

### Examples

**Exemplo #1 Exemplo básico de **Imagick::getHSL()****

```
<?php

$color = new ImagickPixel('rgb(90%, 10%, 10%)');

$colorInfo = $color->getHSL();

print_r($colorInfo);

?>
```

O exemplo acima produzirá:

```
Array
(
    [hue] => 0
    [saturation] => 0.80001220740379
    [luminosity] => 0.50000762951095
)
```

### Notas

> **Nota**:
>
> Disponível com a biblioteca ImageMagick versão 6.2.9 e superiores.

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
