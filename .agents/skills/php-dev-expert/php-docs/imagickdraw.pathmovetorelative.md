# Inicia um novo subcaminho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pathmovetorelative.php

---

# ImagickDraw::pathMoveToRelative

(PECL imagick 2, PECL imagick 3)

ImagickDraw::pathMoveToRelative — Inicia um novo subcaminho

### Descrição

public function **ImagickDraw::pathMoveToRelative**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Inicia um novo subcaminho na coordenada fornecida usando coordenadas relativas.
O ponto atual torna-se então a coordenada especificada.

### Parâmetros

`x`
:   coordenada alvo x

`y`
:   coordenada alvo y

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
