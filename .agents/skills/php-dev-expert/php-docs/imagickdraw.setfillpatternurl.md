# Define a URL a ser usada como padrão de preenchimento para preencher objetos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setfillpatternurl.php

---

# ImagickDraw::setFillPatternURL

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setFillPatternURL — Define a URL a ser usada como padrão de preenchimento para preencher objetos

### Descrição

public function **ImagickDraw::setFillPatternURL**([string](language.types.string.md) `$fill_url`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define a URL a ser usada como padrão de preenchimento para preencher objetos. Somente URLs locais
("#identifier") são suportados no momento. Esses URLs locais normalmente
são criados definindo um padrão de preenchimento nomeado com DrawPushPattern/DrawPopPattern.

### Parâmetros

`fill_url`
:   URL a ser usada para obter o padrão de preenchimento.

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
