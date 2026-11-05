# Informa se o buffer está habilitado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.getbufferenabled.php

---

# SeasLog::getBufferEnabled

(PECL seaslog >=1.0.0)

SeasLog::getBufferEnabled — Informa se o buffer está habilitado

### Descrição

public static function **SeasLog::getBufferEnabled**(): [bool](language.types.boolean.md)

O resultado é uma combinação de [seaslog.use\_buffer](seaslog.configuration.md#ini.seaslog.use-buffer)
com [seaslog.buffer\_disabled\_in\_cli](seaslog.configuration.md#ini.seaslog.buffer-disabled-in-cli).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna TRUE se [seaslog.use\_buffer](seaslog.configuration.md#ini.seaslog.use-buffer) estiver ativado.
Se [seaslog.buffer\_disabled\_in\_cli](seaslog.configuration.md#ini.seaslog.buffer-disabled-in-cli) estiver ativado e a execução for em CLI,
a configuração seaslog.use\_buffer será descartada e o Seaslog escreverá no armazenamento de dados imediatamente.

### Examples

**Exemplo #1 Exemplo de **SeasLog::getBufferEnabled()****

```
<?php

var_dump(SeasLog::getBufferEnabled());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(false)
```

### Veja também

- [seaslog.use\_buffer](seaslog.configuration.md#ini.seaslog.use-buffer)
- [seaslog.buffer\_size](seaslog.configuration.md#ini.seaslog.buffer-size)
- [seaslog.buffer\_disabled\_in\_cli](seaslog.configuration.md#ini.seaslog.buffer-disabled-in-cli)
- [SeasLog::getBuffer()](seaslog.getbuffer.md) - Obter o buffer de registros na memória como um array
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
