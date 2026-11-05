# A classe GearmanTask

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.gearmantask.php

---

# A classe GearmanTask

(PECL gearman >= 0.5.0)

## Introdução

## Resumo da classe

class ****GearmanTask****
{

/\* Métodos \*/

public function [\_\_construct](gearmantask.construct.md)()

public function [data](gearmantask.data.md)(): [false](language.types.singleton.md)|[string](language.types.string.md)

public function [dataSize](gearmantask.datasize.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [functionName](gearmantask.functionname.md)(): [false](language.types.singleton.md)|[string](language.types.string.md)

public function [isKnown](gearmantask.isknown.md)(): [bool](language.types.boolean.md)

public function [isRunning](gearmantask.isrunning.md)(): [bool](language.types.boolean.md)

public function [jobHandle](gearmantask.jobhandle.md)(): [false](language.types.singleton.md)|[string](language.types.string.md)

public function [recvData](gearmantask.recvdata.md)([int](language.types.integer.md) `$data_len`): [false](language.types.singleton.md)|[array](language.types.array.md)

public function [returnCode](gearmantask.returncode.md)(): [int](language.types.integer.md)

public function [sendWorkload](gearmantask.sendworkload.md)([string](language.types.string.md) `$data`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [taskDenominator](gearmantask.taskdenominator.md)(): [false](language.types.singleton.md)|[int](language.types.integer.md)

public function [taskNumerator](gearmantask.tasknumerator.md)(): [false](language.types.singleton.md)|[int](language.types.integer.md)

public function [unique](gearmantask.unique.md)(): [false](language.types.singleton.md)|[string](language.types.string.md)

}

## Índice

- [GearmanTask::\_\_construct](gearmantask.construct.md) — Cria uma instância de GearmanTask
- [GearmanTask::create](gearmantask.create.md) — Cria uma tarefa (descontinuado)
- [GearmanTask::data](gearmantask.data.md) — Obtém dados retornados para uma tarefa
- [GearmanTask::dataSize](gearmantask.datasize.md) — Obtém o tamanho dos dados retornados
- [GearmanTask::function](gearmantask.function.md) — Obtém o nome da função associada (descontinuado)
- [GearmanTask::functionName](gearmantask.functionname.md) — Obtém o nome da função associada
- [GearmanTask::isKnown](gearmantask.isknown.md) — Determina se a tarefa é conhecida
- [GearmanTask::isRunning](gearmantask.isrunning.md) — Testa se a tarefa está em execução no momento
- [GearmanTask::jobHandle](gearmantask.jobhandle.md) — Obtém o identificador do trabalho
- [GearmanTask::recvData](gearmantask.recvdata.md) — Lê dados de trabalho ou resultado em um buffer para uma tarefa
- [GearmanTask::returnCode](gearmantask.returncode.md) — Obtém o último código de retorno
- [GearmanTask::sendData](gearmantask.senddata.md) — Envia dados para uma tarefa (descontinuado)
- [GearmanTask::sendWorkload](gearmantask.sendworkload.md) — Envia dados para uma tarefa
- [GearmanTask::taskDenominator](gearmantask.taskdenominator.md) — Obtém o denominador percentual de conclusão
- [GearmanTask::taskNumerator](gearmantask.tasknumerator.md) — Obtém o numerador da porcentagem de conclusão
- [GearmanTask::unique](gearmantask.unique.md) — Obtém o identificador exclusivo para uma tarefa
- [GearmanTask::uuid](gearmantask.uuid.md) — Obtém o identificador exclusivo para uma tarefa (descontinuado)

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
