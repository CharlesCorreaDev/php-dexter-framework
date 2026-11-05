# Obtém a contagem de registros por nível, caminho e palavra-chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.analyzercount.php

---

# SeasLog::analyzerCount

(PECL seaslog >=1.1.6)

SeasLog::analyzerCount — Obtém a contagem de registros por nível, caminho e palavra-chave

### Descrição

public static function **SeasLog::analyzerCount**([string](language.types.string.md) `$level`, [string](language.types.string.md) `$log_path` = ?, [string](language.types.string.md) `$key_word` = ?): [mixed](language.types.mixed.md)

`SeasLog` obtém o valor de contagem através de `grep -ai '{level}' | grep -aic '{key\_word}'`
usando pipe de sistema e retornando ao PHP (array ou int).

### Parâmetros

`level`
:   String. O nível de informação do registro.

`log_path`
:   String. O caminho das informações do registro.

`key_word`
:   String. A palavra-chave de busca para informações de registro.

### Valor Retornado

Se `level` for SEASLOG\_ALL ou vazio, retorna a contagem de todos os níveis como `array`.
Se `level` for SEASLOG\_INFO ou outro nível, retorna a contagem como `int`.

### Examples

**Exemplo #1 Exemplo de **SeasLog::analyzerCount()****

```
<?php

$countResult1 = SeasLog::analyzerCount();

// com `level`
$countResult2 = SeasLog::analyzerCount(SEASLOG_DEBUG);

// com `level` e `log_path`
$countResult3 = SeasLog::analyzerCount(SEASLOG_ERROR,date('Ymd',time()));

// com `level` e `key_word`
$countResult4 = SeasLog::analyzerCount(SEASLOG_DEBUG,NULL,'accessToken');

var_dump($countResult1,$countResult2,$countResult3,$countResult4);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(8) {
  ["DEBUG"]=>
  int(180)
  ["INFO"]=>
  int(214)
  ["NOTICE"]=>
  int(0)
  ["WARNING"]=>
  int(0)
  ["ERROR"]=>
  int(228)
  ["CRITICAL"]=>
  int(244)
  ["ALERT"]=>
  int(1)
  ["EMERGENCY"]=>
  int(0)
}

int(180)

int(228)

int(29)
```

### Veja também

- [SeasLog::analyzerDetail()](seaslog.analyzerdetail.md) - Obtém detalhe de registro por nível, caminho, palavra-chave, início, limite e ordem

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
