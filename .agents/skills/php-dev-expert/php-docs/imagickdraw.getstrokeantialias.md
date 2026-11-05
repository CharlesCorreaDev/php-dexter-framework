# Retorna a configuração atual de suavização do traço

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.getstrokeantialias.php

---

# ImagickDraw::getStrokeAntialias

(PECL imagick 2, PECL imagick 3)

ImagickDraw::getStrokeAntialias — Retorna a configuração atual de suavização do traço

### Descrição

public function **ImagickDraw::getStrokeAntialias**(): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Retorna a configuração atual de anti-serrilhamento do traço. Os contornos traçados
são suavizados por padrão. Quando a suavização está desabilitada, os pixels traçados são
analisados para determinar se deve ser usada a cor do traço ou a cor subjacente
da tela.

### Valor Retornado

Retorna **`true`** se a suavização está ligada ou **`false`** se estiver desligada.

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
