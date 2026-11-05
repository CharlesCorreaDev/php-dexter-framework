# Fecha a imagem e libera memória

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-close-image.php

---

# ps\_close\_image

(PECL ps >= 1.1.0)

ps\_close\_image — Fecha a imagem e libera memória

### Descrição

function **ps\_close\_image**([resource](language.types.resource.md) `$psdoc`, [int](language.types.integer.md) `$imageid`): [void](language.types.void.md)|[false](language.types.singleton.md)

Fecha uma imagem e libera seus recursos. Uma vez fechada,
uma imagem não pode mais ser usada.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`imageid`
:   Identificador de recurso da imagem retornado por
    [ps\_open\_image()](function.ps-open-image.md) ou
    [ps\_open\_image\_file()](function.ps-open-image-file.md).

### Valor Retornado

Retorna **`null`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_open\_image()](function.ps-open-image.md) - Lê uma imagem para posicionamento posterior
- [ps\_open\_image\_file()](function.ps-open-image-file.md) - Abre a imagem do arquivo

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
