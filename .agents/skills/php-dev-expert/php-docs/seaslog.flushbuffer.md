# Limpa o buffer de registros, despeja no arquivo ou envia para API remota com tcp/udp

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.flushbuffer.php

---

# SeasLog::flushBuffer

(PECL seaslog >=1.0.0)

SeasLog::flushBuffer — Limpa o buffer de registros, despeja no arquivo ou envia para API remota com tcp/udp

### Descrição

public static function **SeasLog::flushBuffer**(): [bool](language.types.boolean.md)

Limpa o buffer de registros [seaslog.appender](seaslog.configuration.md#ini.seaslog.appender):
despeja em um arquivo ou envia para uma API remota com tcp/udp.
> **Nota**:
>
> Consulte também:
> [seaslog.appender\_retry](seaslog.configuration.md#ini.seaslog.appender-retry)
> [seaslog.remote\_host](seaslog.configuration.md#ini.seaslog.remote-host)
> [seaslog.remote\_port](seaslog.configuration.md#ini.seaslog.remote-port)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna TRUE em caso de sucesso na limpeza do buffer, FALSE em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SeasLog::flushBuffer()****

```
<?php

SeasLog::info('info log');
SeasLog::debug('debug log');
var_dump(SeasLog::getBuffer());
var_dump(SeasLog::flushBuffer());
var_dump(SeasLog::getBuffer());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1) {
  ["/var/log/www/default/20180707.log"]=>
  array(2) {
    [0]=>
    string(79) "2018-07-07 10:47:58 | INFO | 71910 | 5b4029ded6009 | 1530931678.877 | info log
"
    [1]=>
    string(81) "2018-07-07 10:47:58 | DEBUG | 71910 | 5b4029ded6009 | 1530931678.877 | debug log
"
  }
}
bool(true)
array(0) {
}
```

### Veja também

- [seaslog.use\_buffer](seaslog.configuration.md#ini.seaslog.use-buffer)
- [seaslog.buffer\_size](seaslog.configuration.md#ini.seaslog.buffer-size)
- [seaslog.buffer\_disabled\_in\_cli](seaslog.configuration.md#ini.seaslog.buffer-disabled-in-cli)
- [SeasLog::getBufferEnabled()](seaslog.getbufferenabled.md) - Informa se o buffer está habilitado
- [SeasLog::getBuffer()](seaslog.getbuffer.md) - Obter o buffer de registros na memória como um array

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
