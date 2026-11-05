# Define o tempo limite de inatividade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqdevice.setidletimeout.php

---

# ZMQDevice::setIdleTimeout

(No version information available, might only be in Git)

ZMQDevice::setIdleTimeout — Define o tempo limite de inatividade

### Descrição

public function **ZMQDevice::setIdleTimeout**([int](language.types.integer.md) `$timeout`): [ZMQDevice](class.zmqdevice.md)

Define o tempo limite da função de retorno de inatividade. A função de retorno de inatividade é invocada periodicamente quando o dispositivo está
ocioso.

### Parâmetros

`timeout`
:   O valor do tempo limite da função de retorno de inatividade.

### Valor Retornado

Caso haja sucesso, esse método retorna o objeto atual.

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
