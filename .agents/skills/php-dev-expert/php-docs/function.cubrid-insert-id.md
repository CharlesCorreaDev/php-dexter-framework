# Retorna o ID gerado pela última coluna AUTO_INCREMENT atualizada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-insert-id.php

---

# cubrid\_insert\_id

(PECL CUBRID >= 8.3.0)

cubrid\_insert\_id — Retorna o ID gerado pela última coluna **`AUTO_INCREMENT`** atualizada

### Descrição

function **cubrid\_insert\_id**([resource](language.types.resource.md) `$conn_identifier` = ?): [string](language.types.string.md)

A função **cubrid\_insert\_id()** recupera o ID
gerado para a coluna AUTO\_INCREMENT atualizada pela consulta
INSERT anterior. Retorna 0 se a consulta anterior não gerou novas
linhas ou FALSE em caso de falha.

> **Nota**:
>
> O CUBRID suporta AUTO\_INCREMENT para mais de uma coluna na tabela. Na
> maioria dos casos, haverá uma única coluna AUTO\_INCREMENT em uma tabela. Se
> houver múltiplas colunas AUTO\_INCREMENT, esta função não deve ser
> usada mesmo se ela retornar um valor.

### Parâmetros

`conn_identifier`
:   O identificador de conexão previamente obtido através de uma chamada a
    [cubrid\_connect()](function.cubrid-connect.md).

### Valor Retornado

Uma string representando o ID gerado para uma coluna AUTO\_INCREMENT pela consulta
anterior, em caso de sucesso.

0, se a consulta anterior não gerou novas linhas.

**`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Alterado o valor de retorno, de array para string; Removido o primeiro parâmetro class\_name. |

### Examples

**Exemplo #1 Exemplo de **cubrid\_insert\_id()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");

@cubrid_execute($conn, "DROP TABLE cubrid_test");
cubrid_execute($conn, "CREATE TABLE cubrid_test (d int AUTO_INCREMENT(1, 2), t varchar)");

for ($i = 0; $i < 10; $i++) {
    cubrid_execute($conn, "INSERT INTO cubrid_test(t) VALUES('cubrid_test')");
}

$id = cubrid_insert_id();
var_dump($id);

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
string(2) "19"
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
