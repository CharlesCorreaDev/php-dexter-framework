# Exibe texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-show.php

---

# ps\_show

(PECL ps >= 1.1.0)

ps\_show — Exibe texto

### Descrição

function **ps\_show**([resource](language.types.resource.md) `$psdoc`, [string](language.types.string.md) `$text`): [bool](language.types.boolean.md)

Gera um texto na posição atual de texto. A posição do texto pode ser definida
armazenando as coordenadas x e y nos valores `textx`
e `texty` com a função
[ps\_set\_value()](function.ps-set-value.md). A função emitirá um
erro se uma fonte não tiver sido definida anteriormente com [ps\_setfont()](function.ps-setfont.md).

**ps\_show()** avalia os seguintes parâmetros e valores
conforme definidos por [ps\_set\_parameter()](function.ps-set-parameter.md) e
[ps\_set\_value()](function.ps-set-value.md).

charspacing (valor)
:   Distância entre dois glifos consecutivos. Se este valor for diferente de
    zero, todas as ligaduras serão resolvidas. Valores menores que zero são
    permitidos.

kerning (parâmetro)
:   Definir este parâmetro como "false" desativará o kerning. O kerning é
    ativado por padrão.

ligatures (parâmetro)
:   Definir este parâmetro como "false" desativará o uso de ligaduras.
    As ligaduras são ativadas por padrão.

underline (parâmetro)
:   Definir este parâmetro como "true" ativará o sublinhado. O sublinhado
    está desativado por padrão.

overline (parâmetro)
:   Definir este parâmetro como "true" ativará o texto com linha superior. Texto com linha superior está
    desativado por padrão.

strikeout (parâmetro)
:   Definir este parâmetro como "true" ativará o recurso de texto tachado. O texto tachado
    está desativado por padrão.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`text`
:   O texto a ser exibido.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_continue\_text()](function.ps-continue-text.md) - Continua o texto na próxima linha
- [ps\_show\_xy()](function.ps-show-xy.md) - Exibe texto na posição fornecida
- [ps\_setfont()](function.ps-setfont.md) - Define a fonte a ser usada na saída seguinte

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
