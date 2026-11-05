# Retorna o tamanho do campo especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-field-len.php

---

# mysql\_field\_len

(PHP 4, PHP 5)

mysql\_field\_len — Retorna o tamanho do campo especificado

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_fetch\_field\_direct()](mysqli-result.fetch-field-direct.md) [length]
- [PDOStatement::getColumnMeta()](pdostatement.getcolumnmeta.md) [len]

### Descrição

function **mysql\_field\_len**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$field_offset`): [int](language.types.integer.md)|[false](language.types.singleton.md)

**mysql\_field\_len()** retorna o tamanho do campo
especificado.

### Parâmetros

`result`
:   O [resource](language.types.resource.md) do resultado que
    está sendo avaliado. Este resultado vem de uma chamada a
    [mysql\_query()](function.mysql-query.md).

`field_offset`
:   O deslocamento numérico do campo.
    `field_offset` começa em `0`. Se
    `field_offset` não existir, um erro de nível
    **`E_WARNING`** também será emitido.

### Valor Retornado

O tamanho do campo especificado em sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **mysql\_field\_len()****

```
<?php
$result = mysql_query("SELECT id,email FROM people WHERE id = '42'");
if (!$result) {
    echo 'Não foi possível executar a consulta: ' . mysql_error();
    exit;
}

// Obtendo o comprimento do campo 'id' como especificado no
// esquema do banco de dados.
$length = mysql_field_len($result, 0);
echo $length;
?>
```

### Notas

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **mysql\_fieldlen()**

### Veja também

- [mysql\_fetch\_lengths()](function.mysql-fetch-lengths.md) - Obtém o tamanho de cada saída de um resultado
- [strlen()](function.strlen.md) - Retorna o tamanho de uma string

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
