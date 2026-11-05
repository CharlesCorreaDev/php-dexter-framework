# A classe GearmanWorker

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.gearmanworker.php

---

# A classe GearmanWorker

(PECL gearman >= 0.5.0)

## Introdução

## Resumo da classe

class ****GearmanWorker****
{

/\* Métodos \*/

public function [\_\_construct](gearmanworker.construct.md)()

public function [addFunction](gearmanworker.addfunction.md)(  
    [string](language.types.string.md) `$function_name`,  
    [callable](language.types.callable.md) `$function`,  
    [mixed](language.types.mixed.md) `$context` = **`null`**,  
    [int](language.types.integer.md) `$timeout` = 0  
): [bool](language.types.boolean.md)

public function [addOptions](gearmanworker.addoptions.md)([int](language.types.integer.md) `$option`): [true](language.types.singleton.md)

public function [addServer](gearmanworker.addserver.md)([string](language.types.string.md) `$host` = **`null`**, [int](language.types.integer.md) `$port` = 0, [bool](language.types.boolean.md) `$setupExceptionHandler` = **`true`**): [bool](language.types.boolean.md)

public function [addServers](gearmanworker.addservers.md)([string](language.types.string.md) `$servers` = **`null`**, [bool](language.types.boolean.md) `$setupExceptionHandler` = **`true`**): [bool](language.types.boolean.md)

public function [error](gearmanworker.error.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getErrno](gearmanworker.geterrno.md)(): [int](language.types.integer.md)

public function [options](gearmanworker.options.md)(): [int](language.types.integer.md)

public function [register](gearmanworker.register.md)([string](language.types.string.md) `$function_name`, [int](language.types.integer.md) `$timeout` = 0): [bool](language.types.boolean.md)

public function [removeOptions](gearmanworker.removeoptions.md)([int](language.types.integer.md) `$option`): [true](language.types.singleton.md)

public function [returnCode](gearmanworker.returncode.md)(): [int](language.types.integer.md)

public function [setId](gearmanworker.setid.md)([string](language.types.string.md) `$id`): [bool](language.types.boolean.md)

public function [setOptions](gearmanworker.setoptions.md)([int](language.types.integer.md) `$option`): [true](language.types.singleton.md)

public function [setTimeout](gearmanworker.settimeout.md)([int](language.types.integer.md) `$timeout`): [true](language.types.singleton.md)

public function [timeout](gearmanworker.timeout.md)(): [int](language.types.integer.md)

public function [unregister](gearmanworker.unregister.md)([string](language.types.string.md) `$function_name`): [bool](language.types.boolean.md)

public function [unregisterAll](gearmanworker.unregisterall.md)(): [bool](language.types.boolean.md)

public function [wait](gearmanworker.wait.md)(): [bool](language.types.boolean.md)

public function [work](gearmanworker.work.md)(): [bool](language.types.boolean.md)

}

## Índice

- [GearmanWorker::addFunction](gearmanworker.addfunction.md) — Registra e adiciona função de retorno
- [GearmanWorker::addOptions](gearmanworker.addoptions.md) — Adiciona opções do trabalhador
- [GearmanWorker::addServer](gearmanworker.addserver.md) — Adiciona um servidor de trabalho
- [GearmanWorker::addServers](gearmanworker.addservers.md) — Adiciona servidores de trabalho
- [GearmanWorker::clone](gearmanworker.clone.md) — Cria uma cópia do trabalhador
- [GearmanWorker::\_\_construct](gearmanworker.construct.md) — Cria uma instância de GearmanWorker
- [GearmanWorker::echo](gearmanworker.echo.md) — Testa a resposta do servidor de trabalho
- [GearmanWorker::error](gearmanworker.error.md) — Obtém o último erro encontrado
- [GearmanWorker::getErrno](gearmanworker.geterrno.md) — Obtém o número do erro
- [GearmanWorker::options](gearmanworker.options.md) — Obtém opções do trabalhador
- [GearmanWorker::register](gearmanworker.register.md) — Registra uma função com o servidor de trabalho
- [GearmanWorker::removeOptions](gearmanworker.removeoptions.md) — Remove opções do trabalhador
- [GearmanWorker::returnCode](gearmanworker.returncode.md) — Obtém o último código de retorno do Gearman
- [GearmanWorker::setId](gearmanworker.setid.md) — Fornece ao trabalhador um identificador para que ele possa ser rastreado ao solicitar ao gearmand a lista de trabalhadores disponíveis
- [GearmanWorker::setOptions](gearmanworker.setoptions.md) — Define opções do trabalhador
- [GearmanWorker::setTimeout](gearmanworker.settimeout.md) — Define o tempo limite da atividade de E/S do soquete
- [GearmanWorker::timeout](gearmanworker.timeout.md) — Obtém tempo limite de atividade de E/S do soquete
- [GearmanWorker::unregister](gearmanworker.unregister.md) — Cancela o registro de um nome de função com os servidores de trabalho
- [GearmanWorker::unregisterAll](gearmanworker.unregisterall.md) — Cancela o registro de todos os nomes de funções com os servidores de trabalho
- [GearmanWorker::wait](gearmanworker.wait.md) — Aguarda atividade de um dos servidores de trabalho
- [GearmanWorker::work](gearmanworker.work.md) — Espera e executa trabalhos

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
