# Define a cor HSL normalizada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixel.sethsl.php

---

# ImagickPixel::setHSL

(PECL imagick 2, PECL imagick 3)

ImagickPixel::setHSL — Define a cor HSL normalizada

### Descrição

public function **ImagickPixel::setHSL**([float](language.types.float.md) `$hue`, [float](language.types.float.md) `$saturation`, [float](language.types.float.md) `$luminosity`): [bool](language.types.boolean.md)

Define a cor descrita pelo objeto ImagickPixel usando valores normalizados
para matiz, saturação e luminosidade.

### Parâmetros

`hue`
:   O valor normalizado para matiz, descrito como um arco fracionário
    (entre 0 e 1) do círculo de matiz, onde o valor zero é
    vermelho.

`saturation`
:   O valor normalizado para saturação, com 1 como saturação total.

`luminosity`
:   O valor normalizado para luminosidade, em uma escala de preto em
    0 a branco em 1, com o valor HS total em luminosidade 0.5.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Use **ImagickPixel::setHSL()** para modificar uma cor**

```
<?php

// Cria uma cor vermelha quase pura
$color = new ImagickPixel('rgb(90%, 10%, 10%)');

// Obtém seus valores HSL
$colorInfo = $color->getHSL();

// Rotaciona o matiz em 180 graus
$newHue = $colorInfo['hue'] + 0.5;
if ($newHue > 1) {
    $newHue = $newHue - 1;
}

// Define o ImagickPixel com a nova cor
$colorInfo = $color->setHSL($newHue, $colorInfo['saturation'], $colorInfo['luminosity']);

// Verifica se a nova cor é azul/verde
$colorInfo = $color->getcolor();
print_r($colorInfo);

?>
```

O exemplo acima produzirá:

```
Array
(
    [r] => 26
    [g] => 230
    [b] => 230
    [a] => 255
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
