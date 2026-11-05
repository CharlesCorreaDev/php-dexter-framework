# Executa uma consulta preparada anteriormente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-execute.php

---

# ibase\_execute

(PHP 5, PHP 7 < 7.4.0)

ibase\_execute — Executa uma consulta preparada anteriormente

### Descrição

function **ibase\_execute**([resource](language.types.resource.md) `$query`, [mixed](language.types.mixed.md) `...$values`): [resource](language.types.resource.md)

Executa uma consulta preparada por [ibase\_prepare()](function.ibase-prepare.md).

Isto é muito mais efetivo do que usar [ibase\_query()](function.ibase-query.md)
se você estiver repetindo o mesmo tipo de consulta muitas vezes apenas
mudando alguns parâmetros.

### Parâmetros

`query`
:   Uma consulta do InterBase preparada por [ibase\_prepare()](function.ibase-prepare.md).

`values`

### Valor Retornado

Se houver um erro na consulta, retorna **`false`**. Se for bem sucedida e
tiver um conjunto de resultados (possivelmente vazio, como em uma consulta SELECT),
retorna um identificador de resultado. Se a consulta for bem sucedida e não houver
resultados, retorna **`true`**.

> **Nota**:
>
> Esta função retorna o número de linhas afetadas pela
> consulta (se > 0 e aplicável ao tipo de declaração). A consulta que tenha sido bem
> sucedida mas não afete nenhuma linha(ex.: um UPDATE de um registro que não
> exista) irá retornar **`true`**.

### Examples

**Exemplo #1 Exemplo de **ibase\_execute()****

```
<?php

$dbh = ibase_connect($host, $username, $password);

$updates = array(
    1 => 'Eric',
    5 => 'Filip',
    7 => 'Larry'
);

$query = ibase_prepare($dbh, "UPDATE FOO SET BAR = ? WHERE BAZ = ?");

foreach ($updates as $baz => $bar) {
    ibase_execute($query, $bar, $baz);
}

?>
```

### Veja também

- [ibase\_query()](function.ibase-query.md) - Executa uma consulta em um banco de dados InterBase

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
