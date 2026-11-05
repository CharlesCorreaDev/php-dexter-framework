# Abre a imagem do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-open-image-file.php

---

# ps\_open\_image\_file

(PECL ps >= 1.1.0)

ps\_open\_image\_file — Abre a imagem do arquivo

### Descrição

function **ps\_open\_image\_file**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [string](language.types.string.md) `$type`,  
    [string](language.types.string.md) `$filename`,  
    [string](language.types.string.md) `$stringparam` = ?,  
    [int](language.types.integer.md) `$intparam` = 0  
): [int](language.types.integer.md)

Carrega uma imagem para uso posterior.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`type`
:   O tipo da imagem. Os valores possíveis são `png`,
    `jpeg` ou `eps`.

`filename`
:   O nome do arquivo que contém os dados da imagem.

`stringparam`
:   Não usado.

`intparam`
:   Não usado.

### Valor Retornado

Retorna o identificador da imagem ou zero em caso de erro. O identificador é
um número positivo maior que 0.

### Veja também

- [ps\_open\_image()](function.ps-open-image.md) - Lê uma imagem para posicionamento posterior
- [ps\_place\_image()](function.ps-place-image.md) - Coloca a imagem na página
- [ps\_close\_image()](function.ps-close-image.md) - Fecha a imagem e libera memória

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
