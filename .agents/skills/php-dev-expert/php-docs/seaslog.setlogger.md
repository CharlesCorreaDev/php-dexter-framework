# Define o nome do registrador SeasLog

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.setlogger.php

---

# SeasLog::setLogger

(PECL seaslog >=1.0.0)

SeasLog::setLogger — Define o nome do registrador SeasLog

### Descrição

public static function **SeasLog::setLogger**([string](language.types.string.md) `$logger`): [bool](language.types.boolean.md)

Use o método **SeasLog::setLogger()**
para alterar o resultado do método [SeasLog::getLastLogger()](seaslog.getlastlogger.md).
Ou seja, o SeasLog fará os registros no diretório definido.

### Parâmetros

`logger`
:   Nome do registrador.

### Valor Retornado

Retorna TRUE em caso de sucesso na criação do diretório do registrador ou FALSE em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SeasLog::setLogger()****

```
<?php

var_dump(SeasLog::setLogger('testModule/testLogger'));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
```

### Veja também

- [SeasLog::getLastLogger()](seaslog.getlastlogger.md) - Obtém o último caminho do registrador SeasLog
- [SeasLog::closeLoggerStream()](seaslog.closeloggerstream.md) - Libera manualmente o fluxo do registrador

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
