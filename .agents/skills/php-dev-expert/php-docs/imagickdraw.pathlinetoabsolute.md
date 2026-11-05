# Desenha um caminho de linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pathlinetoabsolute.php

---

# ImagickDraw::pathLineToAbsolute

(PECL imagick 2)

ImagickDraw::pathLineToAbsolute — Desenha um caminho de linha

### Descrição

public function **ImagickDraw::pathLineToAbsolute**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha um caminho de linha do ponto atual até a coordenada fornecida usando
coordenadas absolutas. A coordenada então se torna o novo ponto atual.

### Parâmetros

`x`
:   coordenada x inicial

`y`
:   coordenada x final

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
