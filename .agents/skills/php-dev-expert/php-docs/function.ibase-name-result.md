# Define um nome para um conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-name-result.php

---

# ibase\_name\_result

(PHP 5, PHP 7 < 7.4.0)

ibase\_name\_result — Define um nome para um conjunto de resultados

### Descrição

function **ibase\_name\_result**([resource](language.types.resource.md) `$result`, [string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Esta função define um nome para um conjunto de resultados. Este nome pode ser usado posteriormente em
comandos UPDATE|DELETE ... WHERE CURRENT OF `name`.

### Parâmetros

`result`
:   Um conjunto de resultado do InterBase.

`name`
:   O nome a ser atribuído.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo da **ibase\_name\_result()****

```
<?php
$result = ibase_query("SELECT field1,field2 FROM table FOR UPDATE");
ibase_name_result($result, "my_cursor");

$updateqry = ibase_prepare("UPDATE table SET field2 = ? WHERE CURRENT OF my_cursor");

for ($i = 0; ibase_fetch_row($result); ++$i) {
    ibase_execute($updateqry, $i);
}
?>
```

### Veja também

- [ibase\_prepare()](function.ibase-prepare.md) - Prepara uma consulta para ligação de parâmetros e execução posteriores
- [ibase\_execute()](function.ibase-execute.md) - Executa uma consulta preparada anteriormente

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
