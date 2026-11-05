# Obtém detalhe de registro por nível, caminho, palavra-chave, início, limite e ordem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.analyzerdetail.php

---

# SeasLog::analyzerDetail

(PECL seaslog >=1.1.6)

SeasLog::analyzerDetail — Obtém detalhe de registro por nível, caminho, palavra-chave, início, limite e ordem

### Descrição

public static function **SeasLog::analyzerDetail**(  
    [string](language.types.string.md) `$level`,  
    [string](language.types.string.md) `$log_path` = ?,  
    [string](language.types.string.md) `$key_word` = ?,  
    [int](language.types.integer.md) `$start` = ?,  
    [int](language.types.integer.md) `$limit` = ?,  
    [int](language.types.integer.md) `$order` = ?  
): [mixed](language.types.mixed.md)

`SeasLog` obtém os resultados através de
`grep -ai '{level}' | grep -ai '{key\_word}' | sed -n '{start},{limit}'p`
usando pipe de sistema e retornando um array para o PHP.

### Parâmetros

`level`
:   String. O nível de informação do registro.

`log_path`
:   String. O caminho das informações do registro.

`key_word`
:   String. Palavra-chave de busca para informações de registro.

`start`
:   Inteiro indicando o início. O padrão é 1.

`limit`
:   Inteiro indicando o limite. O padrão é 20.

`order`
:   Inteiro indicando a ordem. O padrão é [SEASLOG\_DETAIL\_ORDER\_ASC](seaslog.constants.md#constant.seaslog-detail-order-asc).
    Opções:

    - [SEASLOG\_DETAIL\_ORDER\_ASC](seaslog.constants.md#constant.seaslog-detail-order-asc)
    - [SEASLOG\_DETAIL\_ORDER\_DESC](seaslog.constants.md#constant.seaslog-detail-order-desc)

### Valor Retornado

Retorna o resultado como um array.
> **Nota**:
>
> Quando `start` e `limit` não são valores nulos no Windows,
> SeasLog lançará uma exceção com a mensagem 'Param start and limit don't support Windows' (parâmetros 'start' e 'limit' não suportados no Windows).

### Examples

**Exemplo #1 Exemplo de **SeasLog::analyzerDetail()****

```
<?php

$result1 = SeasLog::analyzerDetail(SEASLOG_ERROR);

// com `logger` e `key_word`
$result2 = SeasLog::analyzerDetail(SEASLOG_ERROR, 'test/logger/', 'neeke');

// com `start` e `limit`
$result3 = SeasLog::analyzerDetail(SEASLOG_ERROR, 'test/logger/', 'neeke', 1, 2);

var_dump($result1,$result2,$result3);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(20) {
  [0]=>
  string(93) "2018-07-09 12:52:53 | ERROR | 12247 | 5b42ea2580e51 | 1531111973.528 | log message from neeke"
  [1]=>
  string(93) "2018-07-09 12:52:54 | ERROR | 12256 | 5b42ea26d6657 | 1531111974.878 | log message from neeke"
  [2]=>
  string(93) "2018-07-09 12:52:55 | ERROR | 12265 | 5b42ea277b8d4 | 1531111975.506 | log message from neeke"
  [3]=>
  string(104) "2018-07-09 12:52:55 | ERROR | 12274 | 5b42ea27db5dc | 1531111975.898 | log message from the other people"
...
}

array(3) {
  [0]=>
  string(93) "2018-07-09 12:52:53 | ERROR | 12247 | 5b42ea2580e51 | 1531111973.528 | log message from neeke"
  [1]=>
  string(93) "2018-07-09 12:52:54 | ERROR | 12256 | 5b42ea26d6657 | 1531111974.878 | log message from neeke"
  [2]=>
  string(93) "2018-07-09 12:52:55 | ERROR | 12265 | 5b42ea277b8d4 | 1531111975.506 | log message from neeke"
}

array(2) {
  [0]=>
  string(93) "2018-07-09 12:52:53 | ERROR | 12247 | 5b42ea2580e51 | 1531111973.528 | log message from neeke"
  [1]=>
  string(93) "2018-07-09 12:52:54 | ERROR | 12256 | 5b42ea26d6657 | 1531111974.878 | log message from neeke"
}
```

### Veja também

- [SeasLog::analyzerCount()](seaslog.analyzercount.md) - Obtém a contagem de registros por nível, caminho e palavra-chave

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
