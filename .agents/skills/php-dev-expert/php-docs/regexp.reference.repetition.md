# Repetição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.repetition.php

---

## Repetição

Repetição é especificada por quantificadores, que podem acompanhar qualquer
dos itens abaixo:

- um único caractere, possivelmente escapado
- o metacaractere "."
- uma classe de caracteres
- uma referência retroativa (veja a próxima seção)
- uma sub-expressão entre parênteses (a menos que seja uma afirmação -
  veja abaixo)

O quantificador de repetição geral especifica um número
mínimo e um máximo de correspondências permitidas, informando os dois
números dentro de chaves e separados por uma vírgula.
Os números precisam ser menores que 65536, e o primeiro precisa ser
menor ou igual ao segundo. Por exemplo:
`z{2,4}`
corresponde a "zz", "zzz" ou "zzzz". Um fechamento de chave em si
não é um caractere especial, Se o segundo número for omitido,
mas a vírgula estiver presente, não há limite superior; se o
segundo número e a vírgula são ambos omitidos, o quantificador
especifica um número exato de correspondências requeridas. Assim,
`[aeiou]{3,}`
corresponde a pelo menos 3 vogais sem acento sucessivas, mas também podem corresponder a
muito mais, enquanto que
`\d{8}`
corresponde a exatamente 8 dígitos.

Antes do PHP 8.4.0, uma chave de abertura que
aparece em uma posição onde um quantificador não é permitido, ou
que não corresponda à sintaxe de um quantificador, é considerada
como um caractere literal, Por exemplo, `{,6}`
não é um quantificador, mas uma string literal de quatro caracteres.
A partir do 8.4.0, a extensão PCRE é incluída com o PCRE2 versão 10.44,
que permite expressões como `\d{,8}` e elas são
interpretadas como `\d{0,8}`.
Além disso, a partir do PHP 8.4.0, caracteres de espaço em torno de quantificadores como em
`\d{0 , 8}` e `\d{ 0 , 8 }` são permitidos.

O quantificador {0} é permitido, fazendo com que a expressão se
comporte como se o item anterior e o quantificador não estivessem
presentes.

Para conveniência (e compatibilidade histórica), os três
quantificadores mais comuns têm abreviaturas de apenas um caractere:

**Quantificadores de um caractere**

|  |  |
| --- | --- |
| `*` | equivalente a `{0,}` |
| `+` | equivalente a `{1,}` |
| `?` | equivalente a `{0,1}` |

É possível construir laços de repetição infinitos acompanhando uma
sub-expressão que pode corresponder a nenhum caractere com um quantificador
que não tem limite superior, por exemplo:
`(a?)*`

Versões mais antigas do Perl e do PCRE costumavam emitir um erro em
tempo de compilação para tais expressões. No entanto, por haver
casos onde isto pode ser útil, essas expressões agora são
aceitas, mas se alguma repetição na sub-expressão de
fato corresponder a nenhum caractere, o laço é quebrado à força.

Por padrão, os quantificadores são "gananciosos", isto é, eles irão
corresponder ao máximo de caracteres possível (até o limite do número
máximo permitido), sem fazer com que o resto da expressão
falhe. O exemplo clássico de onde isso dá problema é a
tentativa de correspondência de comentários nos programas em linguagem C. Eles aparecem entre
as sequências /\* e \*/ e dentro da sequência, caracteres individuais
\* e / podem aparecer. Uma tentativa de corresponder a comentários C
aplicando a expressão
`/\*.*\*/`
à string
`/* primeiro comentário */ não comentário /* segundo comentário */`
falha, porque ela corresponde à string completa devido à
ganância do item ".\*".

Porém, se um quantificador for seguido por um ponto de interrogação,
ele se torna preguiçoso, e agora irá corresponder ao mínimo número
de vezes possível, e portanto a expressão
`/\*.*?\*/`
faz o certo com os comentários C. O significado dos
vários quantificadores não é alterado, apenas o número
preferido de correspondências. Não confunda este uso do
ponto de interrogação com o seu uso como um quantificador em si.
Como ele tem dois usos, pode algumas vezes aparecer duplicado, como
em
`\d??\d`
que corresponde a um dígito por preferência, mas pode corresponder a dois se
esta for a única maneira que o resto da expressão terá correspondência.

Se a opção [PCRE\_UNGREEDY](reference.pcre.pattern.modifiers.md)
estiver definida (uma opção que não está
disponível no Perl), os quantificadores não serão gananciosos por
padrão, mas os individuais podem se tornar gananciosos inserindo-se um
ponto de interrogação na sequência deles. Em outras palavras, o ponto de interrogação inverte
o comportamento padrão.

Quantificadores seguidos por `+` são "possessivos". Eles consomem
o máximo de caracteres possível e não retornam para corresponder ao restante da
expressão. Assim, `.*abc` corresponde a "aabc" mas
`.*+abc` não, porque `.*+` consome a
string inteira. Quantificadores possessivos podem ser usados para acelerar o processamento.

Quando uma sub-expressão entre parênteses é quantificada com uma contagem
mínima de repetições maior que um ou com um máximo limitado,
mais espaço de armazenamento é necessário para a expressão compilada, em
proporção ao tamanho do mínimo ou do máximo.

Se uma expressão começa com .\* ou .{0,} e a opção [PCRE\_DOTALL](reference.pcre.pattern.modifiers.md)
(equivalente ao /s do Perl) está definida, assim permitindo que o "."
corresponda a caracteres de nova linha, a expressão estará implicitamente ancorada,
porque qualquer coisa que estiver na sequência será testada em cada posição
de caractere na string de entrada. Portanto, não faz sentido
tentar novamente a correspondência geral em qualquer posição após a primeira.
O PCRE trata tal expressão como se ela estivesse precedida por \A.
Em casos onde é sabido que a string de entrada não contém
caracteres de nova linha, vale a pena configurar [PCRE\_DOTALL](reference.pcre.pattern.modifiers.md) quando a
expressão inicia com .\* para
obter esta otimização, ou
alternativamente usar ^ para indicar a ancoragem explicitamente.

Quando uma sub-expressão de captura é repetida, o valor capturado
é a substring que correspondeu à iteração final. Por exemplo, depois que
`(tweedle[dume]{3}\s*)+`
tenha correspondido a "tweedledum tweedledee" o valor da substring
capturada é "tweedledee". Porém se houver
sub-expressões de captura aninhadas, os valores de captura
correspondentes podem ter sido definidos em iterações prévias. Por exemplo,
depois que
`/(a|(b))+/`
corresponder a "aba" o valor da segunda substring capturada é
"b".

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
