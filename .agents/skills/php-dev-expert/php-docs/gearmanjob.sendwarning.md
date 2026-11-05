# Envia um alerta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanjob.sendwarning.php

---

# GearmanJob::sendWarning

(PECL gearman >= 0.6.0)

GearmanJob::sendWarning — Envia um alerta

### Descrição

public function **GearmanJob::sendWarning**([string](language.types.string.md) `$warning`): [bool](language.types.boolean.md)

Envia um alerta para este trabalho enquanto ele está em execução.

### Parâmetros

`warning`
:   Uma mensagem de alerta.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [GearmanJob::sendComplete()](gearmanjob.sendcomplete.md) - Envia o resultado e status completo
- [GearmanJob::sendException()](gearmanjob.sendexception.md) - Envia exceção para trabalho em execução (exceção)
- [GearmanJob::sendFail()](gearmanjob.sendfail.md) - Envia status de falha

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
