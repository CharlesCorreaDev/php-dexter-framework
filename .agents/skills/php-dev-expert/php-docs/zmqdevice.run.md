# Executa o novo dispositivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqdevice.run.php

---

# ZMQDevice::run

(No version information available, might only be in Git)

ZMQDevice::run — Executa o novo dispositivo

### Descrição

public function **ZMQDevice::run**(): [void](language.types.void.md)

Executa o dispositivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A chamada para este método ficará bloqueada até que o dispositivo seja executado. Não é recomendado
que os dispositivos sejam usados a partir de scripts interativos. Caso haja falha, esse método lançará
uma exceção ZMQDeviceException.

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
