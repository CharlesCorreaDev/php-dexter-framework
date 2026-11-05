# Retorna o número de resultados da última pesquisa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-hits.php

---

# yaz\_hits

(PHP 4 >= 4.0.1, PECL yaz >= 0.9.0)

yaz\_hits — Retorna o número de resultados da última pesquisa

### Descrição

function **yaz\_hits**([resource](language.types.resource.md) `$id`, [array](language.types.array.md) `&$searchresult` = ?): [int](language.types.integer.md)

**yaz\_hits()** retorna o número de resultados da última
pesquisa.

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`searchresult`
:   Array de resultados para informações detalhadas sobre os resultados da pesquisa.

### Valor Retornado

Retorna o número de resultados da última pesquisa ou 0 se nenhuma pesquisa foi
realizada.

O array de resultados da pesquisa (se fornecido) contém informações que
são retornadas por um servidor Z39.50 no formato SearchResult-1
como parte de uma resposta de pesquisa.
O formato SearchResult-1 pode ser usado para obter informações
sobre contagens de acertos para várias partes da consulta (subconsulta).
Em particular, é possível obter contagens de acertos para os termos de pesquisa
individuais em uma consulta. As informações para a primeira
subconsulta estão em $array[0], para a segunda subconsulta em $array[1] e assim por diante.

**searchresult members**

| Elemento | Descrição |
| --- | --- |
| `id` | ID2 da subconsulta (string) |
| `count` | Contagem de resultados / acertos (inteiro) |
| `subquery.term` | Termo da subconsulta (string) |
| `interpretation.term` | Termo da subconsulta interpretado (string) |
| `recommendation.term` | Termo da subconsulta recomendado (string) |

> **Nota**:
>
> O recurso SearchResult requer PECL YAZ 1.0.5
> ou posterior e YAZ 2.1.9 ou posterior.

> **Nota**:
>
> Muito poucas implementações do Z39.50 suportam o recurso SearchResult.

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
