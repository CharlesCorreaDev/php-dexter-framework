# Aplica uma função na imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.functionimage.php

---

# Imagick::functionImage

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::functionImage — Aplica uma função na imagem

### Descrição

public function **Imagick::functionImage**([int](language.types.integer.md) `$function`, [array](language.types.array.md) `$arguments`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Aplica uma expressão aritmética, relacional ou lógica a uma pseudoimagem.

Consulte também [» Exemplos do
ImageMagick v6 - Transformações de Imagens — Função, Avaliação de Multi-Argumentos](https://usage.imagemagick.org/transform/#function)

Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.9 ou superior.

### Parâmetros

`function`
:   Consulte a lista de [constantes de função](imagick.constants.md#imagick.constants.function)

`arguments`
:   Array de argumentos a serem passados ​​para esta função.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Cria um gradiente senoidal**

```
<?php
$imagick = new Imagick();
$imagick->newPseudoImage(200, 200, 'gradient:black-white');
$arguments = array(3, -90);
$imagick->functionImage(Imagick::FUNCTION_SINUSOID, $arguments);

header("Content-Type: image/png");
$imagick->setImageFormat("png");
echo $imagick->getImageBlob();
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída da criação de um gradiente senoidal](images/c0d23d2d6769e53e24a1b3136c064577-functionImage_sinusoidal.png)

**Exemplo #2 Cria um gradiente a partir do polinômio (4x^2 - 4x + 1)**

```
<?php
$imagick = new Imagick();
$imagick->newPseudoImage(200, 200, 'gradient:black-white');
$arguments = array(4, -4, 1);
$imagick->functionImage(Imagick::FUNCTION_POLYNOMIAL, $arguments);

header("Content-Type: image/png");
$imagick->setimageformat("png");
echo $imagick->getImageBlob();
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída da criação de um gradiente polinomial](images/c0d23d2d6769e53e24a1b3136c064577-functionImage_polynomial.png)

**Exemplo #3
Cria um gradiente complexo a partir do
polinômio (4x^2 - 4x^2 + 1) modulado por um gradiente senoidal**

```
<?php
$imagick1 = new Imagick();
$imagick1->newPseudoImage(200, 200, 'gradient:black-white');
$arguments = array(9, -90);
$imagick1->functionImage(Imagick::FUNCTION_SINUSOID, $arguments);

$imagick2 = new Imagick();
$imagick2->newPseudoImage(200, 200, 'gradient:black-white');
$arguments = array(0.5, 0);
$imagick2->functionImage(Imagick::FUNCTION_SINUSOID, $arguments);
$imagick1->compositeimage($imagick2, Imagick::COMPOSITE_MULTIPLY, 0, 0);

header("Content-Type: image/png");
$imagick1->setImageFormat("png");
echo $imagick1->getImageBlob();
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída da criação de um gradiente complexo](images/c0d23d2d6769e53e24a1b3136c064577-functionImage_multiplied.png)

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
