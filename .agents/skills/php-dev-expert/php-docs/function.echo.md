# Envia uma ou mais strings para a saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.echo.php

---

# echo

(PHP 4, PHP 5, PHP 7, PHP 8)

echo — Envia uma ou mais strings para a saída

### Descrição

function **echo**([string](language.types.string.md) `...$expressions`): [void](language.types.void.md)

Envia uma ou mais expressões para a saída, sem novas linhas ou espaços adicionais.

`echo` não é uma função mas sim uma construção de linguagem.
Seus argumentos são uma lista de expressões logo após a palavra-chave `echo`,
separadas por vírgulas e não delimitadas por parênteses.
Diferentemente de outras construções de linguagem, `echo` não tem
nenhum valor de retorno, portando não pode ser usada no contexto de uma expressão.

`echo` também tem uma sintaxe de atalho em HTML, onde pode-se
seguir imediatamente a etiqueta de abertura com um sinal de igual. Esta sintaxe está disponível
mesmo que a configuração [short\_open\_tag](ini.core.md#ini.short-open-tag)
esteja desabilitada.

```
I have <?=$foo?> foo.
```

As principais diferenças para a função [print](function.print.md) são que
`echo` aceita múltiplos argumentos e não tem um valor de retorno.

### Parâmetros

`expressions`
:   Uma ou mais expressões a serem enviadas para a saída, separadas por vírgula.
    Valores não-string serão convertidas forçadamente para strings, mesmo quando
    [a
    diretiva `strict_types`](language.types.declarations.md#language.types.declarations.strict) estiver habilitada.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplos de `echo`**

```
<?php
echo "echo não requer parênteses.";

// Strings podem ser passadas individualmente como múltiplos argumentos ou
// concatenadas e passadas como um único argumento
echo 'Esta ', 'string ', 'foi ', 'criada ', 'com múltiplos parâmetros.', "\n";
echo 'Esta ' . 'string ' . 'foi ' . 'criada ' . 'com concatenação.' . "\n";

// Nenhuma nova linha ou espaço são adicionados; o código abaixo mostra "olámundo" em apenas uma linha
echo "olá";
echo "mundo";

// O mesmo que o exemplo acima
echo "olá", "mundo";

echo "Esta string ocupa
múltiplas linhas. As novas linhas
também estarão na saída.";

echo "Esta string ocupa\nmúltiplas linhas. As novas linhas\ntambém estarão na saída.";

// O argumento pode ser qualquer expressão que produza uma string
$foo = "exemplo";
echo "foo é um $foo"; // foo é um exemplo

$fruits = ["limão", "laranja", "banana"];
echo implode(" e ", $fruits); // limão e laranja e banana

// Expressões não-string não convertidas à força para string, mesmo se declare(strict_types=1) for usada
echo 6 * 7; // 42

// Entretanto os exemplos a seguir irão funcionar:
($some_var) ? print 'true' : print 'false'; // print também é uma contrução de linguagem mas
                                            // é uma expressão válida, retornando 1,
                                            // portanto pode ser usada neste contexto.

echo $some_var ? 'true': 'false'; // primeiro avalia a expressão e depois passa para echo
?>
```

**Exemplo #2 `echo` não é uma expressão**

```
<?php
// Como echo não se comporta como uma expressão, o código a seguir é inválido.
($some_var) ? echo 'true' : echo 'false';
?>
```

### Notas

> **Nota**:
>
> Como esta é uma
> construção da linguagem e não uma função, ela não pode ser chamada usando
> [funções variáveis](functions.variable-functions.md)
> ou [argumentos nomeados](functions.arguments.md#functions.named-arguments).

> **Nota**:
> **Usando com parênteses**  
>
> Delimitar um argumento de `echo` com parênteses não irá
> causar um erro de sintaxe, e produzirá uma sintaxe que se parece com uma
> chamade normal de uma função. Entretanto, isto pode gerar confusão, porque os parênteses, na verdade,
> são parte da expressão que será enviada para a saída, e não parte da sintaxe de `echo`
> em si.
>
> **Exemplo #3 Usando parênteses**
>
> ```
> <?php
> echo "olá", PHP_EOL;
> // mostra "olá"
>
> echo("olá"), PHP_EOL;
> // também mostra "olá", porque ("olá") é uma expressão válida
>
> echo(1 + 2) * 3, PHP_EOL;
> // mostra "9"; os parênteses fazem com que 1+2 seja avaliada primeiro, e depois 3*3
> // a instrução echo enxerga toda a expressão como um só argumento
>
> echo "olá", " mundo", PHP_EOL;
> // mostra "olá mundo"
>
> echo("olá"), (" mundo"), PHP_EOL;
> // mostra "olá mundo"; os parênteses são parte de cada expressão
> ?>
> ```
>
> **Exemplo #4 Expressão inválida**
>
> ```
> <?php
> echo("olá", " mundo"), PHP_EOL;
> // Lança um erro de interpretação porque ("olá", " mundo") não é uma expressão válida
> ?>
> ```

**Dica**

Passar múltiplos argumentos para `echo` pode evitar
complicações que surgem com a precedência do operador de concatenação no
PHP. Por exemplo, o operador de concatenação tem precedência maior que o
operador ternário, e antes do PHP 8.0.0 tinha a mesma precedência que adição
e subtração:

```
<?php
// Abaixo, a expressão 'Olá ' . isset($name) é avaliada primeiro,
// e é sempre verdadeira, portanto o argumento para echo será sempre $name
echo 'Olá ' . isset($name) ? $name : 'Maria Rodrigues' . '!';

// O comportamento pretendido requer parênteses adicionais
echo 'Olá ' . (isset($name) ? $name : 'Maria Rodrigues') . '!';

// Nas versões do PHP anteriores à 8.0.0, o código abaixo mostra "2" ao invés de "Soma: 3"
echo 'Soma: ' . 1 + 2;

// Da mesma forma, adicionar parênteses assegura a ordem pretendida de avaliação
echo 'Soma: ' . (1 + 2);
```

Se múltiplos argumentos forem passados, os parênteses não serão
necessário para reforçar precedência, pois cada expressão é independente:

```
<?php
echo "Olá ", isset($name) ? $name : "Maria Rodrigues", "!";

echo "Soma: ", 1 + 2;
```

### Veja também

- [print](function.print.md) - Exibe uma string
- [printf()](function.printf.md) - Envia uma string formatada para a saída
- [flush()](function.flush.md) - Descarrega o buffer na saída do sistema
- [Formas de especificar strings literais](language.types.string.md)

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
