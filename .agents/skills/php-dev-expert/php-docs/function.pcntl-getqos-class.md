# Obtém a classe QoS do thread atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-getqos-class.php

---

# pcntl\_getqos\_class

(PHP 8 >= 8.4.0)

pcntl\_getqos\_class — Obtém a classe QoS do thread atual

### Descrição

function **pcntl\_getqos\_class**(): [Pcntl\QosClass](enum.pcntl-qosclass.md)

Obtém a classe de Qualidade de Serivço (QoS) do thread
atual.

> **Nota**:
>
> Esta função está disponível apenas em plataformas Apple.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a classe QoS atual como uma
enumeração [Pcntl\QosClass](enum.pcntl-qosclass.md).

### Erros/Exceções

Lança um [Error](class.error.md) se a chamada subjacente a
`pthread_get_qos_class_np()` falhar.

### Veja também

- [pcntl\_setqos\_class()](function.pcntl-setqos-class.md) - Define a classe QoS do thread atual
- [Pcntl\QosClass](enum.pcntl-qosclass.md)

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
