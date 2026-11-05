# Copia uma parte de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecopy.php

---

# imagecopy

(PHP 4, PHP 5, PHP 7, PHP 8)

imagecopy — Copia uma parte de uma imagem

### Descrição

function **imagecopy**(  
    [GdImage](class.gdimage.md) `$dst_image`,  
    [GdImage](class.gdimage.md) `$src_image`,  
    [int](language.types.integer.md) `$dst_x`,  
    [int](language.types.integer.md) `$dst_y`,  
    [int](language.types.integer.md) `$src_x`,  
    [int](language.types.integer.md) `$src_y`,  
    [int](language.types.integer.md) `$src_width`,  
    [int](language.types.integer.md) `$src_height`  
): [true](language.types.singleton.md)

Copia uma parte de `src_image` para
`dst_image`, começando nas coordenadas x, y
`src_x`, `src_y` com
uma largura de `src_width` e uma altura de
`src_height`. A porção definida será copiada
para as coordenadas x, y, `dst_x` e
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

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `dst_image` e `src_image` esperam instâncias de [GdImage](class.gdimage.md); anteriormente, esperavam [resource](language.types.resource.md). |

### Examples

**Exemplo #1 Recortando o logotipo do PHP.net**

```
<?php
// Criar instâncias de imagens
$src = imagecreatefromgif('php.gif');
$dest = imagecreatetruecolor(80, 40);

// Copiar
imagecopy($dest, $src, 0, 0, 20, 13, 80, 40);

// Exibir
header('Content-Type: image/gif');
imagegif($dest);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Recortando o logotipo do PHP.net](images/21009b70229598c6a80eef8b45bf282b-imagecopy.gif)

### Veja também

- [imagecrop()](function.imagecrop.md) - Recorta uma imagem no retângulo informado

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
