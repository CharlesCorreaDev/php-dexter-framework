# Vincula um parâmetro a uma variável de instrução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3stmt.bindparam.php

---

# SQLite3Stmt::bindParam

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3Stmt::bindParam — Vincula um parâmetro a uma variável de instrução

### Descrição

public function **SQLite3Stmt::bindParam**([string](language.types.string.md)|[int](language.types.integer.md) `$param`, [mixed](language.types.mixed.md) `&$var`, [int](language.types.integer.md) `$type` = **`SQLITE3_TEXT`**): [bool](language.types.boolean.md)

Vincula um parâmetro a uma variável de instrução.

**Cuidado**

Antes do PHP 7.2.14 e 7.3.0, respectivamente,
[SQLite3Stmt::reset()](sqlite3stmt.reset.md) deve ser chamado após a primeira chamada para
[SQLite3Stmt::execute()](sqlite3stmt.execute.md) se o valor vinculado deve ser corretamente
atualizado nas chamadas seguintes para [SQLite3Stmt::execute()](sqlite3stmt.execute.md).
Se [SQLite3Stmt::reset()](sqlite3stmt.reset.md) não for chamado, o valor vinculado não
será alterado, mesmo que o valor atribuído à variável passada para
**SQLite3Stmt::bindParam()** tenha mudado, ou
**SQLite3Stmt::bindParam()** tenha sido chamado novamente.

### Parâmetros

`param`
:   Uma [string](language.types.string.md) (para parâmetros nomeados) ou um [int](language.types.integer.md)
    (para parâmetros posicionais) identificando a variável de instrução à qual o
    valor deve ser vinculado.
    Se um parâmetro nomeado não começar com dois pontos (`:`) ou um
    sinal de arroba (`@`), dois pontos (`:`) são automaticamente adicionados.
    Parâmetros posicionais começam com `1`.

`var`
:   O parâmetro a ser vinculado a uma variável de instrução.

`type`
:   O tipo de dados do parâmetro a ser vinculado.

    - **`SQLITE3_INTEGER`**: O valor é um inteiro assinado,
      armazenado em 1, 2, 3, 4, 6 ou 8 bytes, dependendo da magnitude
      do valor.
    - **`SQLITE3_FLOAT`**: O valor é um valor de ponto flutuante,
      armazenado como um número de ponto flutuante IEEE de 8 bytes.
    - **`SQLITE3_TEXT`**: O valor é uma string de texto, armazenada
      usando a codificação do banco de dados (UTF-8, UTF-16BE ou UTF-16-LE).
    - **`SQLITE3_BLOB`**: O valor é um blob de dados, armazenado
      exatamente como foi inserido.
    - **`SQLITE3_NULL`**: O valor é um valor NULL.

    A partir do PHP 7.0.7, se `type` for omitido, ele é
    automaticamente detectado a partir do tipo do `var`: [bool](language.types.boolean.md)
    e [int](language.types.integer.md) são tratados como **`SQLITE3_INTEGER`**,
    [float](language.types.float.md) como **`SQLITE3_FLOAT`**, [null](language.types.null.md)
    como **`SQLITE3_NULL`** e todos os outros como **`SQLITE3_TEXT`**.
    Anteriormente, se `type` fosse omitido, ele era predefinido
    como **`SQLITE3_TEXT`**.

    > **Nota**:
    >
    > Se `var` for **`null`**, ele é sempre tratado como
    > **`SQLITE3_NULL`**, independentemente do `type`
    > fornecido.

### Valor Retornado

Retorna **`true`** se o parâmetro for vinculado à variável de instrução, **`false`**
em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | `param` agora também suporta a notação `@param`. |

### Examples

**Exemplo #1 Uso de **SQLite3Stmt::bindParam()****

Este exemplo mostra como uma única instrução preparada com uma única vinculação de parâmetro
pode ser usada para inserir várias linhas com valores diferentes.

```
<?php
$db = new SQLite3(':memory:');
$db->exec("CREATE TABLE foo (bar TEXT)");

$stmt = $db->prepare("INSERT INTO foo VALUES (:bar)");
$stmt->bindParam(':bar', $bar, SQLITE3_TEXT);

$bar = 'baz';
$stmt->execute();

$bar = 42;
$stmt->execute();

$res = $db->query("SELECT * FROM foo");
while (($row = $res->fetchArray(SQLITE3_ASSOC))) {
    var_dump($row);
}
?>
```

O exemplo acima produzirá:

```
array(1) {
  ["bar"]=>
  string(3) "baz"
}
array(1) {
  ["bar"]=>
  string(2) "42"
}
```

### Veja também

- [SQLite3Stmt::bindValue()](sqlite3stmt.bindvalue.md) - Vincula o valor de um parâmetro a uma variável de instrução
- [SQLite3::prepare()](sqlite3.prepare.md) - Prepara uma declaração SQL para execução

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
