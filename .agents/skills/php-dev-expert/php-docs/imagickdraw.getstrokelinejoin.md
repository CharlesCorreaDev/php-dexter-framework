# Retorna a forma a ser usada nos cantos dos caminhos quando eles são traçados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.getstrokelinejoin.php

---

# ImagickDraw::getStrokeLineJoin

(PECL imagick 2, PECL imagick 3)

ImagickDraw::getStrokeLineJoin — Retorna a forma a ser usada nos cantos dos caminhos quando eles são traçados

### Descrição

public function **ImagickDraw::getStrokeLineJoin**(): [int](language.types.integer.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Retorna a forma a ser usada nos cantos dos caminhos (ou de outras formas
vetoriais) quando eles são traçados.

### Valor Retornado

Retorna uma constante [LINEJOIN](imagick.constants.md#imagick.constants.linejoin)
(`imagick::LINEJOIN_*`) ou 0 se a junção da linha do traço não estiver definida.

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
