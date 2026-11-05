# Obtenha o resultado da consulta assíncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.reap-async-query.php

---

# mysqli::reap\_async\_query

# mysqli\_reap\_async\_query

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

mysqli::reap\_async\_query -- mysqli\_reap\_async\_query — Obtenha o resultado da consulta assíncrona

### Descrição

Estilo orientado a objetos

public function **mysqli::reap\_async\_query**(): [mysqli\_result](class.mysqli-result.md)|[bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_reap\_async\_query**([mysqli](class.mysqli.md) `$mysql`): [mysqli\_result](class.mysqli-result.md)|[bool](language.types.boolean.md)

Obtenha o resultado da consulta assíncrona.

> **Nota**:
>
> Disponível apenas com o [mysqlnd](book.mysqlnd.md).

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Retorna **`false`** em caso de falha. Para consultas bem-sucedidas que produzem um conjunto de resultados, como `SELECT, SHOW, DESCRIBE`
ou `EXPLAIN`, **mysqli\_reap\_async\_query()** retornará
um objeto [mysqli\_result](class.mysqli-result.md). Para outras consultas bem-sucedidas, **mysqli\_reap\_async\_query()**
retornará **`true`**.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Veja também

- [mysqli\_poll()](mysqli.poll.md) - Sondagem de conexões

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
