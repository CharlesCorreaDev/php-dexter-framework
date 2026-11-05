# Básico sobre Contagem de Referência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.gc.refcounting-basics.php

---

## Básico sobre Contagem de Referência

Uma variável PHP é armazenada em um contêiner chamado "zval". Um zval
contém, além do tipo e do valor da variável, dois bits adicionais de
informação. O primeiro é chamado de "is\_ref" e é um valor booleano
que indica se a variável é parte de um "conjunto de referência" ou não. Com
este bit, o motor do PHP sabe como diferenciar variáveis normais
de referências. Como o PHP permite referências no nível do usuário, como as criadas pelo
operador &, um contêiner zval também tem um mecanismo de contagem de referência
interno para otimizar o uso de memória. Esta segunda parte de informação
adicional, chamado "refcount", contém a quantidade de nomes de variáveis (também
chamadas de símbolos) que apontam para este contêiner. Todos os símbolos são armazenados em
uma tabela de símbolos, e existe uma por escopo. Existe um escopo para o
script principal (ou seja, aquele requisitado através do navegador), assim como um escopo
para cada função ou método.

Um contêiner zval é criado quando uma nova variável é criada com um valor
constante, como em:

**Exemplo #1 Criando um novo contêiner zval**

```
<?php
$a = "new string";
?>
```

