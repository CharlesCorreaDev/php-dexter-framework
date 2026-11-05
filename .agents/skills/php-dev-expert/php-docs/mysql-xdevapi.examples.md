# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi.examples.php

---

# Examples

O ponto de entrada central para a X DevAPI é a função **mysql\_xdevapi\getSession()**,
que recebe uma URI para um servidor MySQL 8.0 e retorna um
objeto [mysql\_xdevapi\Session](class.mysql-xdevapi-session.md).

**Exemplo #1 Conectando a um Servidor MySQL**

```
<?php
try {
    $session = mysql_xdevapi\getSession("mysqlx://usuario:senha@servidor");
} catch(Exception $e) {
    die("Não foi possível estabelecer conexão: " . $e->getMessage());
}

// ... use $session
?>
```

A sessão fornece acesso completo à API. Para uma nova instalação do Servidor MySQL,
o primeiro passo é criar um esquema com uma coleção
para armazenar dados:

**Exemplo #2 Criando um Esquema e uma Coleção no Servidor MySQL**

```
<?php
$schema = $session->createSchema("teste");
$collection = $schema->createCollection("exemplo");
?>
```

Ao armazenar dados, normalmente [json\_encode()](function.json-encode.md) é usada para codificar
os dados em JSON, que assim podem ser armazenados em uma coleção.

O exemplo a seguir armazena dados na coleção criada anteriormente,
e depois recupera partes dela novamente.

**Exemplo #3 Armazenando e Recuperando Dados**

```
<?php
$marco = [
  "nome" => "Marco",
  "idade"  => 19,
  "emprego"  => "Programador"
];
$mike = [
  "nome" => "Mike",
  "idade"  => 39,
  "emprego"  => "Gerente"
];

$schema = $session->getSchema("teste");
$collection = $schema->getCollection("exemplo");

$collection->add($marco, $mike)->execute();

var_dump($collection->find("nome = 'Mike'")->execute()->fetchOne());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(4) {
  ["_id"]=>
  string(28) "00005ad66aaf0000000000000003"
  ["idade"]=>
  int(39)
  ["emprego"]=>
  string(7) "Gerente"
  ["nome"]=>
  string(4) "Mike"
}
```

O exemplo demonstra que o Servidor MySQL adiciona um campo extra de nome
`_id`, que serve como chave primária para o documento.

O exemplo também demonstra que os dados recuperados são ordenados alfabeticamente,
Esta ordem específica vem do armazenamento binário eficiente dentro do servidor MySQL, mas
isso nem sempre é confiável. Refira-se à documentação do tipo de dados JSON do MySQL para detalhes.

Opcionalmente, use os iteradores do PHP para buscar múltiplos documentos:

**Exemplo #4 Buscando e Iterando sobre Múltiplos Documentos**

```
<?php
$result = $collection->find()->execute();
foreach ($result as $doc) {
  echo "{$doc["nome"]} é um {$doc["emprego"]}.\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Marco é um Programador.
Mike é um Gerente.
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
