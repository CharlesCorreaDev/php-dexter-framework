# Aloca uma cor para uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecolorallocatealpha.php

---

# imagecolorallocatealpha

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

imagecolorallocatealpha — Aloca uma cor para uma imagem

### Descrição

function **imagecolorallocatealpha**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$red`,  
    [int](language.types.integer.md) `$green`,  
    [int](language.types.integer.md) `$blue`,  
    [int](language.types.integer.md) `$alpha`  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

**imagecolorallocatealpha()** se comporta de forma idêntica a
[imagecolorallocate()](function.imagecolorallocate.md) com a adição do parâmetro de
transparência `alpha`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`red`
:   Valor do componente vermelho.

`green`
:   Valor do componente verde.

`blue`
:   Valor do componente azul.

`alpha`
:   Um valor entre `0` e `127`.
    `0` indica completamente opaco enquanto que
    `127` indica completamente transparente.

Os parâmetros `red`, `green`
e `blue` são inteiros
entre 0 e 255 ou haxadecimais entre 0x00 e 0xFF.

### Valor Retornado

Um identificador de cor ou **`false`** se a alocação falhar.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de uso de **imagecolorallocatealpha()****

```
<?php
$size = 300;
$image=imagecreatetruecolor($size, $size);

// algo para obter fundo branco com borda preta
$back = imagecolorallocate($image, 255, 255, 255); //fundo
$border = imagecolorallocate($image, 0, 0, 0); //borda
imagefilledrectangle($image, 0, 0, $size - 1, $size - 1, $back);
imagerectangle($image, 0, 0, $size - 1, $size - 1, $border);

$yellow_x = 100;
$yellow_y = 75;
$red_x    = 120;
$red_y    = 165;
$blue_x   = 187;
$blue_y   = 125;
$radius   = 150;

// aloca cores com valores de alfa
$yellow = imagecolorallocatealpha($image, 255, 255, 0, 75);
$red    = imagecolorallocatealpha($image, 255, 0, 0, 75);
$blue   = imagecolorallocatealpha($image, 0, 0, 255, 75);

// desenhando 3 círculos sobrepostos
imagefilledellipse($image, $yellow_x, $yellow_y, $radius, $radius, $yellow);
imagefilledellipse($image, $red_x, $red_y, $radius, $radius, $red);
imagefilledellipse($image, $blue_x, $blue_y, $radius, $radius, $blue);

// não esquecer de emitir um cabeçalho corretamente!
header('Content-Type: image/png');

// e finalmente, mostra o resultado
imagepng($image);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Exemplo de uso de imagecolorallocatealpha()](images/21009b70229598c6a80eef8b45bf282b-imagecolorallocatealpha.png)

**Exemplo #2 Converte valores típicos de alfa para uso com **imagecolorallocatealpha()****

Normalmente, valores de alfa `0` designam pixels totalmente transparentes,
e o canal alfa tem 8 bits. Para converter taia valores de alfa para que sejam compatíveis
com **imagecolorallocatealpha()**, uma aritmética simples é
suficiente:

```
<?php
$alpha8 = 0; // totalmente transparente
var_dump(127 - ($alpha8 >> 1));
$alpha8 = 255; // totalmente opaco
var_dump(127 - ($alpha8 >> 1));
?>
```

O exemplo acima produzirá:

```
int(127)
int(0)
```

### Veja também

- [imagecolorallocate()](function.imagecolorallocate.md) - Aloca uma cor para uma imagem
- [imagecolordeallocate()](function.imagecolordeallocate.md) - Desaloca uma cor de uma imagem

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
