# Retorna o limite de esquadria do traçado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.getstrokemiterlimit.php

---

# ImagickDraw::getStrokeMiterLimit

(PECL imagick 2, PECL imagick 3)

ImagickDraw::getStrokeMiterLimit — Retorna o limite de esquadria do traçado

### Descrição

public function **ImagickDraw::getStrokeMiterLimit**(): [int](language.types.integer.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Retorna o limite de esquadria. Quando dois segmentos de linha se encontram em um ângulo agudo e
as junções de esquadria foram especificadas para 'lineJoin', é possível que a
esquadria se estenda muito além da espessura da linha que traça o caminho.
O 'miterLimit' impõe um limite na proporção entre o comprimento da esquadria e o
'lineWidth'.

### Valor Retornado

Retorna um inteiro que descreve o limite de esquadria
e 0 se nenhum limite estiver definido.

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
