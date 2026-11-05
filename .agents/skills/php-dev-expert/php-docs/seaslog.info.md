# Registra informação geral

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.info.php

---

# SeasLog::info

(PECL seaslog >=1.0.0)

SeasLog::info — Registra informação geral

### Descrição

public static function **SeasLog::info**([string](language.types.string.md) `$message`, [array](language.types.array.md) `$content` = ?, [string](language.types.string.md) `$logger` = ?): [bool](language.types.boolean.md)

Registra informação geral.
> **Nota**:
>
> "INFO" - Eventos interessantes. Enfatiza o processo de execução do aplicativo.

### Parâmetros

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

**Exemplo #1 Exemplo de **SeasLog::info()****

```
<?php

var_dump(SeasLog::info('log message'));

// com conteúdo
var_dump(SeasLog::info('log message from {NAME}',array('NAME' => 'neeke')));

// com registrador temporário
var_dump(SeasLog::info('log message from {NAME}',array('NAME' => 'neeke'),'tmp_logger'));

var_dump(SeasLog::getBuffer());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(true)
bool(true)
array(2) {
  ["/var/log/www/default/20180707.log"]=>
  array(2) {
    [0]=>
    string(81) "2018-07-07 11:45:49 | INFO | 73263 | 5b40376d1067c | 1530935149.68 | log message
"
    [1]=>
    string(92) "2018-07-07 11:45:49 | INFO | 73263 | 5b40376d1067c | 1530935149.68 | log message from neeke
"
  }
  ["/var/log/www/tmp_logger/20180707.log"]=>
  array(1) {
    [0]=>
    string(92) "2018-07-07 11:45:49 | INFO | 73263 | 5b40376d1067c | 1530935149.68 | log message from neeke
"
  }
}
```

### Veja também

- [seaslog.default\_template](seaslog.configuration.md#ini.seaslog.default-template)
- [SeasLog::debug()](seaslog.debug.md) - Registra informação de depuração
- [SeasLog::notice()](seaslog.notice.md) - Registra informação de nota
- [SeasLog::warning()](seaslog.warning.md) - Registra informação de alerta
- [SeasLog::error()](seaslog.error.md) - Registra informação de erro
- [SeasLog::critical()](seaslog.critical.md) - Registra informação crítica
- [SeasLog::alert()](seaslog.alert.md) - Registra informação de alerta
- [SeasLog::emergency()](seaslog.emergency.md) - Registra informação de emergência
- [SeasLog::log()](seaslog.log.md) - Função comum para registro

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
