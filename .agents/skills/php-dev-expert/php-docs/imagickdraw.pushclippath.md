# Inicia uma definição de caminho de recorte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pushclippath.php

---

# ImagickDraw::pushClipPath

(PECL imagick 2, PECL imagick 3)

ImagickDraw::pushClipPath — Inicia uma definição de caminho de recorte

### Descrição

public function **ImagickDraw::pushClipPath**([string](language.types.string.md) `$clip_mask_id`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Inicia uma definição de caminho de recorte que é composta por qualquer número de
comandos de desenho e terminada por um comando [ImagickDraw::popClipPath()](imagickdraw.popclippath.md).

### Parâmetros

`clip_mask_id`
:   ID da máscara de recorte

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
