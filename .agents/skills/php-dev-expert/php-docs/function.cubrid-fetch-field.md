# Obtém informações da coluna de um resultado e retorna como um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-fetch-field.php

---

# cubrid\_fetch\_field

(PECL CUBRID >= 8.3.1)

cubrid\_fetch\_field — Obtém informações da coluna de um resultado e retorna como um objeto

### Descrição

function **cubrid\_fetch\_field**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$field_offset` = 0): [object](language.types.object.md)

Esta função retorna um objeto com certas propriedades da coluna
específica. As propriedades do objeto são:

`name`
:   nome da coluna

`table`
:   nome da tabela à qual a coluna pertence

`def`
:   valor padrão da coluna

`max_length`
:   comprimento máximo da coluna

`not_null`
:   1 se a coluna não puder ser NULL

`primary_key`
:   1 se a coluna for uma chave primária

`unique_key`
:   1 se a coluna for uma chave exclusiva

`multiple_key`
:   1 se a coluna for uma chave não exclusiva

`numeric`
:   1 se a coluna for numérica

`blob`
:   1 se a coluna for um BLOB

`type`
:   o tipo da coluna

`unsigned`
:   1 se a coluna for sem sinal

`zerofill`
:   1 se a coluna for preenchida com zeros

### Parâmetros

`result`
:   `result` vem de uma chamada a [cubrid\_execute()](function.cubrid-execute.md)

`field_offset`
:   O deslocamento numérico do campo. Se não especificado, o
    próximo campo (que ainda não tiver sido obtido por esta função) será recuperado.
    O `field_offset` inicia em 0.

### Valor Retornado

Objeto com certas propriedades da coluna específica em caso de sucesso.

**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_fetch\_field()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");
$req = cubrid_execute($conn, "SELECT event_code,athlete_code,nation_code,game_date FROM game WHERE host_year=1988 and event_code=20001;");

var_dump(cubrid_fetch_row($req));

cubrid_field_seek($req, 1);
$field = cubrid_fetch_field($req);

printf("\n--- Propriedades do Campo ---\n");
printf("%-30s %s\n", "nome:", $field->name);
printf("%-30s %s\n", "tabela:", $field->table);
printf("%-30s \"%s\"\n", "valor padrão:", $field->def);
printf("%-30s %d\n", "comprimento máximo:", $field->max_length);
printf("%-30s %d\n", "não nulo:", $field->not_null);
printf("%-30s %d\n", "chave primária:", $field->primary_key);
printf("%-30s %d\n", "chave exclusiva:", $field->unique_key);
printf("%-30s %d\n", "chave múltipla:", $field->multiple_key);
printf("%-30s %d\n", "numérico:", $field->numeric);
printf("%-30s %d\n", "blob:", $field->blob);
printf("%-30s %s\n", "tipo:", $field->type);
printf("%-30s %d\n", "sem sinal:", $field->unsigned);
printf("%-30s %d\n", "preenchido com zero:", $field->zerofill);

cubrid_close_request($req);

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
array(4) {
  [0]=>
  string(5) "20001"
  [1]=>
  string(5) "16681"
  [2]=>
  string(3) "KOR"
  [3]=>
  string(9) "1988-9-30"
}

--- Propriedades do Campo ---
nome:                          athlete_code
tabela:                        game
valor padrão:                  ""
comprimento máximo:            0
não nulo:                      1
chave primária:                1
chave exclusiva:               1
chave múltipla:                0
numérico:                      1
blob:                          0
tipo:                          integer
sem sinal:                     0
preenchido com zero:           0
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
