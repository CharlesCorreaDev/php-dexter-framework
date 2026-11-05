# Verifica o tipo de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.exif-imagetype.php

---

# exif\_imagetype

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

exif\_imagetype — Verifica o tipo de uma imagem

### Descrição

function **exif\_imagetype**([string](language.types.string.md) `$filename`): [int](language.types.integer.md)|[false](language.types.singleton.md)

**exif\_imagetype()** lê os primeiros bytes de uma imagem e
verifica sua assinatura.

**exif\_imagetype()** pode ser usada para evitar chamadas a outras funções
[exif](ref.exif.md) que não têm suporte a certos tipos de arquivos
ou um conjunção com [$\_SERVER['HTTP\_ACCEPT']](reserved.variables.server.md) para verificar
se o visualizador é capaz de mostrar uma imagem específica no navegador.

### Parâmetros

`filename`
:   A imagem a ser verificada.

### Valor Retornado

Quando uma assinatura correta é encontrada, o valor da constante associada será
retornado, caso contrário o valor de retorno será **`false`**. O valor retornado é o
mesmo valor que [getimagesize()](function.getimagesize.md) retorna no índice 2, mas
**exif\_imagetype()** é bem mais rápida.

As seguintes constantes estão definidas, e representam os possíveis
valores de retorno de **exif\_imagetype()**:

**Constantes Imagetype**

| Valor | Constante |
| --- | --- |
| 1 | **`IMAGETYPE_GIF`** |
| 2 | **`IMAGETYPE_JPEG`** |
| 3 | **`IMAGETYPE_PNG`** |
| 4 | **`IMAGETYPE_SWF`** |
| 5 | **`IMAGETYPE_PSD`** |
| 6 | **`IMAGETYPE_BMP`** |
| 7 | **`IMAGETYPE_TIFF_II`** (ordem de bytes Intel) |
| 8 | **`IMAGETYPE_TIFF_MM`** (ordem de bytes Motorola) |
| 9 | **`IMAGETYPE_JPC`** |
| 10 | **`IMAGETYPE_JP2`** |
| 11 | **`IMAGETYPE_JPX`** |
| 12 | **`IMAGETYPE_JB2`** |
| 13 | **`IMAGETYPE_SWC`** |
| 14 | **`IMAGETYPE_IFF`** |
| 15 | **`IMAGETYPE_WBMP`** |
| 16 | **`IMAGETYPE_XBM`** |
| 17 | **`IMAGETYPE_ICO`** |
| 18 | **`IMAGETYPE_WEBP`** |
| 19 | **`IMAGETYPE_AVIF`** |
| 20 | **`IMAGETYPE_HEIF`** |

> **Nota**:
>
> **exif\_imagetype()** emitirá um erro de nível **`E_NOTICE`**
> e retornará **`false`** se for incapaz de ler bytes suficientes do arquivo para
> determinar o tipo da imagem.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.0 | Adicionado suporte a WebP. |
| 8.1.0 | Adicionado suporte a AVIF. |
| 8.5.0 | Adicionado suporte a HEIF. |

### Examples

**Exemplo #1 Exemplo de **exif\_imagetype()****

```
<?php
if (exif_imagetype('image.gif') != IMAGETYPE_GIF) {
    echo 'A imagem não é do tipo gif';
}
?>
```

### Veja também

- [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md) - Obtém o Mime-Type para o tipo de imagem retornado por getimagesize,
  exif\_read\_data, exif\_thumbnail e exif\_imagetype
- [getimagesize()](function.getimagesize.md) - Obtém o tamanho de uma imagem

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
