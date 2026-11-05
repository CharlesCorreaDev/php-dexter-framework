# Obtém informação do esquema solicitado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-schema.php

---

# cubrid\_schema

(PECL CUBRID >= 8.3.0)

cubrid\_schema — Obtém informação do esquema solicitado

### Descrição

function **cubrid\_schema**(  
    [resource](language.types.resource.md) `$conn_identifier`,  
    [int](language.types.integer.md) `$schema_type`,  
    [string](language.types.string.md) `$class_name` = ?,  
    [string](language.types.string.md) `$attr_name` = ?  
): [array](language.types.array.md)

A função **cubrid\_schema()** é usada para obter as
informações do esquema solicitadas do banco de dados. Para obter informações sobre uma classe específica,
`class_name` deve ser definido, para obter informações sobre um atributo específico
(pode ser usada apenas com **`CUBRID_SCH_ATTR_PRIVILEGE`**),
`attr_name` deve ser definido.

O resultado da função **cubrid\_schema()** é retornado como um array bidimensional
(coluna (array associativo) \* linha (array numérico)). As tabelas
a seguir mostram os tipos de esquema e a estrutura da coluna do array de resultados a
ser retornada com base no tipo de esquema.

**Composição do resultado de cada tipo**

| Esquema | Número da Coluna | Nome da Coluna | Valor |
| --- | --- | --- | --- |
| CUBRID\_SCH\_CLASS | 1 | NAME |  |
|  | 2 | TYPE | 0:classe de sistema 1:classe virtual 2:classe |
| CUBRID\_SCH\_VCLASS | 1 | NAME |  |
|  | 2 | TYPE | 1:classe virtual |
| CUBRID\_SCH\_QUERY\_SPEC | 1 | QUERY\_SPEC |  |
| CUBRID\_SCH\_ATTRIBUTE / CUBRID\_SCH\_CLASS\_ATTRIBUTE | 1 | ATTR\_NAME |  |
|  | 2 | DOMAIN |  |
|  | 3 | SCALE |  |
|  | 4 | PRECISION |  |
|  | 5 | INDEXED | 1:indexado |
|  | 6 | NOT NULL | 1:não nulo |
|  | 7 | SHARED | 1:compartilhado |
|  | 8 | UNIQUE | 1:exclusivo |
|  | 9 | DEFAULT |  |
|  | 10 | ATTR\_ORDER | base:1 |
|  | 11 | CLASS\_NAME |  |
|  | 12 | SOURCE\_CLASS |  |
|  | 13 | IS\_KEY | 1:chave |
| CUBRID\_SCH\_METHOD / CUBRID\_SCH\_CLASS\_METHOD | 1 | NAME |  |
|  | 2 | RET\_DOMAIN |  |
|  | 3 | ARG\_DOMAIN |  |
| CUBRID\_SCH\_METHOD\_FILE | 1 | METHOD\_FILE |  |
| CUBRID\_SCH\_SUPERCLASS / CUBRID\_SCH\_DIRECT\_SUPER\_CLASS / CUBRID\_SCH\_SUBCLASS | 1 | CLASS\_NAME |  |
|  | 2 | TYPE | 0:classe de sistema 1:classe virtual 2:classe |
| CUBRID\_SCH\_CONSTRAINT | 1 | TYPE | 0:exclusivo 1:índice 2:exclusivo reverso 3:índice reverso |
|  | 2 | NAME |  |
|  | 3 | ATTR\_NAME |  |
|  | 4 | NUM\_PAGES |  |
|  | 5 | NUM\_KEYS |  |
|  | 6 | PRIMARY\_KEY | 1:chave primária |
|  | 7 | KEY\_ORDER | base:1 |
| CUBRID\_SCH\_TRIGGER | 1 | NAME |  |
|  | 2 | STATUS |  |
|  | 3 | EVENT |  |
|  | 4 | TARGET\_CLASS |  |
|  | 5 | TARGET\_ATTR |  |
|  | 6 | ACTION\_TIME |  |
|  | 7 | ACTION |  |
|  | 8 | PRIORITY |  |
|  | 9 | CONDITION\_TIME |  |
|  | 10 | CONDITION |  |
| CUBRID\_SCH\_CLASS\_PRIVILEGE / CUBRID\_SCH\_ATTR\_PRIVILEGE | 1 | CLASS\_NAME / ATTR\_NAME |  |
|  | 2 | PRIVILEGE |  |
|  | 3 | GRANTABLE |  |
| CUBRID\_SCH\_PRIMARY\_KEY | 1 | CLASS\_NAME |  |
|  | 2 | ATTR\_NAME |  |
|  | 3 | KEY\_SEQ | base:1 |
|  | 4 | KEY\_NAME |  |
| CUBRID\_SCH\_IMPORTED\_KEYS / CUBRID\_SCH\_EXPORTED\_KEYS / CUBRID\_SCH\_CROSS\_REFERENCE | 1 | PKTABLE\_NAME |  |
|  | 2 | PKCOLUMN\_NAME |  |
|  | 3 | FKTABLE\_NAME | base:1 |
|  | 4 | FKCOLUMN\_NAME |  |
|  | 5 | KEY\_SEQ | base:1 |
|  | 6 | UPDATE\_ACTION | 0:cascata 1:restrição 2:sem ação 3:definir como nulo |
|  | 7 | DELETE\_ACTION | 0:cascata 1:restrição 2:sem ação 3:definir como nulo |
|  | 8 | FK\_NAME |  |
|  | 9 | PK\_NAME |  |

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`schema_type`
:   Dados do esquema que precisam ser conhecidos.

