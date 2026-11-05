# Configuração de opções dentro da expressão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.internal-options.php

---

## Configuração de opções dentro da expressão

As configurações de [PCRE\_CASELESS](reference.pcre.pattern.modifiers.md),
[PCRE\_MULTILINE](reference.pcre.pattern.modifiers.md),
[PCRE\_DOTALL](reference.pcre.pattern.modifiers.md),
[PCRE\_UNGREEDY](reference.pcre.pattern.modifiers.md),
[PCRE\_EXTRA](reference.pcre.pattern.modifiers.md),
[PCRE\_EXTENDED](reference.pcre.pattern.modifiers.md)
e PCRE\_DUPNAMES podem ser alteradas de dentro da expressão através de
uma sequência de letras de opção do Perl envolvidas entre "(?" e
")". As letras de opções são:

**Letras de opções internas**

|  |  |
| --- | --- |
| `i` | para [PCRE\_CASELESS](reference.pcre.pattern.modifiers.md) |
| `m` | para [PCRE\_MULTILINE](reference.pcre.pattern.modifiers.md) |
| `s` | para [PCRE\_DOTALL](reference.pcre.pattern.modifiers.md) |
| `x` | para [PCRE\_EXTENDED](reference.pcre.pattern.modifiers.md) |
| `U` | para [PCRE\_UNGREEDY](reference.pcre.pattern.modifiers.md) |
| `X` | para [PCRE\_EXTRA](reference.pcre.pattern.modifiers.md) (não mais suportada a partir do PHP 7.3.0) |
| `J` | para [PCRE\_INFO\_JCHANGED](reference.pcre.pattern.modifiers.md) |

Por exemplo, (?im) define uma correspondência insensível a maiúsculas/minúsculas, com multi-linhas. Também
é possível remover estas opções precendendo a letra
com um hífen, e combinar definição com remoção como em
(?im-sx), que define [PCRE\_CASELESS](reference.pcre.pattern.modifiers.md) e
[PCRE\_MULTILINE](reference.pcre.pattern.modifiers.md)
enquanto remove [PCRE\_DOTALL](reference.pcre.pattern.modifiers.md) e
[PCRE\_EXTENDED](reference.pcre.pattern.modifiers.md).
Se uma letra aparecer tanto antes quanto depois do
hífen, a opção é removida.

Quando uma mudança de opção ocorre no nível mais alto (isto é, não ocorre dentro
de parênteses de sub-expressão), a mudança se aplica ao restante da
expressão que se segue. Assim, `/ab(?i)c/` corresponde apenas a "abc"
e "abC".

Se uma mudança de opção ocorre dentro de uma sub-expressão, o efeito
é diferente. Isto é uma mudança de comportamento no Perl 5.005.
Uma mudança de opção dentro de uma sub-expressão afeta somente aquela parte
da sub-expressão que a segue, assim
`(a(?i)b)c`
corresponde a "abc" e "aBc" e nenhuma outra string (assumindo que [PCRE\_CASELESS](reference.pcre.pattern.modifiers.md) não seja
usada). Por este meio, opções podem ser usadas para ter configurações diferentes em
partes diferentes da sub-expressão. Qualquer mudança feita em uma alternativa
é carregada nos ramos subsequentes dentro da mesma sub-expressão. Por
exemplo,
`(a(?i)b|c)`
corresponde a "ab", "aB", "c" e "C", embora quando corresponde a
"C", o primeiro ramo é abandonado antes da definição da opção.
Isto porque os efeitos de configurações de opções acontecem em
tempo de compilação. Haveria comportamento muito estranho caso não fosse desta maneira.

As opções específicas do PCRE [PCRE\_UNGREEDY](reference.pcre.pattern.modifiers.md) e
[PCRE\_EXTRA](reference.pcre.pattern.modifiers.md) podem
ser alteradas da mesma forma que as compatíveis com o Perl,
usando os caracteres U e X respectivamente. A opção (?X)
é especial pelo fato de que deve sempre ocorrer na expressão
antes de qualquer recurso adicional que ela ativa,
mesmo quando está no nível mais alto. É melhor quando colocada no início.

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
