# Exporta um soquete para um fluxo que encapsula um soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-export-stream.php

---

# socket\_export\_stream

(PHP 7 >= 7.0.7, PHP 8)

socket\_export\_stream — Exporta um soquete para um fluxo que encapsula um soquete

### Descrição

function **socket\_export\_stream**([Socket](class.socket.md) `$socket`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`socket`

### Valor Retornado

Retorna um recurso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

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
