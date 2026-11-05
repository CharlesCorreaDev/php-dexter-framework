# Modificadores de Expressão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reference.pcre.pattern.modifiers.php

---

# Modificadores de Expressão

Os possíveis modificadores PCRE atuais estão listados abaixo. Os nomes
entre parênteses referem-se a nomes PCRE internos para esses modificadores.
Espaços e novas linhas são ignorados nos modificadores, outros caracteres causam erro.

> *i* (`PCRE_CASELESS`)
> :   Se este modificador estiver definido, as letras na expressão corresponderão
>     às letras maiúsculas e minúsculas.
>
> *m* (`PCRE_MULTILINE`)
> :   Por padrão, o PCRE trata a string de entrada como
>     uma única "linha" de caracteres (mesmo que na verdade contenha
>     vários caracteres de nova linha). O metacaractere "início de linha" (^)
>     corresponde apenas ao início da string, enquanto que o metacaractere
>     "fim de linha" ($) corresponde apenas ao final da
>     string ou antes de um caractere final de nova linha (a menos
>     que o modificador *D* esteja definido). O comportamento
>     é o mesmo no Perl.
>
>     Quando este modificador é definido, as construções "início de linha" e
>     "fim de linha" correspondem imediatamente após ou imediatamente
>     antes de qualquer caractere de nova linha na string de entrada, respectivamente, bem
>     como no início e no final. Isso é equivalente ao
>     modificador /m do Perl. Se não houver caracteres "\n" em uma
>     string de entrada ou nenhuma ocorrência de ^ ou $ em uma expressão,
>     a configuração desse modificador não terá efeito.
>
> *s* (`PCRE_DOTALL`)
> :   Se este modificador estiver definido, um metacaractere de ponto na expressão
>     corresponderá a todos os caracteres, incluindo os de nova linha. Sem ele,
>     os de nova linha são excluídas. Este modificador é equivalente ao
>     modificador /s do Perl. Uma classe negativa como [^a] sempre corresponde a
>     um caractere de nova linha, independente da configuração deste
>     modificador.
>
> *x* (`PCRE_EXTENDED`)
> :   Se este modificador estiver definido, os caracteres de espaço em branco de dados na
>     expressão serão totalmente ignorados, exceto quando escapados ou dentro de uma
>     classe de caracteres, e os caracteres entre um # sem escape
>     fora de uma classe de caracteres e o próximo caractere de nova linha,
>     inclusive, também serão ignorados. Isto é equivalente ao modificador
>     /x do Perl e torna possível incluir comentários dentro de
>     padrões complexos. Observe, entretanto, que isso se aplica apenas
>     a caracteres de dados. Os caracteres de espaço em branco nunca podem aparecer
>     em sequências de caracteres especiais em uma expressão, por exemplo,
>     dentro da sequência (?( que introduz uma sub-expressão
>     condicional.
>
> *A* (`PCRE_ANCHORED`)
> :   Se este modificador estiver definido, a expressão é forçada a ser
>     "ancorada", ou seja, é restrita a corresponder apenas ao
>     início da string que está sendo pesquisada (a "string
>     de entrada"). Este efeito também pode ser alcançado por construções
>     apropriadas na própria expressão, que é a única maneira de
>     fazer isso em Perl.
>
> *D* (`PCRE_DOLLAR_ENDONLY`)
> :   Se esse modificador estiver definido, um metacaractere de cifrão na expressão
>     corresponderá apenas ao final da string de entrada. Sem esse
>     modificador, um cifrão também corresponde imediatamente antes do caractere
>     final se for um de nova linha (mas não antes de qualquer outro
>     de nova linha). Este modificador é ignorado se o modificador *m*
>     estiver definido. Não há equivalente a este modificador no
>     Perl.
>
> *S*
> :   Quando uma expressão vai ser usada várias vezes, vale a
>     pena gastar mais tempo analisando-a para agilizar
>     o tempo de correspondência. Se este modificador estiver definido,
>     esta análise extra será executada. Atualmente, estudar uma
>     expressão é útil apenas para expressões não ancoradas que não
>     possuem um caractere inicial único fixo.
>     A partir do PHP 7.3.0, este modificador não tem efeito.
>
> *U* (`PCRE_UNGREEDY`)
> :   Este modificador inverte a "ganância" dos quantificadores para
>     que eles não sejam gananciosos por padrão, mas se tornem gananciosos se
>     seguidos por `?`. Não é compatível com o Perl. Também pode
>     ser definido por uma [configuração
>     de modificador dentro da expressão](regexp.reference.internal-options.md)
>     `(?U)` ou por um ponto de interrogação atrás de um quantificador
>     (por exemplo, `.*?`).
>
>     > **Nota**:
>     >
>     > Geralmente não é possível corresponder mais do que [pcre.backtrack\_limit](pcre.configuration.md#ini.pcre.backtrack-limit)
>     > caracteres no modo não ganancioso.
>
> *X* (`PCRE_EXTRA`)
> :   Este modificador ativa funcionalidades adicionais do PCRE que
>     são incompatíveis com o Perl. Qualquer barra invertida em uma expressão
>     seguida por uma letra sem significado especial causa
>     um erro, reservando assim essas combinações para expansão
>     futura. Por padrão, como no Perl, uma barra invertida seguida por uma
>     letra sem significado especial é tratada como um literal.
>     Atualmente não há outras características controladas por este
>     modificador.
>
> *J* (`PCRE_INFO_JCHANGED`)
> :   A configuração de opção interna (?J) altera a opção local `PCRE_DUPNAMES`.
>     Permite nomes duplicados para sub-expressões.
>     A partir do PHP 7.2.0, `J` também é suportado como modificador.
>
> *u* (`PCRE_UTF8`)
> :   Este modificador ativa funcionalidades adicionais do PCRE que
>     são incompatíveis com o Perl. As strings de expressão e de entrada são
>     tratadas como UTF-8. Uma string de entrada inválida fará com que a função preg\_\*
>     não corresponda a nada; uma expressão inválida irá causar um erro de
>     nível E\_WARNING. Sequências UTF-8 de cinco e seis octetos são
>     consideradas inválidas.
>
> *n* (`PCRE_NO_AUTO_CAPTURE`)
> :   Este modificador torna grupos `(xyz)` simples não capturáveis.
>     Somente grupos nomeados como `(?<nome>xyz)` serão capturáveis.
>     Isso afeta apenas quais grupos estão sendo capturados, ainda é possível usar
>     referências numeradas de sub-expressões e o array de correspondências ainda
>     conterá resultados numerados. Disponível a partir do PHP 8.2.0.
>
> *r* (`PCRE2_EXTRA_CASELESS_RESTRICT`)
> :   Quando *u* (`PCRE_UTF8`) e *i* (`PCRE_CASELESS`)
>     estão ativos, este modificador evita correspondência entre caracteres ASCII e não-ASCII.
>
>     Por exemplo, `preg_match('/\x{212A}/iu', "K")` corresponde ao símbolo de Kelvin `K` (U+212A).
>     Quando *r* é usado (`preg_match('/\x{212A}/iur', "K")`), não há correspondência.
>
>     Disponível a partir do PHP 8.4.0.

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
