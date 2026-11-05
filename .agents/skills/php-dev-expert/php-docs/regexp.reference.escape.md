# Sequências de escape

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.escape.php

---

## Sequências de escape

A barra invertida tem vários usos. Primeiramente, se ela for
seguida por um caractere não alfanumérico, ela remove qualquer
significado especial que este caractere possa ter. Este uso da
barra invertida como um caractere de escape se aplica tanto dentro
quanto fora de classes de caracteres.

Por exemplo, se a intenção é casar com um caractere "\*", deve-se escrever
"\\*" na expressão. Isto é aplicável mesmo que o
próximo caractere pudesse ser interpretado como um
metacaractere, por isso é sempre seguro preceder um caractere não alfanumérico
com "\" para especificar que ele irá representar a si mesmo. Em
particular, se a intenção for casar com uma barra invertida, deve-se escrever "\\".

> **Nota**:
>
> [strings](language.types.string.md#language.types.string.syntax) do PHP com aspas simples e aspas duplas têm significado
> especial para a barra invertida. Assim, se \ precisa corresponder a uma expressão
> regular \\, então "\\\\" ou '\\\\' precisam ser usadas no código PHP.

Se uma expressão for compilada com a opção
[PCRE\_EXTENDED](reference.pcre.pattern.modifiers.md),
espaços em branco na expressão (que não estejam em uma classe de caracteres) e
caracteres entre um "#" fora de uma classe de caracteres e o próximo caractere de
nova linha são ignorados. Uma barra invertida de escape pode ser usada para incluir um
espaço ou um caractere "#" como parte da expressão.

Um segundo uso da barra invertida fornece um meio de codificar
caracteres não imprimíveis de uma maneira visível. Não há
restrição para presença de caracteres não imprimíveis,
exceto pelo zero binário que termina uma expressão,
mas quando uma expressão está sendo preparada durante a edição de texto, normalmente
é mais fácil usar uma das sequências de escape a seguir do que
usar o caractere binário que ela representa:

*\a*
:   sinal sonoro, isto é, o caracater BEL (hexa 07)

*\cx*
:   "Crtl-x", onde x é qualquer caractere

*\e*
:   escape (hexa 1B)

*\f*
:   alimentação de formulário (hexa 0C)

*\n*
:   nova linha (hexa 0A)

*\p{xx}*
:   um caractere com a propriedade xx, veja
    [propriedades Unicode](regexp.reference.unicode.md)
    para mais informação

*\P{xx}*
:   um caractere sem a propriedade xx, veja
    [propriedades Unicode](regexp.reference.unicode.md)
    para mais informação

*\r*
:   retorno de carro (hexa 0D)

*\R*
:   quebra de linha: corresponde a \n, \r e \r\n

*\t*
:   tabulação (hexa 09)

*\xhh*
:   caractere com o código hexadecimal hh

*\ddd*
:   caractere com o código octal ddd, ou referência retroativa

O efeito preciso de "`\cx`" é o seguinte:
se "`x`" for uma letra minúscula, ela é convertida
para maiúscula. Depois, o bit 6 do caractere (hexa 40) é invertido.
Portanto, "`\cz`" se torna hexa 1A, mas
"`\c{`" se torna hexa 3B, enquanto que "`\c;`"
se torna hexa 7B.

Depois de "`\x`", até dois dígitos hexadecimais são
lidos (letras podem ser minúsculas ou maiúsculas).
No *modo UTF-8*, "`\x{...}`" é
permitido, onde o conteúdo entre chaves é uma string de dígitos
hexadecimais. É interpretado como um caractere UTF-8 cujo número de código é
o número hexadecimal informado. A sequência de escape hexadecimal original,
`\xhh`, corresponde a um caractere UTF-8 de dois bytes se o valor
for maior que 127.

Depois de "`\0`" até dois dígitos octais adicionais são lidos.
Em ambos os casos, se eles forem menos que dois, apenas os presentes
são usados. Assim, a sequência "`\0\x\07`"
especifica dois zeros binários seguidos por um caractere BEL. Certifique-se de
fornecer dois dígitos depois do zero inicial se o caractere
seguinte for, por acaso, um dígito octal.

A interpretação de uma barra invertida seguida por um dígito que não seja 0
é complicada. Fora de uma classe de caracteres, o PCRE lê este dígito
e os seguintes como um número decimal. Se o número
for menor que 10, ou se houve pelo menos esta quantidade
de grupos em parênteses na expressão, a
sequência inteira é interpretada como uma *referência retroativa*. Uma descrição
de como isto funciona é fornecida mais abaixo, logo após a discussão
sobre sub-expressões entre parênteses.

Dentro de uma classe de caracteres, ou se o número decimal for
maior que 9 e não houve essa quantidade de sub-expressões
de captura, o PCRE lê novamente até três dígitos octais depois da
barra invertida, e gera um único byte a partir dos
8 bits menos significativos do valor. Quaisquer dígitos subsequentes
representam a si mesmos. Por exemplo:

*\040*
:   é uma outra forma de escrever um espaço em branco (decimal 32)

*\40*
:   é a mesma coisa, desde que haja menos que 40
    sub-expressões de captura

*\7*
:   é sempre uma referência retroativa

*\11*
:   pode ser uma referência retroativa, ou outra forma de
    escrever uma tabulação (decimal 9)

*\011*
:   é sempre uma tabulação (decimal 9)

*\0113*
:   é uma tabulação seguida pelo caractere "3"

*\113*
:   é o caractere com o código octal 113 (decimal 75), já que
    não pode haver mais que 99 referências retroativas

*\377*
:   é um byte que consiste inteiramente de bits com o valor 1 (decimal 255)

*\81*
:   pode ser uma referência retroativa, ou um zero binário
    seguido pelos caracteres "8" e "1"

Observe que valores octais de 100 ou maiores não podem ser
introduzidos com um zero na frente, porque não mais que três
dígitos octais são lidos no total.

Todas as sequências que definem um valor de byte único podem ser
usadas tanto dentro quanto fora de classes de caracteres. Além disso,
dentro de uma classe de caracteres, a sequência "`\b`"
é interpretada como o caractere "backspace" (hexa 08). Fora de uma classe de
caracteres ela tem um significado diferente (veja abaixo).

O terceiro uso da barra invertida é para especificar tipos
genéricos de caracteres:

*\d*
:   qualquer dígito decimal

*\D*
:   qualquer caractere que não seja um dígito decimal

*\h*
:   qualquer caractere de espaço em branco horizontal

*\H*
:   qualquer caractere que não seja um espaço em branco horizontal

*\s*
:   qualquer caractere que represente um espaço em branco

*\S*
:   qualquer caractere que não represente um espaço em branco

*\v*
:   qualquer caractere de espaço em branco vertical

*\V*
:   qualquer caractere que não seja um espaço em branco vertical

*\w*
:   qualquer caractere de uma "palavra"

*\W*
:   qualquer caractere que não seja de uma "palavra"

Cada par de sequência de escape particiona o conjunto completo de
caracteres em dois conjuntos desconexos. Cada caractere informado
corresponde a um, e apenas um, de cada par.

Os caracteres que representam um espaço em branco horizontal são tabulação horizontal (9), nova linha (10), alimentação de formulário (12), retorno de carro (13),
e espaço (32). No entanto, em casos de correspondências específicas de localidade,
caracteres com pontos de código na faixa de 128 a 255 podem também ser considerados
como caracteres de espaço em branco, por exemplo, NBSP (A0).

Uma caractere de uma "palavra" é qualquer letra ou dígito ou o caractere
de sublinhado "\_", isto é, qualquer caractere que possa fazer parte de uma
"*palavra*" em Perl. A definição de letras e dígitos é
controlada pelas tabelas de caracteres do PCRE, e pode varia se correspondências específicas
de localidade estiverem ocorrendo. Por exemplo, na localidade "pt-BR" (português do Brasil), alguns
códigos de caracteres maiores que 127 são usados para letras acentuadas,
e estes são correspondidos por `\w`.

Estas sequências de tipo de caracteres podem aparecer tanto dentro como
fora de classes de caracteres. Cada uma corresponde a um caracteres do
tipo apropriado. Se o ponto de correspondência atual estiver no
final da string de entrada, todos eles irão falhar, já que não
haverá caractere para correspondência.

O quarto uso da barra invertida é para certas afirmações
simples. Uma afirmação especifica uma condição que deve ser encontrada
em um ponto particular de uma correspondência, sem consumir nenhum
caractere da string de entrada. O uso de sub-expressões
para afirmações mais complicadas é descrito abaixo. As
afirmaçõs que usam barra invertida são:

*\b*
:   borda de palavra

*\B*
:   não é borda de palavra

*\A*
:   início da string de entrada (independente do modo multi-linhas)

*\Z*
:   final da string de entrada ou caractere de nova linha no final (independente do
    modo multi-linhas)

*\z*
:   final da string de entrada (independente do modo multi-linhas)

*\G*
:   primeira posição de correspondência na string de entrada

Estas afirmações podem não aparecer em classes de caracteres (mas
observe que "`\b`" tem um significado diferente, que é o caractere
de "backspace" dentro de uma classe de caracteres).

Uma borda de palavra é uma posição na string de entrada onde
nem o caractere atual nem o caractere anterior
correspondem a `\w` ou `\W` ao mesmo tempo (isto é, um deles corresponde a
`\w` e o outro corresponde a
`\W`), ou o início ou final da string se o primeiro
ou último caractere corresponder a `\w`, respectivamente.

As afirmações `\A`, `\Z` e
`\z` diferem dos tradicionais
circunflexo "^" e cifrão "$" (descritos em [âncoras](regexp.reference.anchors.md) )
porque elas somente são correspondidas exatamente no início e no final da string de entrada,
não importa que opções estão definidas. Elas não são afetada pelas opções
[PCRE\_MULTILINE](reference.pcre.pattern.modifiers.md) ou
[PCRE\_DOLLAR\_ENDONLY](reference.pcre.pattern.modifiers.md).
A diferença entre `\Z` e
`\z` é que `\Z` corresponde antes de um caractere de
nova linha que é o último caractere da string e também no final da
string, enquanto que `\z` corresponde apenas no final.

A afirmação `\G` é verdadeira somente quando a posição
de correspondência atual é no ponto inicial da corresponência, como especificado pelo
argumento `offset` da função
[preg\_match()](function.preg-match.md). Ela difere de `\A`
quando o valor de `offset` é não-zero.

`\Q` e `\E` podem ser usadas para ignorar
metacaracteres na expressão. Por exemplo:
`\w+\Q.$.\E$` irão corresponder a um ou mais caracteres de palavras,
seguidos pelos literais `.$.` e ancorados no final da
string. Observe que isto não muda o comportamento dos
delimitadores; por exemplo, a expressão `#\Q#\E#$`
não é válida, porque o segundo `#` marca o final
da expressão, e o `\E#` é interpretado como modificador
inválido.

`\K` pode ser usado para redefinir o início da correspondência.
Por exemplo, a expressão `foo\Kbar` corresponde a
"foobar", mas reporta que correspondeu a "bar". O uso de
`\K` não interfere com a configuração de substrings
capturadas. Por exemplo, quando a expressão `(foo)\Kbar`
corresponde a "foobar", a primeira substring ainda será definida como "foo".

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
