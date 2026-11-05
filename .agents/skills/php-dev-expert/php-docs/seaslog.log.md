# Função comum para registro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.log.php

---

# SeasLog::log

(PECL seaslog >=1.0.0)

SeasLog::log — Função comum para registro

### Descrição

public static function **SeasLog::log**(  
    [string](language.types.string.md) `$level`,  
    [string](language.types.string.md) `$message` = ?,  
    [array](language.types.array.md) `$content` = ?,  
    [string](language.types.string.md) `$logger` = ?  
): [bool](language.types.boolean.md)

Função comum para registro

### Parâmetros

`level`
:   Possíveis níveis:

    - [SEASLOG\_DEBUG](seaslog.constants.md#constant.seaslog-debug)
    - [SEASLOG\_INFO](seaslog.constants.md#constant.seaslog-info)
    - [SEASLOG\_NOTICE](seaslog.constants.md#constant.seaslog-notice)
    - [SEASLOG\_WARNING](seaslog.constants.md#constant.seaslog-warning)
    - [SEASLOG\_ERROR](seaslog.constants.md#constant.seaslog-error)
    - [SEASLOG\_CRITICAL](seaslog.constants.md#constant.seaslog-critical)
    - [SEASLOG\_ALERT](seaslog.constants.md#constant.seaslog-alert)
    - [SEASLOG\_EMERGENCY](seaslog.constants.md#constant.seaslog-emergency)

    Pode ser usado outro novo nível personalizado.

`message`
:   A mensagem para registro.

`content`
:   `message` pode conter marcadores de posição que são substituídos por valores do array `content`.
    Por exemplo, se `message` for `informações de registro de {NOME}` e `content` for `array('NOME' => neeke)`,
    as informações de registro serão `informações de registro de neeke`.

`logger`
:   O terceiro parâmetro `logger` pode ser usado
    como um registrador temporário, como se a função SeasLog::setLogger() tivesse sido chamada previamente.
    Se `logger` for NULL ou "", SeasLog usará o último registrador definido por [SeasLog::setLogger()](seaslog.setlogger.md).

### Valor Retornado

Retorna TRUE em caso de sucesso no registro da informação, FALSE em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SeasLog::log()****

```
<?php

var_dump(SeasLog::log(SEASLOG_INFO,'info log'));
var_dump(SeasLog::getBuffer());

// criando um novo nível personalizado.
var_dump(SeasLog::log('MySelfLevel','info log'));
var_dump(SeasLog::getBuffer());

// com conteúdo
var_dump(SeasLog::log('MySelfLevel','info log {NAME}',array('NAME' => 'neeke')));
var_dump(SeasLog::getBuffer());

// com registrador temporário
var_dump(SeasLog::log('MySelfLevel','info log {NAME}',array('NAME' => 'neeke'),'tmp_logger'));
var_dump(SeasLog::getBuffer());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
array(1) {
  ["/var/log/www/default/20180707.log"]=>
  array(1) {
    [0]=>
    string(79) "2018-07-07 11:12:37 | INFO | 72427 | 5b402fa56a2ea | 1530933157.436 | info log
"
  }
}

bool(true)
array(1) {
  ["/var/log/www/default/20180707.log"]=>
  array(1) {
    [0]=>
    string(86) "2018-07-07 11:13:59 | MySelfLevel | 72470 | 5b402ff781c5e | 1530933239.532 | info log
"
  }
}

bool(true)
array(1) {
  ["/var/log/www/tmp_logger/20180707.log"]=>
  array(1) {
    [0]=>
    string(92) "2018-07-07 11:28:12 | MySelfLevel | 72833 | 5b40334ce6a2f | 1530934092.946 | info log neeke
"
  }
}

bool(true)
array(1) {
  ["/var/log/www/default/20180707.log"]=>
  array(1) {
    [0]=>
    string(86) "2018-07-07 11:20:12 | INFO | 72616 | 5b40316c3641e | 1530933612.222 | info log neeke
"
  }
}
```

### Veja também

- [seaslog.default\_template](seaslog.configuration.md#ini.seaslog.default-template)
- [SeasLog::debug()](seaslog.debug.md) - Registra informação de depuração
- [SeasLog::info()](seaslog.info.md) - Registra informação geral
- [SeasLog::notice()](seaslog.notice.md) - Registra informação de nota
- [SeasLog::warning()](seaslog.warning.md) - Registra informação de alerta
- [SeasLog::error()](seaslog.error.md) - Registra informação de erro
- [SeasLog::critical()](seaslog.critical.md) - Registra informação crítica
- [SeasLog::alert()](seaslog.alert.md) - Registra informação de alerta
- [SeasLog::emergency()](seaslog.emergency.md) - Registra informação de emergência

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
