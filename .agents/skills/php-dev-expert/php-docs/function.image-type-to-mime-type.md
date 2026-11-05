# Obtém o Mime-Type para o tipo de imagem retornado por getimagesize,
   exif_read_data, exif_thumbnail e exif_imagetype

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.image-type-to-mime-type.php

---

# image\_type\_to\_mime\_type

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

image\_type\_to\_mime\_type — Obtém o Mime-Type para o tipo de imagem retornado por getimagesize,
exif\_read\_data, exif\_thumbnail e exif\_imagetype

### Descrição

function **image\_type\_to\_mime\_type**([int](language.types.integer.md) `$image_type`): [string](language.types.string.md)

A função **image\_type\_to\_mime\_type()** determina
o Mime-Type (tipo de mídia) para uma constante IMAGETYPE.

### Parâmetros

`image_type`
:   Uma das constantes **`IMAGETYPE_*`**.

### Valor Retornado

Os valores retornados são os seguintes:

**Constantes de valores de retorno**

| `image_type` | Valor retornado |
| --- | --- |
| **`IMAGETYPE_GIF`** | `image/gif` |
| **`IMAGETYPE_JPEG`** | `image/jpeg` |
| **`IMAGETYPE_PNG`** | `image/png` |
| **`IMAGETYPE_SWF`** | `application/x-shockwave-flash` |
| **`IMAGETYPE_PSD`** | `image/psd` |
| **`IMAGETYPE_BMP`** | `image/bmp` |
| **`IMAGETYPE_TIFF_II`** (ordem de bytes Intel - little endian) | `image/tiff` |
| **`IMAGETYPE_TIFF_MM`** (ordem de bytes Motorola - big endian) | `image/tiff` |
| **`IMAGETYPE_JPC`** | `application/octet-stream` |
| **`IMAGETYPE_JP2`** | `image/jp2` |
| **`IMAGETYPE_JPX`** | `application/octet-stream` |
| **`IMAGETYPE_JB2`** | `application/octet-stream` |
| **`IMAGETYPE_SWC`** | `application/x-shockwave-flash` |
| **`IMAGETYPE_IFF`** | `image/iff` |
| **`IMAGETYPE_WBMP`** | `image/vnd.wap.wbmp` |
| **`IMAGETYPE_XBM`** | `image/xbm` |
| **`IMAGETYPE_ICO`** | `image/vnd.microsoft.icon` |
| **`IMAGETYPE_WEBP`** | `image/webp` |
| **`IMAGETYPE_AVIF`** | `image/avif` |
| **`IMAGETYPE_HEIF`** | `image/heif` |

### Examples

**Exemplo #1 Exemplo de **image\_type\_to\_mime\_type()****

```
<?php
header("Content-type: " . image_type_to_mime_type(IMAGETYPE_PNG));
?>
```

### Notas

> **Nota**:
>
> Esta função não requer a biblioteca de imagens GD.

### Veja também

- [getimagesize()](function.getimagesize.md) - Obtém o tamanho de uma imagem
- [exif\_imagetype()](function.exif-imagetype.md) - Verifica o tipo de uma imagem
- [exif\_read\_data()](function.exif-read-data.md) - Lê os cabeçalhos EXIF de um arquivo de imagen
- [exif\_thumbnail()](function.exif-thumbnail.md) - Recupera a miniatura embutida de uma imagem

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
