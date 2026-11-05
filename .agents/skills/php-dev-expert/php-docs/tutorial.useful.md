# Algo Útil

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tutorial.useful.php

---

# Algo Útil

Vamos fazer alguma coisa um pouco mais útil agora. Nós iremos checar
qual é o tipo de navegador que o visitante está utilizando para ver a nossa página.
Para fazer isto nós iremos checar qual é o valor da string agente que o navegador
envia como parte de sua requisição HTTP. Esta informação é armazenada em uma [variável](language.variables.md). Variáveis sempre começam
com um símbolo de cifrão no PHP. A variável que nos interessa no momento
é [$\_SERVER['HTTP\_USER\_AGENT']](reserved.variables.server.md).

> **Nota**:
>
> [$\_SERVER](reserved.variables.server.md) é uma
> variável especial reservada do PHP que contém todas as informações sobre o servidor web.
> Ela é conhecida como uma superglobal. Veja a página do manual relacionada às
> [superglobais](language.variables.superglobals.md)
> para mais informações.

Para exibir esta variável, nós podemos fazer isto:

**Exemplo #1 Imprimindo uma variável (elemento do array)**

```
<?php

echo $_SERVER['HTTP_USER_AGENT'];

?>
```

Um exemplo de saída desse script poderia ser:

```
Mozilla/5.0 (Linux) Firefox/112.0
```

Há muitos [tipos](language.types.md) de
variáveis disponíveis no PHP. No exemplo acima nós imprimimos
um elemento do [array](language.types.array.md).
Arrays podem ser muito úteis.

[$\_SERVER](reserved.variables.server.md) é somente uma das variáveis que o PHP automaticamente
disponibiliza para você. A lista destas variáveis pode ser vista na seção
[Variáveis Reservadas](reserved.variables.md)
do manual ou você pode obter uma lista completa delas olhando
o resultado da função [phpinfo()](function.phpinfo.md) utilizada no
exemplo da seção anterior.

Você pode colocar múltiplas instruções PHP dentro da etiqueta PHP e criar
pequenos blocos de códigos que fazem muito mais do que um simples 'echo'.
Por exemplo, se você quiser verificar se o navegador é o Firefox você
pode fazer isso:

**Exemplo #2 Exemplo utilizando [estruturas
de controle](language.control-structures.md) e [funções](language.functions.md)**

```
<?php

if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
    echo 'Você está usando o Firefox.';
}

?>
```

Um exemplo de saída desse script seria:

```
Você está usando o Firefox.
```

Aqui nós introduzimos alguns conceitos novos. Nós temos a declaração
[if](control-structures.if.md).
Se você está familiarizado com a sintaxe básica usada pela
linguagem C isto parecerá ser lógico para você. Se não, você
provavelmente deve ver um livro introdutório de PHP e ler os
capítulos iniciais, ou ainda ler a seção [Referência da
Linguagem](langref.md) do manual.

O segundo conceito que iremos abordar é a chamada à função [str\_contains()](function.str-contains.md).
A função [str\_contains()](function.str-contains.md) vem junto com
o PHP e busca uma palavra em outra palavra. Neste caso nós estamos
procurando pelo texto `'Firefox'` dentro de
[$\_SERVER['HTTP\_USER\_AGENT']](reserved.variables.server.md). Se o dado pesquisado
for encontrado na coleção, a função retorna verdadeiro. Se não, ela
retorna **`false`**. Se ela retornar **`true`**, o [if](control-structures.if.md) avalia para **`true`**
e o código dentro dos {colchetes} é executado. Caso contrário o código não
roda. Tente criar exemplos similares
com [if](control-structures.if.md),
[else](control-structures.else.md), e outras
funções como [strtoupper()](function.strtoupper.md) e
[strlen()](function.strlen.md). Cada página relacionada contém exemplos
também. Se você estiver incerto em como utilizar funções você deve ler
as páginas sobre [como ler uma
definição de função](about.prototypes.md) e a seção sobre
[funções do PHP](language.functions.md).

Nós podemos avançar agora e mostrar a você como alternar entre os modos
PHP mesmo que você esteja executando blocos de códigos:

**Exemplo #3 Mesclando entre os modos PHP e HTML**

```
<?php
if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false) {
    ?>
    <h3>str_contains() retornou não falso</h3>
    <p>Você está usando Firefox</p>
    <?php
} else {
    ?>
    <h3>str_contains() retornou false</h3>
    <p>Você não está usando Firefox</p>
    <?php
}
?>
```

Um exemplo de saída desse script poderia ser:

```
<h3>str_contains() retornou não falso</h3>
<p>Você está usando Firefox</p>
```

Ao invés de usar a declaração echo do PHP para imprimir a saída dos dados, nós saímos
do modo do PHP e usamos o HTML normal. O importante a notar aqui
é que a lógica do script continua intacta. Somente
um dos blocos HTML será enviado dependendo do
resultado da chamada à função [str\_contains()](function.str-contains.md). Em outras palavras, depende
se a palavra `Firefox` for encontrada ou não.

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
