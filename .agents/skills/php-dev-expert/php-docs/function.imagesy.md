# Obtém a altura da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagesy.php

---

# imagesy

(PHP 4, PHP 5, PHP 7, PHP 8)

imagesy — Obtém a altura da imagem

### Descrição

function **imagesy**([GdImage](class.gdimage.md) `$image`): [int](language.types.integer.md)

Retorna a altura do objeto informado em `image`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

### Valor Retornado

Retorna a altura de `image`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Usando **imagesy()****

```
<?php

// create a 300*200 image
$img = imagecreatetruecolor(300, 200);

echo imagesy($img); // 200

?>
```

### Veja também

- [imagecreatetruecolor()](function.imagecreatetruecolor.md) - Cria uma nova imagem em cores verdadeiras
- [getimagesize()](function.getimagesize.md) - Obtém o tamanho de uma imagem
- [imagesx()](function.imagesx.md) - Obtém a largura da imagem

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
