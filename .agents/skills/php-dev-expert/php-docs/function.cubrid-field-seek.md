# Move o cursor do conjunto de resultados para a posição de campo especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-field-seek.php

---

# cubrid\_field\_seek

(PECL CUBRID >= 8.3.0)

cubrid\_field\_seek — Move o cursor do conjunto de resultados para a posição de campo especificada

### Descrição

function **cubrid\_field\_seek**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$field_offset` = 0): [bool](language.types.boolean.md)

Esta função move o cursor do conjunto de resultados para o campo na posição especificada.
Este deslocamento é usado pela função [cubrid\_fetch\_field()](function.cubrid-fetch-field.md) se ela
não incluir uma posição de campo. Retorna TRUE em caso de sucesso ou FALSE em
caso de falha.

### Parâmetros

`result`
:   `result` vem de uma chamada a [cubrid\_execute()](function.cubrid-execute.md)

`field_offset`
:   A posição numérica do campo. O `field_offset`
    começa em 0. Se `field_offset` não existir, um
    erro de nível **`E_WARNING`** será emitido.

### Valor Retornado

**`true`** em caso de sucesso.

**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_field\_seek()****

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
printf("%-30s %d\n", "chave exclusiva:", $field->unique_key);
printf("%-30s %d\n", "chave múltipla:", $field->multiple_key);
printf("%-30s %d\n", "numérico:", $field->numeric);
printf("%-30s %s\n", "tipo:", $field->type);

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
  string(5) "16132"
  [2]=>
  string(3) "KOR"
  [3]=>
  string(9) "1988-09-30"
}

--- Propriedades do Campo ---
nome:                          athlete_code
tabela:                        game
valor padrão:                  ""
comprimento máximo:            0
não nulo:                      1
chave exclusiva:               1
chave múltipla:                0
numérico:                      1
tipo:                          integer
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
