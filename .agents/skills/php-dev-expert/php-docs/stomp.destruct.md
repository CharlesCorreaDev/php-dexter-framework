# Fecha a conexão stomp

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stomp.destruct.php

---

# Stomp::\_\_destruct

# stomp\_close

(PECL stomp >= 0.1.0)

Stomp::\_\_destruct -- stomp\_close — Fecha a conexão stomp

### Descrição

Estilo orientado a objetos (destructor):

public function **Stomp::\_\_destruct**()

Estilo procedural:

function **stomp\_close**([resource](language.types.resource.md) `$link`): [bool](language.types.boolean.md)

Fecha uma conexão aberta anteriormente.

### Parâmetros

`link`
:   Somente no estilo procedural: O identificador do link stomp retornado por [stomp\_connect()](stomp.construct.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

Veja [stomp\_connect()](stomp.construct.md).

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
