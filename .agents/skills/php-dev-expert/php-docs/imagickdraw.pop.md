# Destrói o ImagickDraw atual na pilha e retorna ao ImagickDraw enviado anteriormente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pop.php

---

# ImagickDraw::pop

(PECL imagick 2, PECL imagick 3)

ImagickDraw::pop — Destrói o ImagickDraw atual na pilha e retorna ao ImagickDraw enviado anteriormente

### Descrição

public function **ImagickDraw::pop**(): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Destrói o ImagickDraw atual na pilha e retorna ao
ImagickDraw enviado anteriormente. Podem existir vários ImagickDraws.
É um erro tentar exibir mais ImagickDraws do que os que foram enviados, e é a
forma correta de exibir todos os ImagickDraws que foram enviados.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
