# Envia status

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanjob.sendstatus.php

---

# GearmanJob::sendStatus

(PECL gearman >= 0.6.0)

GearmanJob::sendStatus — Envia status

### Descrição

public function **GearmanJob::sendStatus**([int](language.types.integer.md) `$numerator`, [int](language.types.integer.md) `$denominator`): [bool](language.types.boolean.md)

Envia informações de status para o servidor de trabalho e quaisquer clientes ouvintes. Use isto
para especificar qual porcentagem do trabalho foi concluída.

### Parâmetros

`numerator`
:   O numerador da porcentagem concluída expresso como uma fração.

`denominator`
:   O denominador da porcentagem concluída expresso como uma fração.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [GearmanClient::jobStatus()](gearmanclient.jobstatus.md) - Obtém o status de uma tarefa em segundo plano
- [GearmanTask::taskDenominator()](gearmantask.taskdenominator.md) - Obtém o denominador percentual de conclusão
- [GearmanTask::taskNumerator()](gearmantask.tasknumerator.md) - Obtém o numerador da porcentagem de conclusão

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
