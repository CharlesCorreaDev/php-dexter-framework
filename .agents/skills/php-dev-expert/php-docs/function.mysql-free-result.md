# Libera memória usada pelo resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-free-result.php

---

# mysql\_free\_result

(PHP 4, PHP 5)

mysql\_free\_result — Libera memória usada pelo resultado

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_free\_result()](mysqli-result.free.md)
- Atribuir o valor **`null`** ao objeto PDO ou [PDOStatement::closeCursor()](pdostatement.closecursor.md)

### Descrição

function **mysql\_free\_result**([resource](language.types.resource.md) `$result`): [bool](language.types.boolean.md)

**mysql\_free\_result()** liberará toda a memória
associada ao identificador de resultado `result`.

**mysql\_free\_result()** apenas precisa ser chamada
se houver preocupação sobre a quantidade de memória usada em consultas
que retornam grandes conjuntos de resultados. Toda a memória associada ao resultado
é liberada automaticamente no final da execução do script.

### Parâmetros

`result`
:   O [resource](language.types.resource.md) do resultado que
    está sendo avaliado. Este resultado vem de uma chamada a
    [mysql\_query()](function.mysql-query.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

Se for usado algo que não seja um recurso para o parâmetro `result`, um
erro de nível E\_WARNING será emitido. É importante observar que
[mysql\_query()](function.mysql-query.md) somente retorna um [resource](language.types.resource.md)
para consultas SELECT, SHOW, EXPLAIN e DESCRIBE.

### Examples

**Exemplo #1 Um exemplo de **mysql\_free\_result()****

```
<?php
$result = mysql_query("SELECT id,email FROM people WHERE id = '42'");
if (!$result) {
    echo 'Não foi possível executar a consulta: ' . mysql_error();
    exit;
}
/* Usa o resultado assumindo que não vamos precisar mais dele depois */
$row = mysql_fetch_assoc($result);

/* Agora a memória do resultado é liberada e a execução do script continua */
mysql_free_result($result);

echo $row['id'];
echo $row['email'];
?>
```

### Notas

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **mysql\_freeresult()**

### Veja também

- [mysql\_query()](function.mysql-query.md) - Envia uma consulta MySQL
- [is\_resource()](function.is-resource.md) - Verifica se uma variável é um recurso

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
