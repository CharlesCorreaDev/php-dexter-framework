# Envia status de falha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanjob.sendfail.php

---

# GearmanJob::sendFail

(PECL gearman >= 0.6.0)

GearmanJob::sendFail — Envia status de falha

### Descrição

public function **GearmanJob::sendFail**(): [bool](language.types.boolean.md)

SEnvia status de falha para este trabalho, indicando que o trabalho falhou de uma forma conhecida (ao
contrário de falhar devido a uma exceção lançada).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [GearmanJob::sendException()](gearmanjob.sendexception.md) - Envia exceção para trabalho em execução (exceção)
- [GearmanJob::setReturn()](gearmanjob.setreturn.md) - Define um valor de retorno
- [GearmanJob::sendStatus()](gearmanjob.sendstatus.md) - Envia status
- [GearmanJob::sendWarning()](gearmanjob.sendwarning.md) - Envia um alerta

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
