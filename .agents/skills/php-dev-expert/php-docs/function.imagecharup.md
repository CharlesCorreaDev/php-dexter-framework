# Desenha um caractere verticalmente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecharup.php

---

# imagecharup

(PHP 4, PHP 5, PHP 7, PHP 8)

imagecharup — Desenha um caractere verticalmente

### Descrição

function **imagecharup**(  
    [GdImage](class.gdimage.md) `$image`,  
    [GdFont](class.gdfont.md)|[int](language.types.integer.md) `$font`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [string](language.types.string.md) `$char`,  
    [int](language.types.integer.md) `$color`  
): [true](language.types.singleton.md)

Desenha o caractere `char` verticalmente na coordenada
especificada na imagem informada em `image`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`font`
:   Pode ser 1, 2, 3, 4, 5 para as fontes
    nativas na codificação latin2 (onde números maiores correspondem a fontes maiores) ou uma instância de [GdFont](class.gdfont.md),
    retornada por [imageloadfont()](function.imageloadfont.md).

`x`
:   Coordenada x do início.

`y`
:   Coordenada y do início.

`char`
:   O caractere a ser desenhado.

`color`
:   Um identificador de cor criado com [imagecolorallocate()](function.imagecolorallocate.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `font` agora aceita uma instância de [GdFont](class.gdfont.md) ou um [int](language.types.integer.md); anteriormente, apenas [int](language.types.integer.md) era aceito. |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imagecharup()****

```
<?php

$im = imagecreate(100, 100);

$string = 'Note que a primeira letra é um N';

$bg = imagecolorallocate($im, 255, 255, 255);
$black = imagecolorallocate($im, 0, 0, 0);

// mostra um "Z" na cor preta em um fundo branco
imagecharup($im, 3, 10, 10, $string, $black);

header('Content-type: image/png');
imagepng($im);

?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagecharup()](images/21009b70229598c6a80eef8b45bf282b-imagecharup.png)

### Veja também

- [imagechar()](function.imagechar.md) - Desenha um caractere horizontalmente
- [imageloadfont()](function.imageloadfont.md) - Carrega uma nova fonte

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
