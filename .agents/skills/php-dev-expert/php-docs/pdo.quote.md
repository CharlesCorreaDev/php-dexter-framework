# Inclui aspas em uma string para uso em uma consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pdo.quote.php

---

# PDO::quote

(PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.2.1)

PDO::quote — 
Inclui aspas em uma string para uso em uma consulta

### Descrição

public function **PDO::quote**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$type` = **`PDO::PARAM_STR`**): [string](language.types.string.md)|[false](language.types.singleton.md)

**PDO::quote()** coloca aspas na string de entrada
e escapa caracteres especiais dentro da string de entrada, usando um
estilo de aspas (ex.: simples ou duplas) apropriado ao driver subjacente.

Se esta função estiver sendo usada para construir instruções SQL, é
*fortemente* recomendado usar
[PDO::prepare()](pdo.prepare.md) para preparar instruções SQL com parâmetros
vinculados em vez de usar **PDO::quote()** para interpolar
a entrada do usuário em uma instrução SQL. Instruções preparadas com parâmetros vinculados
não são apenas mais portáveis, mais convenientes e imunes à injeção de SQL, mas
geralmente são muito mais rápidas de executar do que consultas interpoladas, já que tanto
o servidor quanto o cliente podem armazenar em cache uma forma compilada da consulta.

Nem todos os drivers PDO implementam esse método (principalmente PDO\_ODBC). Considere
usar instruções preparadas.

**Cuidado**

# Segurança: o conjunto de caracteres padrão

O conjunto de caracteres deve ser definido no nível do servidor ou na
própria conexão do banco de dados (dependendo do driver) para afetar o
**PDO::quote()**. Consulte a [documentação
específica do driver](pdo.drivers.md) para obter mais informações.

### Parâmetros

`string`
:   A string que será envolvida por aspas.

`type`
:   Fornece uma dica sobre o tipo de dados para drivers que possuem estilos de escape
    alternativos. Por exemplo, **`PDO_PARAM_LOB`** dirá ao driver para
    escapar dados binários.

### Valor Retornado

Retorna uma string entre aspas que é teoricamente segura para passar em
uma instrução SQL. Retorna **`false`** se o driver não suportar inserção de aspas
dessa forma.

### Examples

**Exemplo #1 Inserindo aspas em uma string normal**

```
<?php
$conn = new PDO('sqlite:/home/lynn/music.sql3');

/* String simples */
$string = 'Teste';
print "String sem aspas: $string\n";
print "String com aspas: " . $conn->quote($string) . "\n";
?>
```

O exemplo acima produzirá:

```
String sem aspas: Teste
String com aspas: 'Teste'
```

**Exemplo #2 Inserindo aspas em uma string perigosa**

```
<?php
$conn = new PDO('sqlite:/home/lynn/music.sql3');

/* String perigosa */
$string = 'String \' perversa';
print "String sem aspas: $string\n";
print "String com aspas:" . $conn->quote($string) . "\n";
?>
```

O exemplo acima produzirá:

```
String sem aspas: String ' perversa
String com aspas: 'String '' perversa'
```

**Exemplo #3 Inserindo aspas em uma string complexa**

```
<?php
$conn = new PDO('sqlite:/home/lynn/music.sql3');

/* String complexa */
$string = "St'ri''ng \"com'\"plexa";
print "String sem aspas: $string\n";
print "String com aspas: " . $conn->quote($string) . "\n";
?>
```

O exemplo acima produzirá:

```
String sem aspas: St'ri''ng "com'"plexa
String com aspas: 'St''ri''''ng "com''"plexa'
```

### Veja também

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
