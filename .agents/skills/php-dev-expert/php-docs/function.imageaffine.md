# Retorna uma imagem contendo a imagem fonte com transformação afim, usando uma área de recorte opcional

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imageaffine.php

---

# imageaffine

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

imageaffine — Retorna uma imagem contendo a imagem fonte com transformação afim, usando uma área de recorte opcional

### Descrição

function **imageaffine**([GdImage](class.gdimage.md) `$image`, [array](language.types.array.md) `$affine`, [?](language.types.null.md)[array](language.types.array.md) `$clip` = **`null`**): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`affine`
:   Array com chaves de 0 a 5.

`clip`
:   Array com chaves "x", "y", "width" (largura) e "height" (altura); ou **`null`**.

### Valor Retornado

Retorna o objeto da imagem com transformação afim em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `clip` agora pode ser nulo. |
| 8.0.0 | Em caso de sucesso, esta função retorna uma instância de [GDImage](class.gdimage.md) agora; anteriormente, um [resource](language.types.resource.md) era retornado. |

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
