# Âncoras

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.anchors.php

---

## Âncoras

Fora de uma classe de caracteres, no modo padrão de correspondência, o
caractere de circunflexo (`^`) é uma afirmação que
é verdadeira somente se o ponto de correspondência atual estiver no início da
string de entrada. Dentro de uma classe de caracteres, o circunflexo (`^`)
tem um significado completamente diferente (veja abaixo).

O circunflexo (`^`) não precisa ser o primeiro caractere
da expressão se um número de alternativas estiver envolvido, mas
deve ser a primeira coisa em cada alternativa em que aparece
se a expressão acabar correspondendo a esse ramo. Se todas as alternativas
possíveis iniciarem com um circunflexo (`^`), isto é,
se a expressão for restringida a corresponder apenas ao início da string,
é dito que essa é uma expressão "ancorada". Também há outras
construções que podem fazer com que uma expressão seja ancorada.

Um caractere de cifrão (`$`) é uma afirmação que é
**`true`** somente se o ponto atual de correspondência estiver no final da string
de entrada, ou imediatamente antes de um caractere de nova linha que é o último
caractere na string (por padrão). Cifrão (`$`)
não precisa ser o último caractere da expressão se um número de
alternativas estiver envolvido, mas deve ser o último item em qualquer
ramo em que ele aparecer. O cifrão não tem nenhum significado especial em uma
classe de caracteres.

O significado do cifrão pode ser alterado de forma que ele corresponda apenas
ao final da string, configurando-se a opção
[PCRE\_DOLLAR\_ENDONLY](reference.pcre.pattern.modifiers.md)
no momento da compilação ou da correspondência. Isto não afeta a afirmação \Z.

Os significados dos caracteres circunflexo e cifrão são
alterados se a opção
[PCRE\_MULTILINE](reference.pcre.pattern.modifiers.md)
estiver definida. Quando esse é o caso, eles irão corresponder imediatamente após e
imediatamente antes de um caractere "\n" interno, respectivamente, além de
corresponder ao início e ao final da string de entrada. Por exemplo, a
expressão /^abc$/ corresponde à string de entrada "def\nabc" em modo multi-linhas,
mas não em modo de linha única. Consequentemente, expressões que são ancoradas em modo
de linha única porque todos os ramos iniciam com "^" não são ancoradas em
modo multi-linhas. A opção
[PCRE\_DOLLAR\_ENDONLY](reference.pcre.pattern.modifiers.md)
é ignorada se
[PCRE\_MULTILINE](reference.pcre.pattern.modifiers.md) estiver
definida.

Observe que as sequências \A, \Z, e \z podem ser usadas para corresponder ao
início e ao final da string em ambos os modos e, se todos
os ramos de uma expressão iniciarem com \A, ela estará sempre ancorada,
independente se [PCRE\_MULTILINE](reference.pcre.pattern.modifiers.md)
estiver definida ou não.

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
