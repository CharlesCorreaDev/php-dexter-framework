# Prepara e executa uma instrução SQL sem marcadores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pdo.query.php

---

# PDO::query

(PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.2.0)

PDO::query — 
Prepara e executa uma instrução SQL sem marcadores

### Descrição

public function **PDO::query**([string](language.types.string.md) `$query`, [?](language.types.null.md)[int](language.types.integer.md) `$fetchMode` = **`null`**): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function **PDO::query**([string](language.types.string.md) `$query`, [?](language.types.null.md)[int](language.types.integer.md) `$fetchMode` = PDO::FETCH\_COLUMN, [int](language.types.integer.md) `$colno`): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function **PDO::query**(  
    [string](language.types.string.md) `$query`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$fetchMode` = PDO::FETCH\_CLASS,  
    [string](language.types.string.md) `$classname`,  
    [array](language.types.array.md) `$constructorArgs`  
): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function **PDO::query**([string](language.types.string.md) `$query`, [?](language.types.null.md)[int](language.types.integer.md) `$fetchMode` = PDO::FETCH\_INTO, [object](language.types.object.md) `$object`): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

**PDO::query()** prepara e executa uma instrução SQL em
uma única chamada de função, retornando a instrução como um objeto [PDOStatement](class.pdostatement.md).

Para uma consulta que precisa ser emitida diversas vezes, obtém-se melhor
desempenho se for preparado um objeto [PDOStatement](class.pdostatement.md) usando
[PDO::prepare()](pdo.prepare.md) e emitida a instrução com múltiplas
chamadas a [PDOStatement::execute()](pdostatement.execute.md).

Se não forem buscados todos os dados em um conjunto de resultados antes de emitir a
próxima chamada a **PDO::query()**, a chamada poderá falhar. Deve-se chamar
[PDOStatement::closeCursor()](pdostatement.closecursor.md) para liberar os recursos do banco
de dados associados ao objeto [PDOStatement](class.pdostatement.md) antes de se emitir a
próxima chamada a **PDO::query()**.

> **Nota**:
>
> Se a `query` contiver marcadores, a instrução
> deverá ser preparada e executada separadamente usando os métodos [PDO::prepare()](pdo.prepare.md) e
> [PDOStatement::execute()](pdostatement.execute.md).

### Parâmetros

`query`
:   A instrução SQL a ser preparada e executada.

    Se o SQL contiver marcadores, [PDO::prepare()](pdo.prepare.md) e
    [PDOStatement::execute()](pdostatement.execute.md) deverão ser usados.
    Alternativamente, o SQL pode ser preparado manualmente antes de chamar
    **PDO::query()**, com os dados formatados corretamente usando
    [PDO::quote()](pdo.quote.md) se o driver suportar.

`fetchMode`
:   O modo de busca padrão para o [PDOStatement](class.pdostatement.md) retornado.
    Deve ser uma das constantes [`PDO::FETCH_*`](pdo.constants.md).

    Se este argumento for passado para a função, os argumentos restantes
    serão tratados como se [PDOStatement::setFetchMode()](pdostatement.setfetchmode.md)
    tivesse sido chamado no objeto de instrução resultante.
    Os argumentos subsequentes variam dependendo do modo de busca selecionado.

### Valor Retornado

Retorna um objeto [PDOStatement](class.pdostatement.md) ou **`false`** em caso de falha.

### Erros/Exceções

Emite um erro de nível **`E_WARNING`** se o atributo **`PDO::ATTR_ERRMODE`** estiver definido
como **`PDO::ERRMODE_WARNING`**.

Lança uma exceção [PDOException](class.pdoexception.md) se o atributo **`PDO::ATTR_ERRMODE`**
estiver definido como **`PDO::ERRMODE_EXCEPTION`**.

### Examples

**Exemplo #1 SQL sem marcadores pode ser executado usando **PDO::query()****

```
<?php
$sql = 'SELECT name, color, calories FROM fruit ORDER BY name';
foreach ($conn->query($sql) as $row) {
    print $row['name'] . "\t";
    print $row['color'] . "\t";
    print $row['calories'] . "\n";
}
?>
```

O exemplo acima produzirá:

```
apple   red     150
banana  yellow  250
kiwi    brown   75
lemon   yellow  25
orange  orange  300
pear    green   150
watermelon      pink    90
```

### Veja também

- [PDO::exec()](pdo.exec.md) - Executa uma instrução SQL e retorna o número de linhas afetadas
- [PDO::prepare()](pdo.prepare.md) - Prepara uma instrução para execução e retorna um objeto de instrução
- [PDOStatement::execute()](pdostatement.execute.md) - Executa ums instrução preparada

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
