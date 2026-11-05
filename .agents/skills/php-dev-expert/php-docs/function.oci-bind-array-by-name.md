# Vincula um array PHP a um parâmetro de array Oracle PL/SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-bind-array-by-name.php

---

# oci\_bind\_array\_by\_name

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL OCI8 >= 1.2.0)

oci\_bind\_array\_by\_name — Vincula um array PHP a um parâmetro de array Oracle PL/SQL

### Descrição

function **oci\_bind\_array\_by\_name**(  
    [resource](language.types.resource.md) `$statement`,  
    [string](language.types.string.md) `$param`,  
    [array](language.types.array.md) `&$var`,  
    [int](language.types.integer.md) `$max_array_length`,  
    [int](language.types.integer.md) `$max_item_length` = -1,  
    [int](language.types.integer.md) `$type` = **`SQLT_AFC`**  
): [bool](language.types.boolean.md)

Vincula o array PHP `var` ao marcador Oracle
`param`, que aponta para um array Oracle PL/SQL.
Se ele será usado para entrada ou saída será determinado no
momento da execução.

### Parâmetros

`statement`
:   Um identificador de instrução OCI válido.

`param`
:   O marcador Oracle.

`var`
:   Um array.

`max_array_length`
:   Define o comprimento máximo para arrays de entrada e de resultados.

`max_item_length`
:   Define o comprimento máximo para itens de array. Se não for especificado ou for igual a -1,
    **oci\_bind\_array\_by\_name()** encontrará o elemento
    mais longo no array de entrada e o usará como o comprimento máximo.

`type`
:   Deve ser usado para definir o tipo de itens de array PL/SQL. Veja a lista de
    tipos disponíveis abaixo:

    - **`SQLT_NUM`** - para arrays de NUMBER.
    - **`SQLT_INT`** - para arrays de INTEGER (Nota: INTEGER
      na verdade é um sinônimo de NUMBER(38) mas o tipo
      **`SQLT_NUM`** não funcionará neste caso embora
      sejam sinônimos).
    - **`SQLT_FLT`** - para arrays de FLOAT.
    - **`SQLT_AFC`** - para arrays de CHAR.
    - **`SQLT_CHR`** - para arrays de VARCHAR2.
    - **`SQLT_VCS`** - para arrays de VARCHAR.
    - **`SQLT_AVC`** - para arrays de CHARZ.
    - **`SQLT_STR`** - para arrays de STRING.
    - **`SQLT_LVC`** - para arrays de LONG VARCHAR.
    - **`SQLT_ODT`** - para arrays de DATE.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **oci\_bind\_array\_by\_name()****

```
<?php

$conn = oci_connect("hr", "hrpwd", "localhost/XE");
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$create = "CREATE TABLE bind_example(name VARCHAR(20))";
$stid = oci_parse($conn, $create);
oci_execute($stid);

$create_pkg = "
CREATE OR REPLACE PACKAGE ARRAYBINDPKG1 AS
  TYPE ARRTYPE IS TABLE OF VARCHAR(20) INDEX BY BINARY_INTEGER;
  PROCEDURE iobind(c1 IN OUT ARRTYPE);
END ARRAYBINDPKG1;";
$stid = oci_parse($conn, $create_pkg);
oci_execute($stid);

$create_pkg_body = "
CREATE OR REPLACE PACKAGE BODY ARRAYBINDPKG1 AS
  CURSOR CUR IS SELECT name FROM bind_example;
  PROCEDURE iobind(c1 IN OUT ARRTYPE) IS
    BEGIN
    -- Inserção em massa
    FORALL i IN INDICES OF c1
      INSERT INTO bind_example VALUES (c1(i));

    -- Busca e reverte
    IF NOT CUR%ISOPEN THEN
      OPEN CUR;
    END IF;
    FOR i IN REVERSE 1..5 LOOP
      FETCH CUR INTO c1(i);
      IF CUR%NOTFOUND THEN
        CLOSE CUR;
        EXIT;
      END IF;
    END LOOP;
  END iobind;
END ARRAYBINDPKG1;";
$stid = oci_parse($conn, $create_pkg_body);
oci_execute($stid);

$stid = oci_parse($conn, "BEGIN arraybindpkg1.iobind(:c1); END;");
$array = array("one", "two", "three", "four", "five");
oci_bind_array_by_name($stid, ":c1", $array, 5, -1, SQLT_CHR);
oci_execute($stid);

var_dump($array);

?>
```

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
