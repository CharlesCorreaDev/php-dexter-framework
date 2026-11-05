# Indica que os comandos a seguir criam elementos nomeados para processamento antecipado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pushdefs.php

---

# ImagickDraw::pushDefs

(PECL imagick 2, PECL imagick 3)

ImagickDraw::pushDefs — Indica que os comandos a seguir criam elementos nomeados para processamento antecipado

### Descrição

public function **ImagickDraw::pushDefs**(): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Indica que comandos até um comando de terminação [ImagickDraw::popDefs()](imagickdraw.popdefs.md)
criam elementos nomeados (por exemplo, caminhos de recorte, texturas, etc.) que
podem ser processados ​​com segurança mais cedo por uma questão de eficiência.

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
