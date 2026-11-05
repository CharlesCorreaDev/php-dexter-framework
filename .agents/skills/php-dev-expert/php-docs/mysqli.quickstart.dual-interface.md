# Interface dupla, procedural e orientada a objetos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.quickstart.dual-interface.php

---

## Interface dupla, procedural e orientada a objetos

A extensão mysqli possibilita uma dupla interface. Ela suporta o paradigma de programação
procedural e orientada a objetos.

Usuários que estão migrando da extensão antiga mysql podem preferir a interface
procedural. Esta interface é similar àquela da extensão antiga
mysql. Em muitos casos, os nomes das funções diferem apenas pelo prefixo.
Algumas funções mysqli levam um manipulador de conexão como seu primeiro argumento,
enquanto as funções análogas na antiga interface mysql levam este manipulador
como o último argumento, opcional.

**Exemplo #1 Migração fácil da antiga extensão mysql**

```
<?php
$mysqli = mysqli_connect("example.com", "user", "password", "database");
$result = mysqli_query($mysqli, "SELECT 'Por favor não use a extensão mysql descontinuada para novos desenvolvimentos. ' AS _msg FROM DUAL");
$row = mysqli_fetch_assoc($result);
echo $row['_msg'];

$mysql = mysql_connect("example.com", "user", "password");
mysql_select_db("test");
$result = mysql_query("SELECT 'Use a extensão mysqli em seu lugar.' AS _msg FROM DUAL", $mysql);
$row = mysql_fetch_assoc($result);
echo $row['_msg'];
```

O exemplo acima produzirá:

```
Por favor não use a extensão mysql descontinuada para novos desenvolvimentos. Use a extensão mysqli em seu lugar.
```

**A interface orientada a objetos**

Em adição à clássica interface procedural, usuários podem escolher usar
a interface orientada a objetos. A documentação está organizada utilizando
a interface orientada a objetos. Ela mostra funções
agrupadas por propósito, tornando a iniciação mais fácil. A seção de referência
dá exemplos para ambas as variantes de sintaxe.

Não há diferenças significativas de desempenho entre as duas interfaces.
Usuários podem basear suas escolhas em preferências pessoais.

**Exemplo #2 Interface orientada a objeto e procedural**

```
<?php

$mysqli = mysqli_connect("example.com", "user", "password", "database");

$result = mysqli_query($mysqli, "SELECT 'Um mundo cheio de ' AS _msg FROM DUAL");
$row = mysqli_fetch_assoc($result);
echo $row['_msg'];

$mysqli = new mysqli("example.com", "user", "password", "database");

$result = $mysqli->query("SELECT 'escolhas para agradar a todos.' AS _msg FROM DUAL");
$row = $result->fetch_assoc();
echo $row['_msg'];
```

O exemplo acima produzirá:

```
Um mundo cheio de escolhas para agradar a todos.
```

A interface orientada a objetos é usada neste guia porque a
seção de referência está organizada dessa forma.

**Misturando estilos**

É possível trocar de estilos a qualquer momento. Misturar ambos os estilos
não é recomendado por questões de clareza e estilo de código.

**Exemplo #3 Estilo de código ruim**

```
<?php

$mysqli = new mysqli("example.com", "user", "password", "database");

$result = mysqli_query($mysqli, "SELECT 'Estilo possível, porém, ruim.' AS _msg FROM DUAL");

if ($row = $result->fetch_assoc()) {
    echo $row['_msg'];
}
```

O exemplo acima produzirá:

```
Estilo possível, porém, ruim.
```

**Veja também**

- [mysqli::\_\_construct()](mysqli.construct.md)
- [mysqli::query()](mysqli.query.md)
- [mysqli\_result::fetch\_assoc()](mysqli-result.fetch-assoc.md)
- [$mysqli::connect\_errno](mysqli.connect-errno.md)
- [$mysqli::connect\_error](mysqli.connect-error.md)
- [$mysqli::errno](mysqli.errno.md)
- [$mysqli::error](mysqli.error.md)
- [Resumo das Funções da Extensão MySQLi](mysqli.summary.md)

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
