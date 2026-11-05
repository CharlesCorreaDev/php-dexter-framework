# Define o valor normalizado de um dos canais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixel.setcolorvalue.php

---

# ImagickPixel::setColorValue

(PECL imagick 2, PECL imagick 3)

ImagickPixel::setColorValue — Define o valor normalizado de um dos canais

### Descrição

public function **ImagickPixel::setColorValue**([int](language.types.integer.md) `$color`, [float](language.types.float.md) `$value`): [bool](language.types.boolean.md)

Define o valor do canal especificado deste objeto para o valor
fornecido, que deve estar entre 0 e 1. Esta função pode ser usada para
fornecer um canal de opacidade a um objeto ImagickPixel.

### Parâmetros

`color`
:   Uma das constantes de cor Imagick, ex.: \Imagick::COLOR\_GREEN ou \Imagick::COLOR\_ALPHA.

`value`
:   O valor para o qual este canal será definido, numa faixa de 0 a 1.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Uso básico de **Imagick::setColorValue()****

```
<?php

$color  = new \ImagickPixel('firebrick');

$color->setColorValue(Imagick::COLOR_ALPHA, 0.5);

print_r($color->getcolor(true));
?>
```

O exemplo acima produzirá:

```
Array
(
    [r] => 0.69803921568627
    [g] => 0.13333333333333
    [b] => 0.13333333333333
    [a] => 0.50000762951095
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
