# Retorna a próxima linha de uma consulta como um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-fetch-object.php

---

# oci\_fetch\_object

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_fetch\_object — Retorna a próxima linha de uma consulta como um objeto

### Descrição

function **oci\_fetch\_object**([resource](language.types.resource.md) `$statement`, [int](language.types.integer.md) `$mode` = OCI\_ASSOC | OCI\_RETURN\_NULLS): [stdClass](class.stdclass.md)|[false](language.types.singleton.md)

Retorna um objeto contendo a próxima linha do conjunto de resultados de uma consulta.
Cada atributo do objeto corresponde a uma coluna da linha.
Esta função normalmente é chamada em um laço até retornar
**`false`**, indicando que não existem mais linhas.

Para obter detalhes sobre o mapeamento dos tipos de dados realizado pela
extensão OCI8, consulte os [tipos de dados
suportados pelo driver](oci8.datatypes.md).

### Parâmetros

`statement`
:   Um identificador de declaração OCI8
    válida criada por [oci\_parse()](function.oci-parse.md) e executada
    por [oci\_execute()](function.oci-execute.md) ou um identificador de declaração `REF
    CURSOR`.

### Valor Retornado

Retorna um objeto. Cada atributo do objeto corresponde a uma
coluna da linha. Se não houver mais linhas
em `statement`, então **`false`** será retornado.

Quaisquer colunas `LOB` são retornadas como descritores LOB.

As colunas `DATE` são retornadas como strings
no formato de data atual. O formato padrão pode ser alterado com
variáveis ​​de ambiente Oracle, como `NLS_LANG` ou
por um comando `ALTER SESSION SET
NLS_DATE_FORMAT` executado anteriormente.

Os nomes de colunas padrão do Oracle, que não diferenciam maiúsculas de minúsculas, terão
nomes de atributos em letras maiúsculas. Os nomes de colunas que diferenciam maiúsculas de minúsculas terão
nomes de atributos usando a mesma capitalização de coluna.
Use [var\_dump()](function.var-dump.md) no objeto de resultado para verificar
a capitalização apropriada para acesso ao atributo.

Os valores dos atributos serão **`null`** para quaisquer campos de
dados `NULL`.

### Examples

**Exemplo #1 Exemplo de **oci\_fetch\_object()****

```
<?php

/*
  Antes de executar, crie a tabela:
    CREATE TABLE mytab (id NUMBER, description VARCHAR2(30));
    INSERT INTO mytab (id, description) values (1, 'Fish and Chips');
    COMMIT;
*/

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT id, description FROM mytab');
oci_execute($stid);

while (($row = oci_fetch_object($stid)) != false) {
    // Use nomes de atributos em letras maiúsculas para cada coluna padrão do Oracle
    echo $row->ID . "<br>\n";
    echo $row->DESCRIPTION . "<br>\n";
}

// O resultado é:
//    1
//    Fish and Chips

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #2 **oci\_fetch\_object()** com nomes de colunas que diferenciam maiúsculas de minúsculas**

```
<?php

/*
  Antes de executar, crie a tabela com um nome de coluna que diferencie maiúsculas de minúsculas:
    CREATE TABLE mytab (id NUMBER, "MyDescription" VARCHAR2(30));
    INSERT INTO mytab (id, "MyDescription") values (1, 'Iced Coffee');
    COMMIT;
*/

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT id, "MyDescription" FROM mytab');
oci_execute($stid);

while (($row = oci_fetch_object($stid)) != false) {
    // Use nomes de atributos em letras maiúsculas para cada coluna padrão do Oracle
    echo $row->ID . "<br>\n";
    // Use a capitalização exata para o nome da coluna que diferencia maiúsculas de minúsculas
    echo $row->MyDescription . "<br>\n";
}

// Resultado:
//    1
//    Iced Coffee

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #3 **oci\_fetch\_object()** com LOBs**

```
<?php

/*
  Antes de executar, crie a tabela:
    CREATE TABLE mytab (id NUMBER, description CLOB);
    INSERT INTO mytab (id, description) values (1, 'A very long string');
    COMMIT;
*/

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT id, description FROM mytab');
oci_execute($stid);

while (($row = oci_fetch_object($stid)) != false) {
    echo $row->ID . "<br>\n";
    // O código a seguir produzirá os primeiros 11 bytes de DESCRIPTION
    echo $row->DESCRIPTION->read(11) . "<br>\n";
}

// O resultado é:
//    1
//    A very long

oci_free_statement($stid);
oci_close($conn);

?>
```

### Veja também

- [oci\_fetch()](function.oci-fetch.md) - Busca a próxima linha de uma consulta em buffers internos
- [oci\_fetch\_all()](function.oci-fetch-all.md) - Busca várias linhas de uma consulta em um array bidimensional
- [oci\_fetch\_assoc()](function.oci-fetch-assoc.md) - Retorna a próxima linha de uma consulta como um array associativo
- [oci\_fetch\_array()](function.oci-fetch-array.md) - Retorna a próxima linha de uma consulta como um array associativo ou numérico
- [oci\_fetch\_row()](function.oci-fetch-row.md) - Retorna a próxima linha de uma consulta como um array numérico

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
