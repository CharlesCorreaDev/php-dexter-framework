# Associa uma variável PHP a uma coluna para buscas de consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-define-by-name.php

---

# oci\_define\_by\_name

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_define\_by\_name — Associa uma variável PHP a uma coluna para buscas de consulta

### Descrição

function **oci\_define\_by\_name**(  
    [resource](language.types.resource.md) `$statement`,  
    [string](language.types.string.md) `$column`,  
    [mixed](language.types.mixed.md) `&$var`,  
    [int](language.types.integer.md) `$type` = 0  
): [bool](language.types.boolean.md)

Associa uma variável PHP a uma coluna para buscas de consulta usando [oci\_fetch()](function.oci-fetch.md).

A chamada **oci\_define\_by\_name()** deve ocorrer antes
de executar [oci\_execute()](function.oci-execute.md).

### Parâmetros

`statement`
:   Um identificador de declaração OCI8
    válida criada por [oci\_parse()](function.oci-parse.md) e executada
    por [oci\_execute()](function.oci-execute.md) ou um identificador de declaração `REF
    CURSOR`.

`column`
:   O nome da coluna usada na consulta.

    Use letras maiúsculas para os nomes de colunas padrão do Oracle, que não diferenciam maiúsculas
    de minúsculas. Use a forma exata do nome da coluna para nomes de colunas
    que diferenciam maiúsculas de minúsculas.

`var`
:   A variável PHP que conterá o valor da coluna retornada.

`type`
:   O tipo de dado a ser retornado. Geralmente não é necessário. Observe que
    conversões de dados no estilo Oracle não são realizadas. Por exemplo,
    **`SQLT_INT`** será ignorado e o tipo de dado
    retornado ainda será **`SQLT_CHR`**.

    Opcionalmente, podem ser usada a função [oci\_new\_descriptor()](function.oci-new-descriptor.md)
    para alocar descritores LOB/ROWID/BFILE.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **oci\_define\_by\_name()****

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$sql = 'SELECT location_id, city FROM locations WHERE location_id < 1200';
$stid = oci_parse($conn, $sql);

// As definições DEVEM ser feitas antes da execução
oci_define_by_name($stid, 'LOCATION_ID', $locid);
oci_define_by_name($stid, 'CITY', $city);

oci_execute($stid);

// Cada busca preenche as variáveis ​​definidas anteriormente com os dados da próxima linha
while (oci_fetch($stid)) {
    echo "location_id $locid é $city<br>\n";
}

// Resultado:
//   location_id 1000 é Roma
//   location_id 1100 é Venice

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #2 **oci\_define\_by\_name()** com nomes de colunas que diferenciam maiúsculas de minúsculas**

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

$stid = oci_parse($conn, 'SELECT * FROM mytab');

// Use letras maiúsculas para nomes de colunas que não diferenciam maiúsculas de minúsculas
oci_define_by_name($stid, 'ID', $id);

// Use a caixa exata para nomes de colunas que diferenciam maiúsculas de minúsculas
oci_define_by_name($stid, 'MyDescription', $mydesc);

oci_execute($stid);

while (oci_fetch($stid)) {
    echo "id $id é $mydesc<br>\n";
}

// Resultado:
//   id 1 é Iced Coffee

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #3 **oci\_define\_by\_name()** com colunas LOB**

```
<?php

/*
  Antes de executar, crie a tabela:
    CREATE TABLE mytab (id NUMBER, fruit CLOB);
    INSERT INTO mytab (id, fruit) values (1, 'apple');
    INSERT INTO mytab (id, fruit) values (2, 'orange');
    COMMIT;
*/

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT * FROM mytab');

// As definições DEVEM ser feitas antes da execução
oci_define_by_name($stid, 'ID', $id);
oci_define_by_name($stid, 'FRUIT', $fruit);  // $fruit will become a LOB descriptor

oci_execute($stid);

while (oci_fetch($stid)) {
    echo $id . " é " . $fruit->load(100) . "<br>\n";
}

// Resultado:
//   1 é apple
//   2 é orange

$fruit->free();
oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #4 **oci\_define\_by\_name()** com um tipo explícito**

```
<?php

/*
  Antes de executar, crie a tabela:
    CREATE TABLE mytab (id NUMBER, fruit CLOB);
    INSERT INTO mytab (id, fruit) values (1, 'apple');
    INSERT INTO mytab (id, fruit) values (2, 'orange');
    COMMIT;
*/

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT * FROM mytab');

// As definições DEVEM ser feitas antes da execução
oci_define_by_name($stid, 'ID', $id);

$fruit = oci_new_descriptor($conn, OCI_D_LOB);
oci_define_by_name($stid, 'FRUIT', $fruit, OCI_D_CLOB);

oci_execute($stid);

while (oci_fetch($stid)) {
    echo $id . " é " . $fruit->load(100) . "<br>\n";
}

// Resultado:
//   1 é apple
//   2 é orange

$fruit->free();
oci_free_statement($stid);
oci_close($conn);

?>
```

### Veja também

- [oci\_fetch()](function.oci-fetch.md) - Busca a próxima linha de uma consulta em buffers internos
- [oci\_new\_descriptor()](function.oci-new-descriptor.md) - Inicializa um novo descritor LOB ou FILE vazio

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
