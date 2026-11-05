# Retorna a cor como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixel.getcolorasstring.php

---

# ImagickPixel::getColorAsString

(PECL imagick 2 >= 2.1.0, PECL imagick 3)

ImagickPixel::getColorAsString — Retorna a cor como uma string

### Descrição

public function **ImagickPixel::getColorAsString**(): [string](language.types.string.md)

Retorna a cor do objeto ImagickPixel como uma string.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a cor do objeto ImagickPixel como uma string.

### Examples

**Exemplo #1 Uso básico de **Imagick::getColorAsString()****

```
<?php

// Cria um ImagickPixel com a cor predefinida 'brown' (marrom)
$color = new ImagickPixel('brown');

$color->setColorValue(Imagick::COLOR_ALPHA, 64 / 256.0);

$colorInfo = $color->getColorAsString();

print_r($colorInfo);
?>
```

O exemplo acima produzirá:

```
rgb(165,42,42)
```

### Notas

> **Nota**:
> **Alfa não retornado**  
>
> Esta função não retorna o valor alfa da cor na string.

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
