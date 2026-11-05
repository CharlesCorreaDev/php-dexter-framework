# Define o retângulo de recorte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagesetclip.php

---

# imagesetclip

(PHP 7 >= 7.2.0, PHP 8)

imagesetclip — Define o retângulo de recorte

### Descrição

function **imagesetclip**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$x1`,  
    [int](language.types.integer.md) `$y1`,  
    [int](language.types.integer.md) `$x2`,  
    [int](language.types.integer.md) `$y2`  
): [true](language.types.singleton.md)

**imagesetclip()** define o retêngulo de recorte atual, isto é,
a área além da qual nenhum pixel será desenhado.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`x1`
:   A coordenada x do canto superior esquerdo.

`y1`
:   A coordenada y do canto superior esquerdo.

`x2`
:   A coordenada x do canto inferior direito.

`y2`
:   A coordenada y do canto inferior direito.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Veja também

- [imagegetclip()](function.imagegetclip.md) - Obtém o retângulo de recorte

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
