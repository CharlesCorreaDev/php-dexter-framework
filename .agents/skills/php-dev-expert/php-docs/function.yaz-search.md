# Prepara para uma busca

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-search.php

---

# yaz\_search

(PHP 4 >= 4.0.1, PECL yaz >= 0.9.0)

yaz\_search — Prepara para uma busca

### Descrição

function **yaz\_search**([resource](language.types.resource.md) `$id`, [string](language.types.string.md) `$type`, [string](language.types.string.md) `$query`): [bool](language.types.boolean.md)

**yaz\_search()** prepara uma busca na conexão
fornecida.

Assim como [yaz\_connect()](function.yaz-connect.md), esta função não é bloqueante e
apenas prepara uma pesquisa a ser executada posteriormente quando
[yaz\_wait()](function.yaz-wait.md) for chamada.

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`type`
:   Este parâmetro representa o tipo de consulta - apenas `"rpn"`
    é suportado atualmente, caso em que o terceiro argumento especifica uma consulta do Tipo 1
    na notação de consulta prefixada.

`query`
:   A consulta RPN é uma representação textual da consulta Tipo 1, conforme
    definida pelo padrão Z39.50. No entanto, na representação textual
    usada pelo YAZ, é utilizada uma notação de prefixo, ou seja, o operador
    precede os operandos. A string de consulta é uma sequência de tokens onde
    espaços em branco são ignorados, a menos que estejam entre aspas duplas. Tokens que começam
    com um caractere arroba (`@`) são considerados operadores,
    caso contrário, são tratados como termos de pesquisa.

    **Operadores RPN**

    | Construção | Descrição |
    | --- | --- |
    | `@and` consulta1 consulta2 | intersecção de consulta1 e consulta2 |
    | `@or` consulta1 consulta2 | união de consulta1 e consulta2 |
    | `@not` consulta1 consulta2 | consulta1 e não consulta2 |
    | `@set` nome | referência de conjunto de resultados |
    | `@attrset` consulta de definição | especifica definição de atributo para a consulta. Esta construção é permitida somente uma vez - no início da consulta completa |
    | `@attr` [set] tipo=valor consulta | aplica atributo à consulta. O tipo e o valor são inteiros especificando o tipo e o valor do atributo, respectivamente. O conjunto, se fornecido, especifica o conjunto de atributos. |

    Pode-se encontrar informações sobre atributos no site
    [» Z39.50 Maintenance
    Agency](https://www.loc.gov/z3950/agency/defns/bib1.html).

    > **Nota**:
    >
    > Se desejar usar uma notação mais amigável,
    > use o analisador CCL - funções [yaz\_ccl\_conf()](function.yaz-ccl-conf.md) e
    > [yaz\_ccl\_parse()](function.yaz-ccl-parse.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplos de consulta**

Pode-se pesquisar por termos simples, como este:

```
computer
```

que corresponde a documentos onde existe a ocorrência de "computer". Nenhum atributo é
especificado.

A consulta

```
"knuth donald"
```

corresponde a documentos onde "knuth donald" ocorre (desde que o
servidor suporte pesquisa de frase).

Esta consulta aplica dois atributos para a mesma frase.

@attr 1=1003 @attr 4=1 "knuth donald"

O primeiro atributo é do tipo 1 (uso Bib-1), o valor do atributo é 1003
(Autor).
O segundo atributo é do tipo 4 (estrutura), o valor é 1 (frase),
portanto, deve corresponder a documentos em que Donald Knuth é o autor.

A consulta

```
@and @or a b @not @or c d e
```

ficaria em notação infixa como `(a or b) and ((c or d) not
e)`.

Outra, mais complexa:

```
@attrset gils @and @attr 1=4 art @attr 1=2000 company
```

A consulta como um todo utiliza o conjunto de atributos GILS. A consulta corresponde a
documentos em que `art` ocorre no título (GILS,BIB-1)
e em que `company` ocorre como Distribuidor (GILS).

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
