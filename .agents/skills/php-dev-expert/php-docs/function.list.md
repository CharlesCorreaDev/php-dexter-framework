# Cria variáveis como se fossem arrays

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.list.php

---

# list

(PHP 4, PHP 5, PHP 7, PHP 8)

list — Cria variáveis como se fossem arrays

### Descrição

function **list**([mixed](language.types.mixed.md) `$var`, [mixed](language.types.mixed.md) `...$vars` = ?): [array](language.types.array.md)

Assim como [array()](function.array.md), não é exatamente uma função,
e sim uma construção da própria linguagem. **list()** é usada
para criar uma lista de variáveis em apenas uma operação.
Somente arrays e objetos que implementam [ArrayAccess](class.arrayaccess.md) podem ser desconstruídos.
Expressões **list()** não podem ser completamente vazias.

> **Nota**:
>
> Antes do PHP 7.1.0, **list()** funcionava somente em arrays numéricos e assumia
> que o índice numérico iniciava em 0.

A partir do PHP 7.1.0, **list()** também pode conter chaves explícitas, permitindo a
desconstrução de arrays com chaves não inteiras ou não sequenciais. Para mais detalhes,
consulte a [seção sobre desconstrução de arrays](language.types.array.md#language.types.array.syntax.destructuring).

> **Nota**:
>
> A tentativa de acessar uma chave de array que não foi definida é
> o mesmo que acessar qualquer outra variável indefinida:
> uma mensagem de erro de nível **`E_WARNING`**
> (nível **`E_NOTICE`** antes do PHP 8.0.0) será
> emitida e o resultado será **`null`**.
>
> A tentativa de desconstruir um valor escalar atribui **`null`** a todas as variáveis.
> A tentativa de desconstruir um objeto que não implementa ArrayAccess é um erro fatal.

### Parâmetros

`var`
:   A variável.

`vars`
:   Outras variaveis.

### Valor Retornado

Retorna o array atribuído.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.3.0 | Foi adicionado suporte para atribuições de referência na deconstrução de array. |
| 7.1.0 | Agora é possível especificar chaves em **list()**. Isso habilita desconstruir os arrays com chaves não-inteiras e não-sequenciais. |

### Examples

**Exemplo #1 Exemplo de **list()****

```
<?php

$info = array('Café', 'marrom', 'cafeína');

// Listando todas as variáveis
list($bebida, $cor, $substancia) = $info;
echo "$bebida é $cor e $substancia o faz especial.\n";

// Listando apenas alguns deles
list($bebida, , $substancia) = $info;
echo "$bebida tem $substancia.\n";

// Ou ignoramos os primeiros valores para conseguir apenas o último
list( , , $substancia) = $info;
echo "I need $substancia!\n";

// list() não funciona com strings
list($bar) = "abcde";
var_dump($bar); // NULL
?>
```

**Exemplo #2 Exemplo de **list()****

```
<?php
$resultado = $pdo->query("SELECT id, nome FROM empregados");
while (list($id, $nome) = $resultado->fetch(PDO::FETCH_NUM)) {
    echo "id: $id, nome: $nome\n";
}
?>
```

**Exemplo #3 **list()** e ordem das definições de índice**

```
<?php

list($a, list($b, $c)) = array(1, array(2, 3));

var_dump($a, $b, $c);

?>
```

O exemplo acima produzirá:

```
int(1)
int(2)
int(3)
```

A ordem em que são definidos os índices do array para
ser consumido por **list()** é irrelevante.

**Exemplo #4 Usando **list()** com índices de array**

```
<?php
$foo = array(2 => 'a', 'foo' => 'b', 0 => 'c');
$foo[1] = 'd';
list($x, $y, $z) = $foo;
var_dump($foo, $x, $y, $z);
```

O retorno desse script é o seguinte (note a ordem dos elementos em
comparação com a ordem que foram escritos com a sintaxe **list()**):

```
array(4) {
  [2]=>
  string(1) "a"
  ["foo"]=>
  string(1) "b"
  [0]=>
  string(1) "c"
  [1]=>
  string(1) "d"
}
string(1) "c"
string(1) "d"
string(1) "a"
```

**Exemplo #5 **list()** com chaves**

A partir do PHP 7.1.0, **list()** também pode conter
chaves explícitas que podem ser informadas como expressões arbitrárias.
A mistura de chaves inteiras e strings é permitida; no entanto, elementos
com e sem chaves não podem ser misturados.

```
<?php
$dados = [
    ["id" => 1, "nome" => 'Mario'],
    ["id" => 2, "nome" => 'Frederico'],
];
foreach ($dados as ["id" => $id, "nome" => $nome]) {
    echo "id: $id, nome: $nome\n";
}
echo PHP_EOL;
list(1 => $segundo, 3 => $quarto) = [1, 2, 3, 4];
echo "$segundo, $quarto\n";
```

O exemplo acima produzirá:

```
id: 1, name: Mario
id: 2, name: Frederico

2, 4
```

### Veja também

- [each()](function.each.md) - Retorna o par atual de chave e valor de um array e avança o seu cursor
- [array()](function.array.md) - Cria um array
- [extract()](function.extract.md) - Importa variáveis para a tabela de símbolos a partir de um array

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
