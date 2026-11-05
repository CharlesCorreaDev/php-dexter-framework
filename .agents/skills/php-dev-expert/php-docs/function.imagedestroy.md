# Destrói uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagedestroy.php

---

# imagedestroy

(PHP 4, PHP 5, PHP 7, PHP 8)

imagedestroy — Destrói uma imagem

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.5.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **imagedestroy**([GdImage](class.gdimage.md) `$image`): [true](language.types.singleton.md)

> **Nota**:
>
> Esta função não tem efeito. Antes do PHP 8.0.0, esta função era usada para fechar o recurso.

Antes do PHP 8.0.0, a função **imagedestroy()** liberava qualquer memória
associada ao recurso do parâmetro `image`. A partir do PHP 8.0.0,
a extensão GD usa objetos no lugar de recursos, e objetos
não podem ser fechados explicitamente.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Esta função foi descontinuada. |
| 8.0.0 | Essa função é um NOP agora. |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Usando **imagedestroy()** antes do PHP 8.0.0**

```
<?php
// criar uma imagem de 100 x 100 pixels
$im = imagecreatetruecolor(100, 100);

// alterar ou salvar a imagem

// libera a imagem da memória
imagedestroy($im);
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
