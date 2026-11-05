# Obtém a largura da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagesx.php

---

# imagesx

(PHP 4, PHP 5, PHP 7, PHP 8)

imagesx — Obtém a largura da imagem

### Descrição

function **imagesx**([GdImage](class.gdimage.md) `$image`): [int](language.types.integer.md)

Retorna a largura do objeto informado em `image`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

### Valor Retornado

Retorna a largura de `image`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Usando **imagesx()****

```
<?php

// cria uma imagem de 300*200
$img = imagecreatetruecolor(300, 200);

echo imagesx($img); // 300

?>
```

### Veja também

- [imagecreatetruecolor()](function.imagecreatetruecolor.md) - Cria uma nova imagem em cores verdadeiras
- [getimagesize()](function.getimagesize.md) - Obtém o tamanho de uma imagem
- [imagesy()](function.imagesy.md) - Obtém a altura da imagem

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
