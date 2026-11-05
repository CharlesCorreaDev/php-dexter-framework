# Define o tempo limite do temporizador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqdevice.settimertimeout.php

---

# ZMQDevice::setTimerTimeout

(No version information available, might only be in Git)

ZMQDevice::setTimerTimeout — Define o tempo limite do temporizador

### Descrição

public function **ZMQDevice::setTimerTimeout**([int](language.types.integer.md) `$timeout`): [ZMQDevice](class.zmqdevice.md)

Define o tempo limite da função de retorno do temporizador. A função de retorno do temporizador é invocada periodicamente caso o mesmo seja definido.
Adicionada à extensão ZMQ na versão 1.1.0.

### Parâmetros

`timeout`
:   O valor do tempo limite da função de retorno do temporizador.

### Valor Retornado

Em caso de sucesso, esse método retorna o objeto atual.

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
