# Vincula o valor de um parâmetro a uma variável de instrução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3stmt.bindvalue.php

---

# SQLite3Stmt::bindValue

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3Stmt::bindValue — Vincula o valor de um parâmetro a uma variável de instrução

### Descrição

public function **SQLite3Stmt::bindValue**([string](language.types.string.md)|[int](language.types.integer.md) `$param`, [mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$type` = **`SQLITE3_TEXT`**): [bool](language.types.boolean.md)

Vincula o valor de um parâmetro a uma variável de instrução.

**Cuidado**

Antes do PHP 7.2.14 e 7.3.0, respectivamente, uma vez que a instrução foi
executada, [SQLite3Stmt::reset()](sqlite3stmt.reset.md) precisa ser chamado para
poder alterar o valor dos parâmetros vinculados.

### Parâmetros

`param`
:   Uma [string](language.types.string.md) (para parâmetros nomeados) ou um [int](language.types.integer.md)
    (para parâmetros posicionais) identificando a variável de instrução à qual o
    valor deve ser vinculado.
    Se um parâmetro nomeado não começar com dois pontos (`:`) ou
    um sinal de arroba (`@`), dois pontos (`:`) são automaticamente adicionados.
    Parâmetros posicionais começam com `1`.

`value`
:   O valor a ser vinculado a uma variável de instrução.

`type`
:   O tipo de dados do valor a ser vinculado.

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
    automaticamente detectado a partir do tipo do `value`: [bool](language.types.boolean.md)
    e [int](language.types.integer.md) são tratados como **`SQLITE3_INTEGER`**,
    [float](language.types.float.md) como **`SQLITE3_FLOAT`**, [null](language.types.null.md)
    como **`SQLITE3_NULL`** e todos os outros como **`SQLITE3_TEXT`**.
    Anteriormente, se `type` fosse omitido, ele era predefinido
    como **`SQLITE3_TEXT`**.

    > **Nota**:
    >
    > Se `value` for **`null`**, ele é sempre tratado como
    > **`SQLITE3_NULL`**, independentemente do `type`
    > fornecido.

### Valor Retornado

Retorna **`true`** se o valor for vinculado à variável de instrução, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | `param` agora também suporta a notação `@param`. |

### Examples

**Exemplo #1 Exemplo de **SQLite3Stmt::bindValue()****

```
<?php
$db = new SQLite3(':memory:');

$db->exec('CREATE TABLE foo (id INTEGER, bar STRING)');
$db->exec("INSERT INTO foo (id, bar) VALUES (1, 'Isto é um teste')");

$stmt = $db->prepare('SELECT bar FROM foo WHERE id=:id');
$stmt->bindValue(':id', 1, SQLITE3_INTEGER);

$result = $stmt->execute();
var_dump($result->fetchArray(SQLITE3_ASSOC));
?>
```

O exemplo acima produzirá:

```
array(1) {
  ["bar"]=>
  string(14) "Isto é um teste"
}
```

### Veja também

- [SQLite3Stmt::bindParam()](sqlite3stmt.bindparam.md) - Vincula um parâmetro a uma variável de instrução
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
