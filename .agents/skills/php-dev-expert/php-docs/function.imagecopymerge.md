# Copia e funde parte de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecopymerge.php

---

# imagecopymerge

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

imagecopymerge — Copia e funde parte de uma imagem

### Descrição

function **imagecopymerge**(  
    [GdImage](class.gdimage.md) `$dst_image`,  
    [GdImage](class.gdimage.md) `$src_image`,  
    [int](language.types.integer.md) `$dst_x`,  
    [int](language.types.integer.md) `$dst_y`,  
    [int](language.types.integer.md) `$src_x`,  
    [int](language.types.integer.md) `$src_y`,  
    [int](language.types.integer.md) `$src_width`,  
    [int](language.types.integer.md) `$src_height`,  
    [int](language.types.integer.md) `$pct`  
): [true](language.types.singleton.md)

Copia uma parte de `src_image` sobre
`dst_image` iniciando nas coordenadas x,y
`src_x`, `src_y` com
uma largura de `src_width` e uma altura de
`src_height`. A porção definida será copiada
nas coordenadas x,y, `dst_x` e
`dst_y`.

### Parâmetros

`dst_image`
:   Recurso da imagem de destino.

`src_image`
:   Recurso da imagem de origem.

`dst_x`
:   Coordenada x do ponto de destino.

`dst_y`
:   Coordenada y do ponto de destino.

`src_x`
:   Coordenada x do ponto de origem.

`src_y`
:   Coordenada y do ponto de origem.

`src_width`
:   Largura da imagem de origem.

`src_height`
:   Altura da imagem de origem.

`pct`
:   As duas imagens podem ser fundidas de acordo com o parâmetro `pct`
    que vai de 0 a 100. Quando `pct` = 0,
    nenhuma ação é tomada, e quando for 100 esta função se comporta de forma idêntica
    a [imagecopy()](function.imagecopy.md) para imagens de paleta, exceto por
    ignorar componentes alfa, enquanto implementa transparência alfa
    para imagens em cores verdadeiras.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `dst_image` e `src_image` esperam instâncias [GdImage](class.gdimage.md) agora; anteriormente, [resource](language.types.resource.md)s eram esperados. |

### Examples

**Exemplo #1 Funde duas cópias da logomarca PHP.net com 75% de transparência**

```
<?php
// Cria instâncias de imagens
$dest = imagecreatefromgif('php.gif');
$src = imagecreatefromgif('php.gif');

// Copia e funde
imagecopymerge($dest, $src, 10, 10, 0, 0, 100, 47, 75);

// Mostra
header('Content-Type: image/gif');
imagegif($dest);
?>
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
