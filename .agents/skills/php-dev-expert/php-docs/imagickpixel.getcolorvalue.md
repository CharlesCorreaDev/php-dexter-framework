# Obtém o valor normalizado do canal de cores fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixel.getcolorvalue.php

---

# ImagickPixel::getColorValue

(PECL imagick 2, PECL imagick 3)

ImagickPixel::getColorValue — Obtém o valor normalizado do canal de cores fornecido

### Descrição

public function **ImagickPixel::getColorValue**([int](language.types.integer.md) `$color`): [float](language.types.float.md)

Recupera o valor do canal de cores especificado, como um número de ponto
flutuante entre 0 e 1.

### Parâmetros

`color`
:   A cor cujo valor será obtido, especificada como uma das constantes de cor do
    Imagick. Pode ser uma das cores RGB, cores CMYK, alfa e
    opacidade, por exemplo (Imagick::COLOR\_BLUE, Imagick::COLOR\_MAGENTA).

### Valor Retornado

O valor do canal, como um número de ponto flutuante normalizado, lançando uma
ImagickPixelException em caso de erro.

### Examples

**Exemplo #1 Uso básico de **Imagick::getColorValue()****

```
<?php

$color = new ImagickPixel('rgba(90%, 20%, 20%, 0.75)');

echo "Valor de alfa é ".$color->getColorValue(Imagick::COLOR_ALPHA).PHP_EOL;
echo "".PHP_EOL;
echo "Valor de vermelho é ".$color->getColorValue(Imagick::COLOR_RED).PHP_EOL;
echo "Valor de verde é ".$color->getColorValue(Imagick::COLOR_GREEN).PHP_EOL;
echo "Valor de azul é ".$color->getColorValue(Imagick::COLOR_BLUE).PHP_EOL;
echo "".PHP_EOL;
echo "Valor de ciano é ".$color->getColorValue(Imagick::COLOR_CYAN).PHP_EOL;
echo "Valor de magenta é ".$color->getColorValue(Imagick::COLOR_MAGENTA).PHP_EOL;
echo "Valor de amarelo é ".$color->getColorValue(Imagick::COLOR_YELLOW).PHP_EOL;
echo "Valor de preto é ".$color->getColorValue(Imagick::COLOR_BLACK).PHP_EOL;

?>
```

O exemplo acima produzirá:

```
Valor de alfa é 0.74999618524453

Valor de vermelho é 0.90000762951095
Valor de verde é 0.2
Valor de azul é 0.2

Valor de ciano é 0.90000762951095
Valor de magenta é 0.2
Valor de amarelo é 0.2
Valor de preto é 0
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
