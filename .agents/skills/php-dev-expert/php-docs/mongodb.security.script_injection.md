# Ataques de injeção de script

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb.security.script_injection.php

---

## Ataques de injeção de script

Se você estiver usando JavaScript, certifique-se de que quaisquer variáveis que cruzem o limite
PHP para JavaScript sejam passadas no campo `scope` do
[MongoDB\BSON\Javascript](class.mongodb-bson-javascript.md), e não interpoladas em
string JavaScript. Isso pode surgir ao usar cláusulas `$where`
em consultas, mapReduce e comandos de grupo, e em qualquer outro momento em que você
passar JavaScript para o banco de dados.

Por exemplo, suponha que temos algum JavaScript para cumprimentar um usuário nos logs do banco
de dados. Nós poderíamos fazer:

```
<?php
$m = new MongoDB\Driver\Manager;

// Não faça isso!!!
$username = $_GET['field'];

$cmd = new \MongoDB\Driver\Command( [
    'eval' => "print('Olá, $username!');"
] );

$r = $m->executeCommand( 'dramio', $cmd );
?>
```

No entanto, e se um usuário mal intencionado passar algum JavaScript?

```
<?php
$m = new MongoDB\Driver\Manager;

// Não faça isso!!!
$username = $_GET['field'];
// $username é definido como "'); db.users.drop(); print('"

$cmd = new \MongoDB\Driver\Command( [
    'eval' => "print('Olá, $username!');"
] );

$r = $m->executeCommand( 'dramio', $cmd );
?>
```

Agora o MongoDB executa a string JavaScript
`"print('Olá, '); db.users.drop(); print('!');"`.
Este ataque é fácil de evitar: use `args` para passar
variáveis de PHP para JavaScript:

```
<?php
$m = new MongoDB\Driver\Manager;

$_GET['field'] = 'derick';
$args = [ $_GET['field'] ];

$cmd = new \MongoDB\Driver\Command( [
    'eval' => "function greet(username) { print('Olá, ' + username + '!'); }",
    'args' => $args,
] );

$r = $m->executeCommand( 'dramio', $cmd );
?>
```

Isto adiciona um argumento ao escopo JavaScript, que é usado como argumento
para a função `greet`. Agora, se
alguém tentar enviar código malicioso, o MongoDB imprimirá inofensivamente
`Olá, '); db.dropDatabase(); print('!`.

O uso de argumentos ajuda a evitar que entradas maliciosas sejam executadas pelo
banco de dados. Porém, você deve garantir que seu código não vire
e execute a entrada de qualquer maneira! Em primeiro lugar, é melhor evitar executar
*qualquer* JavaScript no servidor.

É altamente recomendável evitar a [» cláusula
$where](https://www.mongodb.com/docs/manual/reference/operator/query/where/#considerations) nas consultas, pois ela afeta significativamente o desempenho. Sempre
que possível, use operadores de consulta normais ou o [» Estrutura de
agregação](https://www.mongodb.com/docs/manual/core/aggregation-pipeline).

Como alternativa ao [» MapReduce](https://www.mongodb.com/docs/manual/core/map-reduce/), que usa
JavaScript, considere usar o [» Estrutura de
agregação](https://www.mongodb.com/docs/manual/core/aggregation-pipeline). Ao contrário do Map/Reduce, ele usa uma linguagem idiomática para
construir consultas, sem ter que escrever e usar a abordagem JavaScript mais lenta
que o Map/Reduce requer.

O [» comando eval](https://www.mongodb.com/docs/manual/reference/command/eval/)
foi descontinuado desde o MongoDB 3.0 e também deve ser evitado.

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
