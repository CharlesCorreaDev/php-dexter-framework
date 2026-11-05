# Sub-expressões

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.subpatterns.php

---

## Sub-expressões

Sub-expressões são delimitadas por parênteses
e podem ser aninhadas. Marcar parte de uma expressão como uma sub-expressão
tem dois objetivos:

1. Localizar um conjunto de alternativas. Por exemplo, a expressão
   `cat(aract|erpillar|)` corresponde a uma das três palavras: "cat",
   "cataract" ou "caterpillar". Sem os parênteses, corresponderia a
   "cataract", "erpillar" ou a uma string vazia.
2. Definir a sub-expressão como um grupo de captura (como definido acima).
   Quando toda a expressão tem correspondência, a parte da string de entrada
   que correspondeu à sub-expressão é passada de volta à função chamadora através
   do argumento *ovector* da função **pcre\_exec()**.
   Parênteses de abertura são contados da esquerda para a direita (iniciando de 1) para
   obter os números dos grupos de captura.

Por exemplo, se a string "the red king" é correspondida pela
expressão
`the ((red|white) (king|queen))`
os grupos de captura são "red king", "red" e "king",
e são numerados com 1, 2 e 3.

O fato dos parênteses terem duas funções nem
sempre ajuda. Frequentemente é necessária uma sub-expressão de
agrupamento sem a necessidade de captura. Se um parêntese
de abertura for seguido por "?:", a sub-expressão não
faz nenhuma captura, e não é contado ao computar o
número de sub-expressões de captura subsequentes. Por exemplo,
se a string "the white queen" é correspondida pela
expressão
`the ((?:red|white) (king|queen))`
as substrings capturadas são "white queen" e "queen", e
são numeradas com 1 e 2. O número máximo de subtrings capturadas
é 65535. Porém, pode não ser possível compilar expressões deste tamanho,
dependendo das opções de configuração da biblioteca libpcre.

Como um atalho conveniente, se qualquer configuração de opção for
necessária no início de uma sub-expressão sem captura, as
letras de opções podem aparecer entre o "?" e o ":". Assim,
as duas expressões

```
(?i:saturday|sunday)
(?:(?i)saturday|sunday)
```

correspondem exatamente ao mesmo conjunto de strings. Como os ramos
alternativos são testados da esquerda para a direita, e as opções não são
redefinidas até que se alcance o final da sub-expressão, uma configuração
de opção em um ramo não afeta ramos subsequentes, portanto
as expressões acima correspondem a "SUNDAY" e também a "Saturday".

É possível nomear uma sub-expressão usando a sintaxe
`(?P<nome>expressão)`. Esta sub-expressão será então
indexada no array de correspondências pela sua posição numérica normal e
também pelo nome. Há duas sintaxes alternativas:
`(?<nome>expressão)` e `(?'nome'expressão)`.

A partir do PHP 8.4.0, que inclui o PCRE2 10.44, o comprimento máximo de um
nome de sub-expressão é 128 caracteres; anteriormente era 32 caracteres.

Algumas vezes é necessário ter correspondências múltiplas, mas não ter
sub-grupos alternados em uma expressão regular. Normalmente, cada um destes receberia
seu próprio número de referência embora apenas um seria
possivelmente correspondido. Para contornar isto, a sintaxe `(?|` permite
ter números duplicados. Considere o caso abaixo, onde a expressão regular corresponde à
string `Sunday`:

```
(?:(Sat)ur|(Sun))day
```

Aqui, `Sun` é armazenado na referência 2, enquanto que
a referência 1 está vazia. Corresponder `Saturday` gera
a referência 1 para `Sat` enquanto que a referência 2
não existirá. Modificar a expressão usando `(?|` corrige
este problema:

```
(?|(Sat)ur|(Sun))day
```

Usando esta expressão, tanto `Sun` quanto `Sat`
seriam armazenadas na referência 1.

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
