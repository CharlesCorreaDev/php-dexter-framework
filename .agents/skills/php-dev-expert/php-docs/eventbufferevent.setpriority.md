# Atribui uma prioridade a um evento de buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.setpriority.php

---

# EventBufferEvent::setPriority

(PECL event >= 1.2.6-beta)

EventBufferEvent::setPriority — Atribui uma prioridade a um evento de buffer

### Descrição

public
function **EventBufferEvent::setPriority**(
[int](language.types.integer.md) `$priority`
): [bool](language.types.boolean.md)

Atribui uma prioridade a um evento de buffer.

**Aviso**

Suportado apenas para eventos de buffer de soquete.

### Parâmetros

`priority`
:   Valor de prioridade.

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
