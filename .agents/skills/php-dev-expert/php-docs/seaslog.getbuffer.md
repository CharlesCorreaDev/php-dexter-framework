# Obter o buffer de registros na memória como um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.getbuffer.php

---

# SeasLog::getBuffer

(PECL seaslog >=1.0.0)

SeasLog::getBuffer — Obter o buffer de registros na memória como um array

### Descrição

public static function **SeasLog::getBuffer**(): [array](language.types.array.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de buffers de registros na memória.

### Examples

**Exemplo #1 Exemplo de **SeasLog::getBuffer()****

```
<?php

var_dump(SeasLog::info('info log'));
var_dump(SeasLog::debug('debug log'));
var_dump(SeasLog::getBuffer());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(true)
array(1) {
  ["/var/log/www/default/20180707.log"]=>
  array(2) {
    [0]=>
    string(79) "2018-07-07 10:43:32 | INFO | 71785 | 5b4028d4c58d5 | 1530931412.810 | info log
"
    [1]=>
    string(81) "2018-07-07 10:43:32 | DEBUG | 71785 | 5b4028d4c58d5 | 1530931412.810 | debug log
"
  }
}
```

### Veja também

- [seaslog.use\_buffer](seaslog.configuration.md#ini.seaslog.use-buffer)
- [seaslog.buffer\_size](seaslog.configuration.md#ini.seaslog.buffer-size)
- [seaslog.buffer\_disabled\_in\_cli](seaslog.configuration.md#ini.seaslog.buffer-disabled-in-cli)
- [SeasLog::getBufferEnabled()](seaslog.getbufferenabled.md) - Informa se o buffer está habilitado
- [SeasLog::flushBuffer()](seaslog.flushbuffer.md) - Limpa o buffer de registros, despeja no arquivo ou envia para API remota com tcp/udp

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
