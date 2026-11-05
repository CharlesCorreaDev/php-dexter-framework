# Rotaciona uma imagem em um ângulo informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagerotate.php

---

# imagerotate

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

imagerotate — Rotaciona uma imagem em um ângulo informado

### Descrição

function **imagerotate**([GdImage](class.gdimage.md) `$image`, [float](language.types.float.md) `$angle`, [int](language.types.integer.md) `$background_color`): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

Rotaciona a imagem informada em `image` usando o ângulo, em graus, definido por
`angle`.

O centro de rotação é o centro da image, e a imagem rotacionada
pode ter dimensões diferentes da imagem original.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`angle`
:   Ângulo de rotação, em graus. O ângulo de rotação é interpretado como o
    número de graus a rotacionar a imagem no sentido anti-horário.

`background_color`
:   Especifica a cor da área não coberta após a rotação.

### Valor Retornado

Retorna um objeto de imagem para a imagem rotacionada, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | O parâmetro não utilizado `ignore_transparent` foi completamente removido. |
| 8.0.0 | Em caso de sucesso, a função agora retorna uma instância [GDImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |
| 8.0.0 | O parâmetrop não utilizado `ignore_transparent` agora espera um [bool](language.types.boolean.md); anteriormente era esperado um [int](language.types.integer.md). |

### Examples

**Exemplo #1 Rotaciona a imagem em 180 graus**

Este exemplo rotaciona a imagem em 180 graus - de cabeça para baixo.

```
<?php
// Arquivo e rotação
$filename = 'test.jpg';
$degrees = 180;

// Tipo de conteúdo
header('Content-type: image/jpeg');

// Carrega
$source = imagecreatefromjpeg($filename);

// Rotaciona
$rotate = imagerotate($source, $degrees, 0);

// Mostra
imagejpeg($rotate);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Rotaciona uma imagem em 180 graus](images/21009b70229598c6a80eef8b45bf282b-imagerotate.jpg)

### Notas

> **Nota**:
>
> Esta função é afetada pelo método de interpolação definido por [imagesetinterpolation()](function.imagesetinterpolation.md).

### Veja também

- [imagesetinterpolation()](function.imagesetinterpolation.md) - Define o método de interpolação

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
