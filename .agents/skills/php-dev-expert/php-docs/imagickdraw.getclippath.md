# Obtém o ID do caminho de recorte atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.getclippath.php

---

# ImagickDraw::getClipPath

(PECL imagick 2, PECL imagick 3)

ImagickDraw::getClipPath — Obtém o ID do caminho de recorte atual

### Descrição

public function **ImagickDraw::getClipPath**(): [false](language.types.singleton.md)|[string](language.types.string.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Obtém o ID do caminho de recorte atual.

### Valor Retornado

Retorna uma string contendo o ID do caminho de recorte ou false se não existir nenhum.

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
