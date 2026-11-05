# Obtém as opções associadas ao campo especificado em um resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-field-flags.php

---

# mysql\_field\_flags

(PHP 4, PHP 5)

mysql\_field\_flags — Obtém as opções associadas ao campo especificado em um resultado

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_fetch\_field\_direct()](mysqli-result.fetch-field-direct.md) [opções]
- [PDOStatement::getColumnMeta()](pdostatement.getcolumnmeta.md) [opções]

### Descrição

function **mysql\_field\_flags**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$field_offset`): [string](language.types.string.md)|[false](language.types.singleton.md)

**mysql\_field\_flags()** retorna as opções do campo
especificado. As opções são mostradas como uma única palavra por
opção separada por um único espaço, de forma a permitir a divisão do
valor retornado com o uso da função [explode()](function.explode.md).

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

Retorna uma string com as opções associadas ao resultado ou **`false`** em caso de falha.

As seguintes opções são reportadas, se a versão do MySQL
for atual o suficiente para suportá-las: `"not_null"`,
`"primary_key"`, `"unique_key"`,
`"multiple_key"`, `"blob"`,
`"unsigned"`, `"zerofill"`,
`"binary"`, `"enum"`,
`"auto_increment"` e `"timestamp"`.

### Examples

**Exemplo #1 Um exemplo de **mysql\_field\_flags()****

```
<?php
$result = mysql_query("SELECT id,email FROM people WHERE id = '42'");
if (!$result) {
    echo 'Não foi possível executar a consulta: ' . mysql_error();
    exit;
}
$flags = mysql_field_flags($result, 0);

echo $flags;
print_r(explode(' ', $flags));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
not_null primary_key auto_increment
Array
(
    [0] => not_null
    [1] => primary_key
    [2] => auto_increment
)
```

### Notas

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **mysql\_fieldflags()**

### Veja também

- [mysql\_field\_type()](function.mysql-field-type.md) - Obtém o tipo do campo especificado em um resultado
- [mysql\_field\_len()](function.mysql-field-len.md) - Retorna o tamanho do campo especificado

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