`class_name`
:   Classe da qual deseja-se conhecer o esquema.

`attr_name`
:   Atributo do qual deseja-se conhecer o esquema.

### Valor Retornado

Array contendo a informação do esquema em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.1 | Alterado valor de retorno: quando houver falha, retorna false e não -1. |

### Examples

**Exemplo #1 Exemplo de **cubrid\_schema()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb", "dba");

printf("\n--- Chave Primária ---\n");
$pk = cubrid_schema($conn, CUBRID_SCH_PRIMARY_KEY, "game");
var_dump($pk);

printf("\n--- Chaves Estrangeiras ---\n");
$fk = cubrid_schema($conn, CUBRID_SCH_IMPORTED_KEYS, "game");
var_dump($fk);

printf("\n--- Atributo da Coluna ---\n");
$attr = cubrid_schema($conn, CUBRID_SCH_ATTRIBUTE, "stadium", "area");
var_dump($attr);

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
--- Chave Primária ---
array(3) {
  [0]=>
  array(4) {
    ["CLASS_NAME"]=>
    string(4) "game"
    ["ATTR_NAME"]=>
    string(12) "athlete_code"
    ["KEY_SEQ"]=>
    string(1) "3"
    ["KEY_NAME"]=>
    string(41) "pk_game_host_year_event_code_athlete_code"
  }
  [1]=>
  array(4) {
    ["CLASS_NAME"]=>
    string(4) "game"
    ["ATTR_NAME"]=>
    string(10) "event_code"
    ["KEY_SEQ"]=>
    string(1) "2"
    ["KEY_NAME"]=>
    string(41) "pk_game_host_year_event_code_athlete_code"
  }
  [2]=>
  array(4) {
    ["CLASS_NAME"]=>
    string(4) "game"
    ["ATTR_NAME"]=>
    string(9) "host_year"
    ["KEY_SEQ"]=>
    string(1) "1"
    ["KEY_NAME"]=>
    string(41) "pk_game_host_year_event_code_athlete_code"
  }
}

--- Chaves Estrangeiras ---
array(2) {
  [0]=>
  array(9) {
    ["PKTABLE_NAME"]=>
    string(7) "athlete"
    ["PKCOLUMN_NAME"]=>
    string(4) "code"
    ["FKTABLE_NAME"]=>
    string(4) "game"
    ["FKCOLUMN_NAME"]=>
    string(12) "athlete_code"
    ["KEY_SEQ"]=>
    string(1) "1"
    ["UPDATE_RULE"]=>
    string(1) "1"
    ["DELETE_RULE"]=>
    string(1) "1"
    ["FK_NAME"]=>
    string(20) "fk_game_athlete_code"
    ["PK_NAME"]=>
    string(15) "pk_athlete_code"
  }
  [1]=>
  array(9) {
    ["PKTABLE_NAME"]=>
    string(5) "event"
    ["PKCOLUMN_NAME"]=>
    string(4) "code"
    ["FKTABLE_NAME"]=>
    string(4) "game"
    ["FKCOLUMN_NAME"]=>
    string(10) "event_code"
    ["KEY_SEQ"]=>
    string(1) "1"
    ["UPDATE_RULE"]=>
    string(1) "1"
    ["DELETE_RULE"]=>
    string(1) "1"
    ["FK_NAME"]=>
    string(18) "fk_game_event_code"
    ["PK_NAME"]=>
    string(13) "pk_event_code"
  }
}

--- Atributo da Coluna ---
array(1) {
  [0]=>
  array(13) {
    ["ATTR_NAME"]=>
    string(4) "area"
    ["DOMAIN"]=>
    string(1) "7"
    ["SCALE"]=>
    string(1) "2"
    ["PRECISION"]=>
    string(2) "10"
    ["INDEXED"]=>
    string(1) "0"
    ["NON_NULL"]=>
    string(1) "0"
    ["SHARED"]=>
    string(1) "0"
    ["UNIQUE"]=>
    string(1) "0"
    ["DEFAULT"]=>
    NULL
    ["ATTR_ORDER"]=>
    string(1) "4"
    ["CLASS_NAME"]=>
    string(7) "stadium"
    ["SOURCE_CLASS"]=>
    string(7) "stadium"
    ["IS_KEY"]=>
    string(1) "0"
  }
}
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
