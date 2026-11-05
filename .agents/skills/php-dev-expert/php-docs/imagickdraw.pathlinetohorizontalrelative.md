# Desenha um caminho de linha horizontal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pathlinetohorizontalrelative.php

---

# ImagickDraw::pathLineToHorizontalRelative

(PECL imagick 2, PECL imagick 3)

ImagickDraw::pathLineToHorizontalRelative — Desenha um caminho de linha horizontal

### Descrição

public function **ImagickDraw::pathLineToHorizontalRelative**([float](language.types.float.md) `$x`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha um caminho de linha horizontal do ponto atual até o ponto de destino
usando coordenadas relativas. O ponto alvo então se torna o novo
ponto atual.

### Parâmetros

`x`
:   coordenada x

### Valor Retornado

Nenhum valor é retornado.

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
