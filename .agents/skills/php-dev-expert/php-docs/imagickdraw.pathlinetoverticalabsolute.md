# Desenha um caminho de linha vertical

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pathlinetoverticalabsolute.php

---

# ImagickDraw::pathLineToVerticalAbsolute

(PECL imagick 2, PECL imagick 3)

ImagickDraw::pathLineToVerticalAbsolute — Desenha um caminho de linha vertical

### Descrição

public function **ImagickDraw::pathLineToVerticalAbsolute**([float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha um caminho de linha vertical do ponto atual até o ponto alvo usando
coordenadas absolutas. O ponto alvo então se torna o novo ponto atual.

### Parâmetros

`y`
:   coordenada y

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
