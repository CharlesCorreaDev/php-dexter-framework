# Habilita o lançamento de exceções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.enableexceptions.php

---

# SQLite3::enableExceptions

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::enableExceptions — 
Habilita o lançamento de exceções

### Descrição

public function **SQLite3::enableExceptions**([bool](language.types.boolean.md) `$enable` = **`false`**): [bool](language.types.boolean.md)

Controla se a instância [SQLite3](class.sqlite3.md) lançará
exceções ou avisos em caso de erro.

### Parâmetros

`enable`
:   Quando **`true`**, a instância [SQLite3](class.sqlite3.md), e as instâncias
    [SQLite3Stmt](class.sqlite3stmt.md) e [SQLite3Result](class.sqlite3result.md)
    derivadas dela, lançarão exceções em caso de erro.

    Quando **`false`**, a instância [SQLite3](class.sqlite3.md), e as instâncias
    [SQLite3Stmt](class.sqlite3stmt.md) e [SQLite3Result](class.sqlite3result.md)
    derivadas dela, emitirão avisos em caso de erro.

    Em qualquer modo, o código de erro e a mensagem, se houver, estarão disponíveis através de
    [SQLite3::lastErrorCode()](sqlite3.lasterrorcode.md) e
    [SQLite3::lastErrorMsg()](sqlite3.lasterrormsg.md), respectivamente.

### Valor Retornado

Retorna o valor antigo; **`true`** se as exceções estavam habilitadas, **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Chamar **SQLite3::enableExceptions()** com `enable` como **`false`** irá disparar um aviso **`E_DEPRECATED`**. |

### Examples

**Exemplo #1 Exemplo de **SQLite3::enableExceptions()****

```
<?php
$sqlite = new SQLite3(':memory:');
try {
    $sqlite->exec('create table foo');
    $sqlite->enableExceptions(true);
    $sqlite->exec('create table bar');
} catch (Exception $e) {
    echo 'Caught exception: ' . $e->getMessage();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Warning: SQLite3::exec(): near "foo": syntax error in example.php on line 4
Caught exception: near "bar": syntax error
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
