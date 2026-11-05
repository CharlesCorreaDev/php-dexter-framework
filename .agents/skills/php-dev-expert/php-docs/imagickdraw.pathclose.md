# Adiciona um elemento de caminho ao caminho atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pathclose.php

---

# ImagickDraw::pathClose

(PECL imagick 2, PECL imagick 3)

ImagickDraw::pathClose — Adiciona um elemento de caminho ao caminho atual

### Descrição

public function **ImagickDraw::pathClose**(): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Adiciona um elemento de caminho ao caminho atual que fecha o subcaminho atual
desenhando uma linha reta do ponto atual até o ponto inicial mais recente
do subcaminho atual (geralmente, o ponto 'moveto' mais recente).

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
