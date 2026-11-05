# Sub-expressões condicionais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.conditional.php

---

## Sub-expressões condicionais

É possível fazer com que o processo de correspondência obedeça condicionalmente
a uma sub-expressão ou escolha entre duas sub-expressões
alternativas, dependendo do resultado de uma afirmação, ou
se uma sub-expressão de captura anterior correspondeu ou não. As
duas formas possíveis de sub-expressão condicional são

```
(?(condição)expressão-sim)
(?(condição)expressão-sim|expressão-não)
```

Se a condição for satisfeita, a expressão-sim é usada; caso contrário
a expressão-não (se presente) é usada. Se houver
mais que duas alternativas na sub-expressão, ocorrerá um erro
no momento da compilação.

Existem dois tipos de condição. Se o texto entre parênteses
consistir em uma sequência de dígitos, então a
condição será satisfeita se a sub-expressão de captura desse
número tiver correspondido anteriormente. Considere a seguinte expressão,
que contém espaços em branco não significativos para torná-la
mais legível (assumindo que a opção [PCRE\_EXTENDED](reference.pcre.pattern.modifiers.md)
está definida) e para dividi-la em três partes para facilidade de discussão:

```
( \( )? [^()]+ (?(1) \) )
```

A primeira parte corresponde a um parêntese de abertura opcional e,
se esse caractere estiver presente, define-o como a primeira substring
capturada. A segunda parte corresponde a um ou mais caracteres
que não são parênteses. A terceira parte é uma sub-expressão
condicional que testa se o primeiro conjunto de parênteses
corresponde ou não. Se sim, ou seja, se a string começou
com um parêntese de abertura, a condição é **`true`**, e então
a expressão-sim é executada e um parêntese de fechamento é
necessário. Caso contrário, como a expressão-não não está presente, A
sub-expressão não corresponde a nada. Em outras palavras, essa expressão
corresponde a uma sequência de não-parênteses, opcionalmente entre
parênteses.

Se a condição for a string `(R)`, ela será satisfeita se
uma chamada recursiva à expressão ou sub-expressão tiver sido feita. No “nível
superior”, a condição é falsa.

Se a condição não for uma sequência de dígitos ou (R), deverá ser uma
afirmação. Esta pode ser uma afirmação positiva ou negativa que olha para frente
ou que olha para trás. Considere esta expressão, novamente contendo
espaços em branco não significativos e com as duas alternativas na
segunda linha:

```
(?(?=[^a-z]*[a-z])
\d{2}-[a-z]{3}-\d{2} | \d{2}-\d{2}-\d{2} )
```

A condição é uma afirmação que olha para frente positiva que corresponde a
uma sequência opcional de não-letras seguidas por uma letra. Em
outras palavras, testa a presença de pelo menos uma
letra na string. Se for encontrada uma letra, a string é
comparada com a primeira alternativa; caso contrário, será
comparada com o segunda. Esta expressão corresponde a strings em
uma das duas formas dd-aaa-dd ou dd-dd-dd, onde aaa são
letras e dd são dígitos.

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
