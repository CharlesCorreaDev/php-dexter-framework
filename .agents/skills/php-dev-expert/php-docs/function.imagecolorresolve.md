# Obtém o índice da cor especificada ou a alternativa mais próxima

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecolorresolve.php

---

# imagecolorresolve

(PHP 4, PHP 5, PHP 7, PHP 8)

imagecolorresolve — Obtém o índice da cor especificada ou a alternativa mais próxima

### Descrição

function **imagecolorresolve**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$red`,  
    [int](language.types.integer.md) `$green`,  
    [int](language.types.integer.md) `$blue`  
): [int](language.types.integer.md)

Esta função garantidamente retorna um índice para uma
cor solicitada, pode ser a cor exata ou a cor mais alternativa
mais próxima.

Se a imagem foi criada a partir de um arquivo, apenas as cores usadas na imagem são resolvidas. As cores presentes apenas na paleta não serão resolvidas.

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

### Valor Retornado

Retorna um índice de cor.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Usando **imagecoloresolve()** para obter cores de uma imagem**

```
<?php
// Carrega uma imagem
$im = imagecreatefromgif('phplogo.gif');

// Obtém as cores mais próximas da imagem
$colors = array();
$colors[] = imagecolorresolve($im, 255, 255, 255);
$colors[] = imagecolorresolve($im, 0, 0, 200);

// Saída
print_r($colors);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => 89
    [1] => 85
)
```

### Veja também

- [imagecolorclosest()](function.imagecolorclosest.md) - Obtém o índice da cor mais próxima à especificada

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
