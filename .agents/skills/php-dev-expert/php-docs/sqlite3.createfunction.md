# Registra uma função PHP para uso como uma função escalar SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.createfunction.php

---

# SQLite3::createFunction

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::createFunction — Registra uma função PHP para uso como uma função escalar SQL

### Descrição

public function **SQLite3::createFunction**(  
    [string](language.types.string.md) `$name`,  
    [callable](language.types.callable.md) `$callback`,  
    [int](language.types.integer.md) `$argCount` = -1,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

Registra uma função PHP ou função definida pelo usuário para uso como uma função escalar SQL
dentro de instruções SQL.

### Parâmetros

`name`
:   Nome da função SQL a ser criada ou redefinida.

`callback`
:   O nome de uma função PHP ou função definida pelo usuário para aplicar como um
    callback, definindo o comportamento da função SQL.

    Esta função precisa ser definida como:

    function callback([mixed](language.types.mixed.md) `$value`, [mixed](language.types.mixed.md) `...$values`): [mixed](language.types.mixed.md)

    `value`
    :   O primeiro argumento passado para a função SQL.

    `values`
    :   Mais argumentos passados para a função SQL.

`argCount`
:   O número de argumentos que a função SQL recebe. Se
    este parâmetro for `-1`, então a função SQL pode receber
    qualquer número de argumentos.

`flags`
:   Uma conjunção bitwise de opções. Atualmente, apenas
    **`SQLITE3_DETERMINISTIC`** é suportado, o que especifica
    que a função sempre retorna o mesmo resultado dado os mesmos argumentos
    dentro de uma única instrução SQL.

### Valor Retornado

Retorna **`true`** após a criação bem-sucedida da função, **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.4 | O parâmetro `flags` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **SQLite3::createFunction()****

```
<?php
function my_udf_md5($string) {
    return hash('md5', $string);
}

$db = new SQLite3('mysqlitedb.db');
$db->createFunction('my_udf_md5', 'my_udf_md5');

var_dump($db->querySingle('SELECT my_udf_md5("test")'));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(32) "098f6bcd4621d373cade4e832627b4f6"
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
