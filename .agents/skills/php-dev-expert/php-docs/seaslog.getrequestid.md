# Obtém o ID da requisição do SeasLog

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.getrequestid.php

---

# SeasLog::getRequestID

(PECL seaslog >=1.0.0)

SeasLog::getRequestID — Obtém o ID da requisição do SeasLog

### Descrição

public static function **SeasLog::getRequestID**(): [string](language.types.string.md)

Para distinguir uma requisição exclusivamente sem invocar o método
[SeasLog::setRequestId()](seaslog.setrequestid.md),
o valor exclusivo gerado pela função interna `static char \*get\_uniqid ()`
é usado quando a requisição é inicializada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string gerada pela função interna `static char \*get\_uniqid ()` function,
ou definida pelo método [SeasLog::setRequestId()](seaslog.setrequestid.md).

### Examples

**Exemplo #1 Exemplo de **SeasLog::getRequestID()****

```
<?php

var_dump(SeasLog::getRequestID());
var_dump(SeasLog::setRequestID('reqeust_id_test_'.time()));
var_dump(SeasLog::getRequestID());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(13) "5b3f21a209519"
bool(true)
string(26) "reqeust_id_test_1530864034"
```

### Veja também

- [SeasLog::setRequestID()](seaslog.setrequestid.md) - Define o ID exlusivo de requisição do SeasLog
- A variável `%Q` na
  [Tabela de Variáveis Padrão do Seaslog](seaslog.configuration.md#ini.seaslog.default-template).

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
