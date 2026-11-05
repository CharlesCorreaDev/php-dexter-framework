# Diferenças para o Perl

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reference.pcre.pattern.differences.php

---

# Diferenças para o Perl

As diferenças descritas aqui referem-se ao Perl 5.005.

1. Por padrão, um caractere de espaço em branco é qualquer caractere que
   a função isspace() da biblioteca C reconhece, embora seja
   possível compilar PCRE com tabelas de tipos de caracteres
   alternativas. Normalmente isspace() corresponde a espaço, alimentação de formulário,
   nova linha, retorno de carro, tabulação horizontal e tabulação vertical. Perl 5 não
   inclui mais a tabulação vertical em seu conjunto de caracteres de espaço em branco.
   O escape \v que esteve na documentação do Perl por
   muito tempo nunca foi de fato reconhecido. No entanto, o caractere
   em si foi tratado como espaço em branco pelo menos até a versão 5.002.
   Na 5.004 e na 5.005, ele não corresponde a \s.
2. O PCRE não permite quantificadores repetidos em afirmações
   antecipadas. O Perl permite isso, mas eles não significam o que
   se imagina. Por exemplo, (?!a){3} não afirma que os
   próximos três caracteres não são "a". Apenas afirma que o
   próximo caractere não é “a” três vezes.
3. A captura de sub-expressões que ocorrem dentro de afirmações
   antecipadas negativas são contadas, mas suas entradas no
   vetor de deslocamentos nunca são definidas. O Perl define suas variáveis ​​
   numéricas a partir de quaisquer expressões que sejam correspondidas antes que a
   afirmação falhe em corresponder a algo (deste modo tendo sucesso), mas
   apenas se a afirmação antecipada negativa contiver apenas uma
   ramificação.
4. Embora caracteres zero binários sejam suportados na string de entrada,
   eles não são permitidos na string da expressão (antes do PHP 8.2) porque ela é passada como uma
   string C normal, terminada por zero. A sequência de escape "\x00" pode
   ser usada na expressão para representar um zero binário. A partir do PHP 8.2, caracteres NUL \0 são suportados na string da expressão regular.
5. As seguintes sequências de escape do Perl não são suportadas:
   \l, \u, \L, \U. Na verdade, eles são implementados pelo
   tratamento geral de strings do Perl e não fazem parte de seu
   mecanismo de correspondência de expressões.
6. A asserção Perl \G não é suportada porque não é
   relevante para correspondências de expressões únicas.
7. Obviamente, a PCRE não suporta a construção (?{code}) e (??{code}).
   No entanto, há suporte para expressões recursivas.
8. No momento em que este artigo foi escrito, havia algumas curiosidades no Perl
   5.005\_02 relacionadas às configurações de strings capturadas
   quando parte de uma expressão é repetida. Por exemplo, corresponder
   "aba" com a expressão /^(a(b)?)+$/ define $2 como o valor
   "b", mas corresponder "aabbaa" com /^(aa(bb)?)+$/ deixa $2
   indefinido. No entanto, se a expressão for alterada para
   /^(aa(b(b))?)+$/ então $2 (e $3) serão definidos.
   No Perl 5.004, $2 é definido em ambos os casos, e isso também é **`true`**
   na PCRE. Se no futuro o Perl mudar para um estado consistente
   diferente, a PCRE poderá mudar para seguir o mesmo comportamento.
9. Outra discrepância ainda não resolvida é que no Perl
   5.005\_02 o padrão /^(a)?(?(1)a|b)+$/ corresponde à string
   "a", enquanto que na PCRE isso não acontece. No entanto, tanto no Perl
   quanto na PCRE, /^(a)?a/ correspondido com "a" deixa $1 indefinido.
10. PCRE fornece algumas extensões para os recursos de expressão
    regular Perl:
    1. Embora as afirmações retroativas devam corresponder a strings de comprimento
       fixo, cada ramificação alternativa de uma afirmação retroativa
       pode corresponder a um comprimento diferente de string. O Perl 5.005 exige
       que todas tenham o mesmo comprimento.
    2. Se [PCRE\_DOLLAR\_ENDONLY](reference.pcre.pattern.modifiers.md)
       estiver definida e [PCRE\_MULTILINE](reference.pcre.pattern.modifiers.md)
       não estiver definida, o metacaractere $ corresponderá apenas ao final da
       string.
    3. Se [PCRE\_EXTRA](reference.pcre.pattern.modifiers.md)
       estiver definida, uma barra invertida seguida por uma letra sem significado especial
       será uma falha.
    4. Se [PCRE\_UNGREEDY](reference.pcre.pattern.modifiers.md) estiver
       definida, a ganância dos quantificadores de repetição é invertida,
       ou seja, por padrão eles não serão gananciosos, mas se seguidos de um
       ponto de interrogação eles serão.

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
