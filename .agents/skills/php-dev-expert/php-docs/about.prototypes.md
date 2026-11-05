# Como ler uma definição de função (protótipo)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/about.prototypes.php

---

## Como ler uma definição de função (protótipo)

Cada função no manual é documentada para uma referência rápida. Saber como
ler e entender o texto tornará a aprendizagem do PHP
muito mais fácil. Mais do que simplesmente estudar exemplos ou copiar/colar, todos deveriam
saber como ler as definições de funções (protótipos). Vamos começar:

> **Nota**:
> **Pré-requisito: Entendimento básico de [tipos](language.types.md)**  
>
> Mesmo o PHP sendo uma linguagem fracamente tipada, é importante ter um
> entendimento básico dos [tipos](language.types.md) pois
> eles têm um importante significado.

Definições das funções nos dizem que
tipo de valor é [retornado](functions.returning-values.md).
Vamos usar a definição da função [strlen()](function.strlen.md) como nosso primeiro exemplo:

```
strlen

(PHP 4, PHP 5, PHP 7)
strlen -- Obtém o tamanho da string

Descrição
strlen ( string $string ) : int

Retorna o tamanho da string dada.
```

**Explicação de uma definição de função**

| Parte | Descrição |
| --- | --- |
| strlen | Nome da função. |
| (PHP 4, PHP 5, PHP 7) | strlen() está disponível em todas as versões do PHP 4, 5 e 7 |
| ( string $string ) | O primeiro (e neste caso, o único) parâmetro/argumento para esta função é chamado `string`, e é uma [string](language.types.string.md). |
| int | Tipo do valor que esta função retorna, que é um [int](language.types.integer.md) (isto é, o comprimento de uma string é medido em números). |

Poderíamos reescrever a definição da função acima de uma maneira genérica:

```
      nome da função    ( tipo do parâmetro   nome do parâmetro ) : tipo retornado
```

Muitas funções recebem múltiplos parâmetros, tais como a função [in\_array()](function.in-array.md).
Seu protótipo segue abaixo:

```
      in_array ( mixed $needle, array $haystack , bool $strict = false ) : bool
```

O que isso significa? in\_array() retorna um valor
[booleano](language.types.boolean.md), **`true`** em caso de
sucesso (se `needle` foi encontrado em
`haystack`) ou **`false`** em caso de falha (se
`needle` não foi encontrado em
`haystack`). O primeiro parâmetro é chamado
`needle` e pode de ser de vários
[tipos](language.types.md) diferentes, por isso nós o chamamos
"*mixed*" (misto). Esse `needle` mixed
(o que nós estamos procurando) pode ser tanto um valor escalar (string, inteiro,
ou [float](language.types.float.md)) ou um
[array](language.types.array.md).
`haystack` (o array onde nós estamos procurando) é o
segundo parâmetro. O terceiro parâmetro *opcional* é
chamado `strict`. Todos os parâmetros opcionais têm valores
padrão (default). Se o valor padrão é desconhecido, então é mostrado um `?`. O exemplo
diz que o valor padrão do parâmetro `strict` é o
booleano **`false`**. Veja a página do manual de cada função para detalhes de
como elas funcionam.

Além do mais o símbolo & (ampersand, e comercial) antes de um parâmetro de função
permite ao parâmetro ser passado por [referência](language.references.pass.md), como no exemplo abaixo:

```
       preg_match ( string $pattern , string $subject , array &$matches = null,
       int $flags = 0 , int $offset = 0 ) : int|false
```

Neste exemplo podemos ver que o terceiro parâmetro opcional `&$matches` será
passado por referência.

Existem também funções com informações de versões do PHP mais complexas. Tome como exemplo
[html\_entity\_decode()](function.html-entity-decode.md):

```
(PHP 4 >= 4.3.0, PHP 5, PHP 7)
```

Isto significa que esta função só está disponível
a partir da versão PHP 4.3.0.

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
