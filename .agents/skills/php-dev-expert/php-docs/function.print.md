# Exibe uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.print.php

---

# print

(PHP 4, PHP 5, PHP 7, PHP 8)

print — Exibe uma string

### Descrição

function **print**([string](language.types.string.md) `$expression`): [int](language.types.integer.md)

Exibe o conteúdo de `expression`.

`print` não é uma função, é uma construção de linguagem.
Seu argumento é a expressão logo após a palavra-chave `print`,
não delimitada por parênteses.

As principais diferenças para [echo](function.echo.md) são que
`print` aceita apenas um único argumento e sempre retorna
`1`.

### Parâmetros

`expression`
:   A expressão a ser mostrada. Valores não-string serão convertidos coercitivamente para strings,
    mesmo quando [a diretiva
    `strict_types`](language.types.declarations.md#language.types.declarations.strict) estiver habilitada.

### Valor Retornado

Retorna `1`, sempre.

### Examples

**Exemplo #1 Exemplos de `print`**

```
<?php
print "print não requer parênteses.";
print PHP_EOL;

// Não é adicionado espaço ou quebra de linha; o exemplo abaixo mostra "olámundo" em uma só linha
print "olá";
print "mundo";
print PHP_EOL;

print "Esta string ocupa
múltiplas linhas. As quebras de linha
também serão mostradas.";
print PHP_EOL;

print "Esta string ocupa\nmúltiplas linhas. As quebras de linha\ntambém serão mostradas.";
print PHP_EOL;

// O argumento pode ser qualquer expressão que produza uma string
$foo = "exemplo";
print "foo é um $foo"; // foo é um exemplo
print PHP_EOL;

$frutas = ["limão", "laranja", "banana"];
print implode(" e ", $frutas); // limão e laranja e banana
print PHP_EOL;

// Expressões não-string são convertidas coercitivamente para strings, mesmo que declare(strict_types=1) seja usada
print 6 * 7; // 42
print PHP_EOL;

// Como print tem um valor de retorno, pode ser usada em expressões
// O código a seguir mostra "olá mundo"
if ( print "olá" ) {
    echo " mundo";
}
print PHP_EOL;

// O código a seguir mostra "verdadeiro"
( 1 === 1 ) ? print 'verdadeiro' : print 'falso';
print PHP_EOL;
?>
```

### Notas

> **Nota**:
> **Usando com parênteses**  
>
> Envolver o argumento de `print` com parênteses não irá
> causar um erro de sintaxe, e produz uma sintaxe que se parece com uma chamada
> normal de função. Entretanto, isso pode causar confusão, porque os parênteses são na verdade
> parte da expressão sendo mostrada, e não parte da sintaxe de `print`
> propriamente.
>
> ```
> <?php
> print "olá";
> // exibe "olá"
>
> print("hello");
> // também exibe "olá", porque ("olá") é uma expressão válida
>
> print(1 + 2) * 3;
> // exibe "9"; os parênteses fazem com que 1+2 seja avaliado primeiro, e depois 3*3
> // a declaração print enxerga toda a expressão como um único argumento
>
> if ( print("olá") && false ) {
>     print " - dentro do if";
> }
> else {
>     print " - dentro do else";
> }
> // Exibe " - dentro do if"
> // A expressão ("olá") && false é avaliada primeiro, produzindo resultado falso.
> // Isto é convertido à força para uma string vazia "" e exibido.
> // A declaração print a partir daí retorna 1, então o código dentro do bloco if é executado
> ?>
> ```
>
> Ao usar `print` com uma expressão maior, colocar tanto a
> palavra-chave quanto seu argumento entre parênteses pode ser necessário para gerar
> o resultado desejado:
>
> ```
> <?php
> if ( (print "olá") && false ) {
>     print " - dentro do if";
> }
> else {
>     print " - dentro do else";
> }
> // Exibe "olá - dentro do else"
> // Diferentemente do exemplo anterior, a expressão (print "olá") é avaliada primeiro.
> // Depois de exibir "olá", print retorna 1.
> // Já que 1 && false é falso, o código dentro do bloco else é executado.
>
> print "olá " && print "mundo";
> // Exibe "mundo1"; print "mundo" é avaliado primeiro,
> // e depois a expressão "olá " && 1 é passada ao print da esquerda
>
> (print "olá ") && (print "mundo");
> // Exibe "olá mundo"; os parênteses forçam a avaliação das expressões print
> // antes da operação &&
> ?>
> ```

> **Nota**:
>
> Como esta é uma
> construção da linguagem e não uma função, ela não pode ser chamada usando
> [funções variáveis](functions.variable-functions.md)
> ou [argumentos nomeados](functions.arguments.md#functions.named-arguments).

### Veja também

- [echo](function.echo.md) - Envia uma ou mais strings para a saída
- [printf()](function.printf.md) - Envia uma string formatada para a saída
- [flush()](function.flush.md) - Descarrega o buffer na saída do sistema
- [Maneiras de especificar strings literais](language.types.string.md)

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
