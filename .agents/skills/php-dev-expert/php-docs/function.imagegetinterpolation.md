# Obtém o método de interpolação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagegetinterpolation.php

---

# imagegetinterpolation

(PHP 8)

imagegetinterpolation — Obtém o método de interpolação

### Descrição

function **imagegetinterpolation**([GdImage](class.gdimage.md) `$image`): [int](language.types.integer.md)

Obtém o método de interpolação atualmente definido para a imagem informada em `image`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

### Valor Retornado

Retorna o método de interpolação.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Veja também

- [imagesetinterpolation()](function.imagesetinterpolation.md) - Define o método de interpolação

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
