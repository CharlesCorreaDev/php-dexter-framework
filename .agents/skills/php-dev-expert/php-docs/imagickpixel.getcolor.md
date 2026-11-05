# Retorna a cor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixel.getcolor.php

---

# ImagickPixel::getColor

(PECL imagick 2, PECL imagick 3)

ImagickPixel::getColor — Retorna a cor

### Descrição

public function **ImagickPixel::getColor**([int](language.types.integer.md) `$normalized` = 0): [array](language.types.array.md)

Retorna a cor descrita pelo objeto ImagickPixel, como um array. Se a cor tiver um
canal de opacidade definido, ele será fornecido como o quarto valor da lista.

### Parâmetros

`normalized`
:   Normaliza os valores de cor. Possíveis valores são `0`,
    `1` ou `2`.

    **Lista de valores possíveis para `normalized`**

    | `normalized` | Descrição |
    | --- | --- |
    | `0` | Os valores RGB são retornados como [int](language.types.integer.md) no intervalo `0` a `255` (inclusive). O valor alfa é retornado como [int](language.types.integer.md) e pode ser `0` ou `1`. |
    | `1` | Os valores RGB são retornados como [float](language.types.float.md) no intervalo `0` a `1` (inclusive). |
    | `2` | Os valores RGB são retornados como [int](language.types.integer.md) no intervalo `0` a `255` (inclusive). |

### Valor Retornado

Um array de calores de canal. Lança uma ImagickPixelException em caso de erro.

### Examples

**Exemplo #1 Uso básico de **Imagick::getColor()****

```
<?php

// Cria um ImagickPixel com a cor predefinida 'brown' (marrom)
$color = new ImagickPixel('brown');

// Define a cor com alfa de 25%
$color->setColorValue(Imagick::COLOR_ALPHA, 64 / 256.0);

$colorInfo = $color->getColor();

echo "Valores padrão:".PHP_EOL;
print_r($colorInfo);

$colorInfo = $color->getColor(1);

echo "Valores normalizados:".PHP_EOL;
print_r($colorInfo);

?>
```

O exemplo acima produzirá:

```
Valores padrão:
Array
(
    [r] => 165
    [g] => 42
    [b] => 42
    [a] => 0
)
Valores normalizados:
Array
(
    [r] => 0.64705882352941
    [g] => 0.16470588235294
    [b] => 0.16470588235294
    [a] => 0.25000381475547
)
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
