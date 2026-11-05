# Copia e funde parte de uma imagem com escala de cinza

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecopymergegray.php

---

# imagecopymergegray

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

imagecopymergegray — Copia e funde parte de uma imagem com escala de cinza

### Descrição

function **imagecopymergegray**(  
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

**imagecopymergegray()** copia uma parte de `src_image` sobre
`dst_image` iniciando nas coordenadas x,y
`src_x`, `src_y` com
uma largura de `src_width` e uma altura de
`src_height`. A porção definida será copiada
nas coordenadas x,y, `dst_x` e
`dst_y`.

Esta função é idêntica à [imagecopymerge()](function.imagecopymerge.md) exceto
que ao fundir ela preserva a matiz da origem convertendo
os pixels de destino para escala de cinza antes da operação de cópia.

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
:   O parâmetro `src_image` será alterado para escala de cinza de acordo
    com `pct`, onde 0 é totalmente em cinza e 100 é sem
    alteração. Quando `pct` = 100, esta função é
    idêntica a [imagecopy()](function.imagecopy.md) para imagems de paleta, exceto por
    ignorar componentes alfa, enquanto
    implementa transparência alfa para imagens em cores verdadeiras.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `dst_image` e `src_image` esperam instâncias [GdImage](class.gdimage.md) agora; anteriormente, [resource](language.types.resource.md)s eram esperados. |

### Examples

**Exemplo #1 Uso de **imagecopymergegray()****

```
<?php
// Cria instâncias de imagens
$dest = imagecreatefromgif('php.gif');
$src = imagecreatefromgif('php.gif');

// Copia e funde - Cinza = 20%
imagecopymergegray($dest, $src, 10, 10, 0, 0, 100, 47, 20);

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
