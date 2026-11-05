# A classe GearmanJob

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.gearmanjob.php

---

# A classe GearmanJob

(PECL gearman >= 0.5.0)

## Introdução

## Resumo da classe

class ****GearmanJob****
{

/\* Métodos \*/

public function [functionName](gearmanjob.functionname.md)(): [false](language.types.singleton.md)|[string](language.types.string.md)

public function [handle](gearmanjob.handle.md)(): [false](language.types.singleton.md)|[string](language.types.string.md)

public function [returnCode](gearmanjob.returncode.md)(): [int](language.types.integer.md)

public function [sendComplete](gearmanjob.sendcomplete.md)([string](language.types.string.md) `$result`): [bool](language.types.boolean.md)

public function [sendData](gearmanjob.senddata.md)([string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

public function [sendException](gearmanjob.sendexception.md)([string](language.types.string.md) `$exception`): [bool](language.types.boolean.md)

public function [sendFail](gearmanjob.sendfail.md)(): [bool](language.types.boolean.md)

public function [sendStatus](gearmanjob.sendstatus.md)([int](language.types.integer.md) `$numerator`, [int](language.types.integer.md) `$denominator`): [bool](language.types.boolean.md)

public function [sendWarning](gearmanjob.sendwarning.md)([string](language.types.string.md) `$warning`): [bool](language.types.boolean.md)

public function [setReturn](gearmanjob.setreturn.md)([int](language.types.integer.md) `$gearman_return_t`): [bool](language.types.boolean.md)

public function [unique](gearmanjob.unique.md)(): [false](language.types.singleton.md)|[string](language.types.string.md)

public function [workload](gearmanjob.workload.md)(): [string](language.types.string.md)

public function [workloadSize](gearmanjob.workloadsize.md)(): [int](language.types.integer.md)

}

## Índice

- [GearmanJob::complete](gearmanjob.complete.md) — Envia o resultado e o status completo (descontinuado)
- [GearmanJob::\_\_construct](gearmanjob.construct.md) — Cria uma instância de GearmanJob
- [GearmanJob::data](gearmanjob.data.md) — Envia dados para um trabalho em execução (descontinuado)
- [GearmanJob::exception](gearmanjob.exception.md) — Envia exceção para trabalho em execução (descontinuado)
- [GearmanJob::fail](gearmanjob.fail.md) — Envia status de falha (descontinuado)
- [GearmanJob::functionName](gearmanjob.functionname.md) — Obtém o nome da função
- [GearmanJob::handle](gearmanjob.handle.md) — Obtém o identificador do trabalho
- [GearmanJob::returnCode](gearmanjob.returncode.md) — Obtém o último código de retorno
- [GearmanJob::sendComplete](gearmanjob.sendcomplete.md) — Envia o resultado e status completo
- [GearmanJob::sendData](gearmanjob.senddata.md) — Envia dados para um trabalho em execução
- [GearmanJob::sendException](gearmanjob.sendexception.md) — Envia exceção para trabalho em execução (exceção)
- [GearmanJob::sendFail](gearmanjob.sendfail.md) — Envia status de falha
- [GearmanJob::sendStatus](gearmanjob.sendstatus.md) — Envia status
- [GearmanJob::sendWarning](gearmanjob.sendwarning.md) — Envia um alerta
- [GearmanJob::setReturn](gearmanjob.setreturn.md) — Define um valor de retorno
- [GearmanJob::status](gearmanjob.status.md) — Envia status (descontinuado)
- [GearmanJob::unique](gearmanjob.unique.md) — Obtém o identificador exclusivo
- [GearmanJob::warning](gearmanjob.warning.md) — Envia um alerta (descontinuado)
- [GearmanJob::workload](gearmanjob.workload.md) — Obtém a carga de trabalho
- [GearmanJob::workloadSize](gearmanjob.workloadsize.md) — Obtém o tamanho da carga de trabalho

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