Neste caso, o nome do símbolo, `a`, é criado no escopo atual,
e um novo contêiner de variável é criado com o tipo [string](language.types.string.md) e o valor
`new string`. O bit "is\_ref" é por padrão definido para **`false`** porque nenhuma
referência no nível do usuário foi criada. O "refcount" é definido para `1` já
que existe apenas um símbolo que faz uso deste contêiner de variável. Note
que referências (isto é, "is\_ref" igual a **`true`**) com "refcount" igual a `1`, são
tratadas como se elas não fossem referências (como se "is\_ref" fosse **`false`**). Se o [» Xdebug](https://xdebug.org/) estiver instalado, esta informação pode ser
mostrada chamando-se a função **xdebug\_debug\_zval()**.

**Exemplo #2 Mostrando a informação zval**

```
<?php
$a = "new string";
xdebug_debug_zval('a');
?>
```

O exemplo acima produzirá:

```
a: (refcount=1, is_ref=0)='new string'
```

Atribuir esta variável a outro nome de variável irá aumentar o "refcount".

**Exemplo #3 Aumentando o "refcount" de um zval**

```
<?php
$a = "new string";
$b = $a;
xdebug_debug_zval( 'a' );
?>
```

O exemplo acima produzirá:

```
a: (refcount=2, is_ref=0)='new string'
```

O refcount é `2` aqui, porque o mesmo contêiner de variável está ligado
tanto com a quanto com b.
O PHP é inteligente o suficiente para não copiar o contêiner real da
variável quando não for necessário. Contêineres são destruídos quando
o "refcount" atinge zero. O "refcount" é diminuído em uma unidade quando qualquer
símbolo ligado ao contêiner da variável deixa o escopo (ex.: quando a
função termina) ou quando um símbolo perde a atribuição (ex.: chamando [unset()](function.unset.md)).
O exemplo a seguir mostra isso:

**Exemplo #4 Diminuindo o "refcount" de zval**

```
<?php
$a = "new string";
$c = $b = $a;
xdebug_debug_zval( 'a' );
$b = 42;
xdebug_debug_zval( 'a' );
unset( $c );
xdebug_debug_zval( 'a' );
?>
```

O exemplo acima produzirá:

```
a: (refcount=3, is_ref=0)='new string'
a: (refcount=2, is_ref=0)='new string'
a: (refcount=1, is_ref=0)='new string'
```

Se agora `unset($a);` for chamada, o contêiner da variável, incluindo o tipo
e o valor, serão removidos da memória.

### Tipos Compostos

As coisas ficam um pouco mais complexas com tipos compostos como [array](language.types.array.md)s e
[object](language.types.object.md)s. Ao contrário dos valores escalares, [array](language.types.array.md)s
e [object](language.types.object.md)s armazenam suas
propriedades em uma tabela de símbolos própria. Isto significa que o exemplo
a seguir cria três contêineres zval:

**Exemplo #5 Criando um zval de [array](language.types.array.md)**

```
<?php
$a = array( 'meaning' => 'life', 'number' => 42 );
xdebug_debug_zval( 'a' );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
a: (refcount=1, is_ref=0)=array (
   'meaning' => (refcount=1, is_ref=0)='life',
   'number' => (refcount=1, is_ref=0)=42
)
```

Ou graficamente

![Zvals para um array simples](images/12f37b1c6963c1c5c18f30495416a197-simple-array.png)

Os três contêineres zval são: a, meaning, e number.
Regras similares se aplicam para aumento e redução de "refcounts". Abaixo, outro elemento é
adicionado ao array, e define seu valor ao conteúdo de um elemento
já existente:

**Exemplo #6 Adicionando elemento já existente a um array**

```
<?php
$a = array( 'meaning' => 'life', 'number' => 42 );
$a['life'] = $a['meaning'];
xdebug_debug_zval( 'a' );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
a: (refcount=1, is_ref=0)=array (
   'meaning' => (refcount=2, is_ref=0)='life',
   'number' => (refcount=1, is_ref=0)=42,
   'life' => (refcount=2, is_ref=0)='life'
)
```

Ou graficamente

![Zvals para um array simples com uma referência](images/12f37b1c6963c1c5c18f30495416a197-simple-array2.png)

Pela saída do Xdebug acima, pode-se perceber que tanto o elemento antigo do array
quanto o novo agora apontam para um contêiner zval cujo "refcount" é
`2`. Embora a saída do Xdebug mostre dois contêineres zval
com valor `'life'`, eles são o mesmo. A função
**xdebug\_debug\_zval()** não mostra isso, mas
pode-se ver isso mostrando o ponteiro de memória.

Remover o elemento de um array é como remover um símbolo de um escopo.
Fazendo isso, o "refcount" de um contêiner ao qual um elemento do array aponta
é reduzido. Novamente, quando o "refcount" atinge zero, o contêiner da
variável é removido da memória. Um exemplo para mostrar isto:

**Exemplo #7 Removendo um elemento de um array**

```
<?php
$a = array( 'meaning' => 'life', 'number' => 42 );
$a['life'] = $a['meaning'];
unset( $a['meaning'], $a['number'] );
xdebug_debug_zval( 'a' );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
a: (refcount=1, is_ref=0)=array (
   'life' => (refcount=1, is_ref=0)='life'
)
```

Agora, as coisas ficam interessantes se o próprio array for adicionado como
um elemento do array, o que é mostrado no exemplo a seguir, onde também um operador
de referência foi inserido, senão o PHP criaria uma cópia:

**Exemplo #8 Adicionando o próprio array como um elemento de si mesmo**

```
<?php
$a = array( 'one' );
$a[] =& $a;
xdebug_debug_zval( 'a' );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
a: (refcount=2, is_ref=1)=array (
   0 => (refcount=1, is_ref=0)='one',
   1 => (refcount=2, is_ref=1)=...
)
```

Ou graficamente

![Zvals para um array com referência circular](images/12f37b1c6963c1c5c18f30495416a197-loop-array.png)

Pode-se perceber que a variável do array (a) assim como o segundo elemento
(1) agora apontam para um contêiner de variável que tem um "refcount" de `2`.
Os "..." no exemplo acima mostram que há recursão envolvida, e que,
obviamente, neste caso significa que os "..." apontam de volta ao
array original.

Como antes, tirar a atribuição de uma variável remove o símbolo, e a
contagem de referência do contêiner da variável à qual o símbolo aponta é reduzida em uma
unidade. Então, se a variável $a perder a atribuição após execução do código acima,
a contagem de referência do contêiner da variável à qual $a e o elemento "1" apontam
será diminuída em uma unidade, de "2" para "1". Isto pode ser representado assim:

**Exemplo #9 Removendo a atribuição de $a**

```
(refcount=1, is_ref=1)=array (
   0 => (refcount=1, is_ref=0)='one',
   1 => (refcount=1, is_ref=1)=...
)
```

Ou graficamente

![Zvals depois da remoção do array com um referência circular demonstrando o vazamento de memória](images/12f37b1c6963c1c5c18f30495416a197-leak-array.png)

### Problemas na Limpeza

Embora não haja mais um símbolo em nenhum escopo apontando para esta
estrutura, ela não pode ser limpa porque o elemento "1" do array ainda
aponta para este mesmo array. Como não há símbolo externo apontando para
ela, não há como um usuário limpar esta estrutura; e aí acontece o
vazamento de memória. Felizmente, o PHP irá limpar esta estrutura de dados no final
da requisição, mas até lá, ela irá ocupar um espaço valioso na
memória. Esta situação ocorre frequentemente quando se está implementando algoritmos
de interpretação ou outros onde existe um elemento "filho" apontando de volta para um
elemento "pai". A mesma situação também pode com certeza ocorrer com objetos, onde
na verdade existe mais probabilidade de ocorrer, já que objetos são sempre implicitamente
usados "[por referência](language.oop5.references.md)".

Isso pode não ser um problema quanto acontecer somente uma ou duas vezes, mas se
houver milhares, ou até milhões dessas perdas de memória, obviamente
começa a ser um problema. É especialmente problemático em scripts de execução
longa, como daemons onde a requisição basicamente nunca termina,
ou em grandes conjuntos de testes de unidades. Este último já causou problemas durante
a execução de testes de unidades para o componente Template da bilioteca eZ
Components. Em alguns casos, era necessário mais de 2GB de memória, que o servidor
de testes não tinha.

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
