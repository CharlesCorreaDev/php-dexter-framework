# Indica se há ou não um quadro pronto para leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stomp.hasframe.php

---

# Stomp::hasFrame

# stomp\_has\_frame

(PECL stomp >= 0.1.0)

Stomp::hasFrame -- stomp\_has\_frame — Indica se há ou não um quadro pronto para leitura

### Descrição

Estilo orientado a objetos (method):

public function **Stomp::hasFrame**(): [bool](language.types.boolean.md)

Estilo procedural:

function **stomp\_has\_frame**([resource](language.types.resource.md) `$link`): [bool](language.types.boolean.md)

Indica se há ou não um quadro pronto para leitura.

### Parâmetros

`link`
:   Somente no estilo procedural: O identificador do link stomp retornado por [stomp\_connect()](stomp.construct.md).

### Valor Retornado

Retorna **`true`** se um quadro estiver pronto para leitura, ou **`false`** caso contrário.

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
