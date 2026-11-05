# Preenchimento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagefill.php

---

# imagefill

(PHP 4, PHP 5, PHP 7, PHP 8)

imagefill — Preenchimento

### Descrição

function **imagefill**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$color`  
): [true](language.types.singleton.md)

Esta função realiza um preenchimento iniciando na coordenada fornecida
(canto superior esquerdo é 0, 0) com a cor especificada em `color`, na imagem
`image`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`x`
:   Coordenada x do ponto de partida.

`y`
:   Coordenada y do ponto de partida.

`color`
:   A cor de preenchimento. Um identificador de cor criado com [imagecolorallocate()](function.imagecolorallocate.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imagefill()****

```
<?php

$im = imagecreatetruecolor(100, 100);

// define o fundo vermelho
$red = imagecolorallocate($im, 255, 0, 0);
imagefill($im, 0, 0, $red);

header('Content-type: image/png');
imagepng($im);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagefill()](images/21009b70229598c6a80eef8b45bf282b-imagefill.png)

### Veja também

- [imagecolorallocate()](function.imagecolorallocate.md) - Aloca uma cor para uma imagem

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
