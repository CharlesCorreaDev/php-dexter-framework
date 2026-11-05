# Classes de caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.character-classes.php

---

## Classes de caracteres

Uma abertura de colchete introduz uma classe de caracteres,
terminada por um fechamento de colchete. Um colchete de
fechamento em si não é especial. Se um colchete de
fechamento for requerido como membro da classe, ele deve ser
o primeiro caractere na classe (após um circunflexo
inicial, se presente) ou escapado com uma barra invertida.

Uma classe de caracteres corresponde a um único caractere na string;
o caractere precisa estar no conjunto de caracteres definido pela
classe, a menos que o primeiro caractere na classe seja um
circunflexo, que nesse caso o caractere na string não pode estar no
conjunto definido pela classe. Se um circunflexo for
requerido como membro da classe, é preciso garantir que ele não seja o
primeiro caractere, ou que seja escapado com uma barra invertida.

Por exemplo, a classe de caracteres [aeiou] corresponde a qualquer vogal minúscula
sem acento, enquanto que [^aeiou] corresponde a qualquer caractere que não seja uma
vogal minúscula sem acento. Observe que um circunflexo é apenas uma
notação conveniente para especificar os caracteres que estão na
classe enumerando aqueles que não estão. Não é uma
afirmação: ela ainda consome um caractere da string
de entrada, e falha se o ponteiro atual estiver no final
da string.

Quando uma correspodência insensível a maiúsculas/minúsculas é definida, qualquer letra
em uma classe representa tanto a forma maiúscula quanto a
minúscula, então, por exemplo, uma classe [aeiou] insensível à forma corresponde tanto a "A"
quanto a "a", e uma classe [^aeiou] insensível à forma não corresponde a
"A", enquanto que um versão sensível à forma corresponderia.

Um caractere de nova linha nunca é tratado de modo especial em
classes de caractere, independente da configuração da opção [PCRE\_DOTALL](reference.pcre.pattern.modifiers.md)
ou da opção [PCRE\_MULTILINE](reference.pcre.pattern.modifiers.md).
Uma classe como [^a] sempre corresponderá a uma nova linha.

O caractere hífen (sinal de subtração) pode ser usado para especificar uma faixa
de caracteres em uma classe. Por exemplo, [d-m]
corresponde a qualquer letra entre d e m, inclusive. Se um hífen
literal for requerido na classe, ele precisa ser escapado com uma
barra invertida ou aparecer em uma posição onde não possa ser
confundido com um indicador de faixa, tipicamente como o primeiro ou último
caractere na classe.

Não é possível ter o caractere literal "]" como o
caractere final de uma faixa. Uma expressão como [W-]46] é
interpretada como uma classe de dois caracteres ("W" e "-")
seguida pela string literal "46]", portanto corresponderia a "W46]" ou
"-46]". Entretanto, se o "]" for escapado com uma barra invertida ele
será interpretado como o final da faixa. Assim, [W-\]46] é
interpretado como uma classe única contendo uma faixa única seguida por
dois caracteres separados. A representação octal ou hexadecimal
de "]" também pode ser usada para finalizar uma faixa.

As faixas operam na sequência da tabela ASCII. Elas também podem ser
usadas para caracteres especificados numericamente, por exemplo
[\000-\037]. Se uma faixa que inclui letras for usada quando uma
correspondência insensível a maiúsculas/minúsculas estiver definida, ela corresponderá às
letras em ambas as formas. Por exemplo, [W-c] é equivalente a
[][\^\_`wxyzabc], correspondida de maneira insensível à forma, e se tabelas
de caracteres para a localidade "pt-BR" estiverem em uso, [\xc0-\xc3] correspondem
à letra A com acentos tanto em maiúsuculas quanto em minúsculas.

Os tipos de caractere \d, \D, \s, \S, \w e \W também podem
aparecer em uma classe de caracteres e adicionar à classe os caractares
aos quais eles correspondem. Por exemplo, [\dABCDEF] corresponde a qualquer
dígito hexadecimal. Um circunflexo pode convenientemente ser usado
com os tipos de caracteres maiúsculos para especificar um conjunto
mais restrito de caracteres que a correspondência ao tipo de minúsculas.
Por exemplo, a classe [^\W\_] corresponde a qualquer letra ou dígito,
mas não ao sublinhado "\_".

Todos os caracteres não alfanuméricos que não sejam \, -, ^ (no
início) e o terminador ] não são especiais em classes
de caracteres, mas não faz mal agum se forem escapados. O terminador
de expressão é sempre especial e precisa ser escapado quando usado
dentro de uma expressão.

O Perl suporta a notação POSIX para classes de caracteres. Ela usa nomes
envolvidos por `[:` e `:]` dentro
de colchetes. O PCRE também
suporta esta notação. Por exemplo, `[01[:alpha:]%]`
corresponde a "0", "1", qualquer caractere alfabético ou "%". Os nomes de classe
suportados são:

**Classes de caracteres**

|  |  |
| --- | --- |
| `alnum` | letras e dígitos |
| `alpha` | letras |
| `ascii` | caracteres com códigos 0 - 127 |
| `blank` | espaço ou tabulação somente |
| `cntrl` | caracteres de controle |
| `digit` | dígitos decimais (o mesmo que \d) |
| `graph` | caracteres imprimíveis, excluindo o espaço |
| `lower` | letras minúsculas |
| `print` | caracteres imprimíveis, incluindo o espaço |
| `punct` | caracteres imprimíveis, excluindo letras e dígitos |
| `space` | espaço (não é idêntico a \s) |
| `upper` | letras maiúsculas |
| `word` | caracteres de "palavra" (o mesmo que \w) |
| `xdigit` | dígitos hexadecimais |

Os caracteres da classe `space` são: tabulação horizontal (9), nova linha (10), tabulação vertical (11), alimentação de formulário (12), retorno de carro (13),
e espaço (32). Observe que esta lista inclui o caractere de tabulação vertical (código
11). Isso faz com que "space" seja diferente de `\s`, que não inclui a tabulação vertical (para
compatibilidade com o Perl).

O nome `word` é uma extensão do Perl, e `blank` é uma extensão GNU
do Perl 5.8. Uma outra extensão do Perl é a negação, que é indicada
por um caractere `^` após o caractere de dois-pontos. Por exemplo,
`[12[:^digit:]]` corresponde a "1", "2" ou qualquer não-dígito.

No modo UTF-8, caracteres com valores maiores que 127 não correspondem a nenhuma
das classes de caracteres POSIX.
A partir da libpcre 8.10 algumas classes de caracteres são modificadas para usar
proprieadades de caracteres Unicode, e nesse caso a restrição mencionada não
se aplica. Refira-se ao [» manual PCRE(3)](https://www.pcre.org/pcre.txt)
para detalhes.

Propriedades de caracteres Unicode podem aparecer dentro de uma classe de caracteres. Elas não
podem ser parte de uma faixa. O caractere hífen após uma classe de caractere
Unicode irá corresponder literalmente. Tentar finalizar uma faixa com uma propriedade
de caractere Unicode resultará em um alerta.

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
