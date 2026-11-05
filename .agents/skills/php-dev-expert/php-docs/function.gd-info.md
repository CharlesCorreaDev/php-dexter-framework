# Obtém informações sobre a biblioteca GD instalada atualmente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gd-info.php

---

# gd\_info

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

gd\_info — Obtém informações sobre a biblioteca GD instalada atualmente

### Descrição

function **gd\_info**(): [array](language.types.array.md)

Obtém informação sobre a versão e as capacidades da biblioteca GD
instalada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array associativo.

**Elementos de array retornados por **gd\_info()****

| Atributo | Significado |
| --- | --- |
| GD Version | Valor [string](language.types.string.md) descrevendo a versão da `libgd` instalada. |
| FreeType Support | Valor [bool](language.types.boolean.md). **`true`** se o suporte FreeType estiver instalado. |
| FreeType Linkage | Valor [string](language.types.string.md) descrevendo a maneira que FreeType foi linkado. Os valores esperados são: 'with freetype', 'with TTF library', e 'with unknown library'. Este elemento será definido apenas se `FreeType Support` for **`true`**. |
| GIF Read Support | Valor [bool](language.types.boolean.md). **`true`** se o suporte para *ler* imagens `GIF` estiver incluso. |
| GIF Create Support | Valor [bool](language.types.boolean.md). **`true`** se o suporte para *criação* de imagens `GIF` estiver incluso. |
| JPEG Support | Valor [bool](language.types.boolean.md). **`true`** se o suporte a `JPEG` estiver incluso. |
| PNG Support | Valor [bool](language.types.boolean.md). **`true`** se o suporte a `PNG` estiver incluso. |
| WBMP Support | Valor [bool](language.types.boolean.md). **`true`** se o suporte a `WBMP` estiver incluso. |
| XBM Support | Valor [bool](language.types.boolean.md). **`true`** se o suporte a `XBM` estiver incluso. |
| WebP Support | Valor [bool](language.types.boolean.md). **`true`** se o suporte a `WebP` estiver incluso. |
| AVIF Support | Valor [bool](language.types.boolean.md). **`true`** se o suporte a `AVIF` estiver incluso. Disponível a partir do PHP 8.1.0. |

### Examples

**Exemplo #1 Usando **gd\_info()****

```
<?php
var_dump(gd_info());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(10) {
  ["GD Version"]=>
  string(24) "bundled (2.1.0 compatible)"
  ["FreeType Support"]=>
  bool(false)
  ["GIF Read Support"]=>
  bool(true)
  ["GIF Create Support"]=>
  bool(false)
  ["JPEG Support"]=>
  bool(false)
  ["PNG Support"]=>
  bool(true)
  ["WBMP Support"]=>
  bool(true)
  ["XBM Support"]=>
  bool(false)
  ["WebP Support"]=>
  bool(false)
  ["AVIF Support"]=>
  bool(false)
}
```

### Veja também

- [imagepng()](function.imagepng.md) - Envia uma imagem PNG para o navegador ou arquivo
- [imagejpeg()](function.imagejpeg.md) - Envia a imagem para o navegador ou para um arquivo
- [imagegif()](function.imagegif.md) - Envia a imagem para o navegador ou para um arquivo
- [imagewbmp()](function.imagewbmp.md) - Envia a imagem para o navegador ou para um arquivo
- [imagewebp()](function.imagewebp.md) - Mostra uma imagem WebP no navegador ou grava em arquivo
- [imageavif()](function.imageavif.md) - Envia a imagem para o navegador ou para um arquivo
- [imagetypes()](function.imagetypes.md) - Retorna os tipos de imagens suportados pela instalação do PHP

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
