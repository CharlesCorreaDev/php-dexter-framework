# Constrói um novo dispositivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqdevice.construct.php

---

# ZMQDevice::\_\_construct

(PECL zmq >= 0.5.0)

ZMQDevice::\_\_construct — Constrói um novo dispositivo

### Descrição

public function **ZMQDevice::\_\_construct**([ZMQSocket](class.zmqsocket.md) `$frontend`, [ZMQSocket](class.zmqsocket.md) `$backend`, [ZMQSocket](class.zmqsocket.md) `$listener` = ?)

"Dispositivos ØMQ podem itermediar endereços, serviços, filas, ou qualquer outra abstração que se deseje definir sobre a mensagem e as camadas de socket." -- zguide

### Parâmetros

`frontend`
:   Parametro de entrada dos dispositivos. Geralmente de onde as mensagens
    estão vindo.

`backend`
:   Parâmetro de destino dos dispositivos. Geralmente para onde as mensagens
    estão indo.

`listener`
:   Um socket ouvinte (listener), que recebe uma cópia de todas as mensagens indo em ambas direções.
    O tipo desse socket deve ser SUB, PULL ou DEALER.

### Valor Retornado

A chamada para este método prepara o dispositivo. Geralmente os dispositivos são processos
se longa execução, assim, executar esse método a partir de um script interativo não é recomendado. Esse
método lança uma exceção ZMQDeviceException caso o dispositivo não possa ser inicializado.

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
