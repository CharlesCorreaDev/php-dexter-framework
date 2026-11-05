# Define o ID exlusivo de requisição do SeasLog

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.setrequestid.php

---

# SeasLog::setRequestID

(PECL seaslog >=1.0.0)

SeasLog::setRequestID — Define o ID exlusivo de requisição do SeasLog

### Descrição

public static function **SeasLog::setRequestID**([string](language.types.string.md) `$request_id`): [bool](language.types.boolean.md)

Para diferenciar exclusivamente um requisição sem invocar o método
**SeasLog::setRequestId()**,
o valor exclusivo gerado pela função interna `static char \*get\_uniqid ()`
é usado quando a requisição é inicializada.

### Parâmetros

`request_id`
:   String com o ID da requisição.

### Valor Retornado

Retorna TRUE em caso de sucesso na definição do ID da requisição ou FALSE em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SeasLog::setRequestID()****

```
<?php

var_dump(SeasLog::setRequestID(time() . rand()));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
```

### Veja também

- [SeasLog::getRequestID()](seaslog.getrequestid.md) - Obtém o ID da requisição do SeasLog

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
