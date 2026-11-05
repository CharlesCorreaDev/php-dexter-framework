# A classe SeasLog

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.seaslog.php

---

# A classe SeasLog

(PECL seaslog >=1.0.0)

## Introdução

## Resumo da classe

class **SeasLog**
{

/\* Métodos \*/

public static function [alert](seaslog.alert.md)([string](language.types.string.md) `$message`, [array](language.types.array.md) `$content` = ?, [string](language.types.string.md) `$logger` = ?): [bool](language.types.boolean.md)

public static function [analyzerCount](seaslog.analyzercount.md)([string](language.types.string.md) `$level`, [string](language.types.string.md) `$log_path` = ?, [string](language.types.string.md) `$key_word` = ?): [mixed](language.types.mixed.md)

public static function [analyzerDetail](seaslog.analyzerdetail.md)(  
    [string](language.types.string.md) `$level`,  
    [string](language.types.string.md) `$log_path` = ?,  
    [string](language.types.string.md) `$key_word` = ?,  
    [int](language.types.integer.md) `$start` = ?,  
    [int](language.types.integer.md) `$limit` = ?,  
    [int](language.types.integer.md) `$order` = ?  
): [mixed](language.types.mixed.md)

public static function [closeLoggerStream](seaslog.closeloggerstream.md)([int](language.types.integer.md) `$model`, [string](language.types.string.md) `$logger`): [bool](language.types.boolean.md)

public static function [critical](seaslog.critical.md)([string](language.types.string.md) `$message`, [array](language.types.array.md) `$content` = ?, [string](language.types.string.md) `$logger` = ?): [bool](language.types.boolean.md)

public static function [debug](seaslog.debug.md)([string](language.types.string.md) `$message`, [array](language.types.array.md) `$content` = ?, [string](language.types.string.md) `$logger` = ?): [bool](language.types.boolean.md)

public function [\_\_destruct](seaslog.destruct.md)()

public static function [emergency](seaslog.emergency.md)([string](language.types.string.md) `$message`, [array](language.types.array.md) `$content` = ?, [string](language.types.string.md) `$logger` = ?): [bool](language.types.boolean.md)

public static function [error](seaslog.error.md)([string](language.types.string.md) `$message`, [array](language.types.array.md) `$content` = ?, [string](language.types.string.md) `$logger` = ?): [bool](language.types.boolean.md)

public static function [flushBuffer](seaslog.flushbuffer.md)(): [bool](language.types.boolean.md)

public static function [Seaslog::getBasePath](seaslog.getbasepath.md)(): [string](language.types.string.md)

public static function [getBuffer](seaslog.getbuffer.md)(): [array](language.types.array.md)

public static function [getBufferEnabled](seaslog.getbufferenabled.md)(): [bool](language.types.boolean.md)

public static function [getDatetimeFormat](seaslog.getdatetimeformat.md)(): [string](language.types.string.md)

public static function [getLastLogger](seaslog.getlastlogger.md)(): [string](language.types.string.md)

public static function [getRequestID](seaslog.getrequestid.md)(): [string](language.types.string.md)

public static function [getRequestVariable](seaslog.getrequestvariable.md)([int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

public static function [info](seaslog.info.md)([string](language.types.string.md) `$message`, [array](language.types.array.md) `$content` = ?, [string](language.types.string.md) `$logger` = ?): [bool](language.types.boolean.md)

public static function [log](seaslog.log.md)(  
    [string](language.types.string.md) `$level`,  
    [string](language.types.string.md) `$message` = ?,  
    [array](language.types.array.md) `$content` = ?,  
    [string](language.types.string.md) `$logger` = ?  
): [bool](language.types.boolean.md)

public static function [notice](seaslog.notice.md)([string](language.types.string.md) `$message`, [array](language.types.array.md) `$content` = ?, [string](language.types.string.md) `$logger` = ?): [bool](language.types.boolean.md)

public static function [setBasePath](seaslog.setbasepath.md)([string](language.types.string.md) `$base_path`): [bool](language.types.boolean.md)

public static function [setDatetimeFormat](seaslog.setdatetimeformat.md)([string](language.types.string.md) `$format`): [bool](language.types.boolean.md)

public static function [setLogger](seaslog.setlogger.md)([string](language.types.string.md) `$logger`): [bool](language.types.boolean.md)

public static function [setRequestID](seaslog.setrequestid.md)([string](language.types.string.md) `$request_id`): [bool](language.types.boolean.md)

public static function [setRequestVariable](seaslog.setrequestvariable.md)([int](language.types.integer.md) `$key`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

public static function [warning](seaslog.warning.md)([string](language.types.string.md) `$message`, [array](language.types.array.md) `$content` = ?, [string](language.types.string.md) `$logger` = ?): [bool](language.types.boolean.md)

}

## Índice

- [SeasLog::alert](seaslog.alert.md) — Registra informação de alerta
- [SeasLog::analyzerCount](seaslog.analyzercount.md) — Obtém a contagem de registros por nível, caminho e palavra-chave
- [SeasLog::analyzerDetail](seaslog.analyzerdetail.md) — Obtém detalhe de registro por nível, caminho, palavra-chave, início, limite e ordem
- [SeasLog::closeLoggerStream](seaslog.closeloggerstream.md) — Libera manualmente o fluxo do registrador
- [SeasLog::\_\_construct](seaslog.construct.md) — Constrói objeto SeasLog
- [SeasLog::critical](seaslog.critical.md) — Registra informação crítica
- [SeasLog::debug](seaslog.debug.md) — Registra informação de depuração
- [SeasLog::\_\_destruct](seaslog.destruct.md) — Destrói o objeto SeasLog
- [SeasLog::emergency](seaslog.emergency.md) — Registra informação de emergência
- [SeasLog::error](seaslog.error.md) — Registra informação de erro
- [SeasLog::flushBuffer](seaslog.flushbuffer.md) — Limpa o buffer de registros, despeja no arquivo ou envia para API remota com tcp/udp
- [SeasLog::getBasePath](seaslog.getbasepath.md) — Obtém o caminho base do SeasLog
- [SeasLog::getBuffer](seaslog.getbuffer.md) — Obter o buffer de registros na memória como um array
- [SeasLog::getBufferEnabled](seaslog.getbufferenabled.md) — Informa se o buffer está habilitado
- [SeasLog::getDatetimeFormat](seaslog.getdatetimeformat.md) — Obtém o formato de data/horário do SeasLog
- [SeasLog::getLastLogger](seaslog.getlastlogger.md) — Obtém o último caminho do registrador SeasLog
- [SeasLog::getRequestID](seaslog.getrequestid.md) — Obtém o ID da requisição do SeasLog
- [SeasLog::getRequestVariable](seaslog.getrequestvariable.md) — Obtém a variável requisitada do SeasLog
- [SeasLog::info](seaslog.info.md) — Registra informação geral
- [SeasLog::log](seaslog.log.md) — Função comum para registro
- [SeasLog::notice](seaslog.notice.md) — Registra informação de nota
- [SeasLog::setBasePath](seaslog.setbasepath.md) — Define o caminho base do SeasLog
- [SeasLog::setDatetimeFormat](seaslog.setdatetimeformat.md) — Define o formato de data/horário do SeasLog
- [SeasLog::setLogger](seaslog.setlogger.md) — Define o nome do registrador SeasLog
- [SeasLog::setRequestID](seaslog.setrequestid.md) — Define o ID exlusivo de requisição do SeasLog
- [SeasLog::setRequestVariable](seaslog.setrequestvariable.md) — Define manualmente uma variável de requisição SeasLog
- [SeasLog::warning](seaslog.warning.md) — Registra informação de alerta

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
