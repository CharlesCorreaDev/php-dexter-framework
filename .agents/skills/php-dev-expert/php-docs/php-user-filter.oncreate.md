# Chamado na criação do filtro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/php-user-filter.oncreate.php

---

# php\_user\_filter::onCreate

(PHP 5, PHP 7, PHP 8)

php\_user\_filter::onCreate — Chamado na criação do filtro

### Descrição

public function **php\_user\_filter::onCreate**(): [bool](language.types.boolean.md)

Este método é chamado durante a instanciação do objeto da classe do
filtro. Se o filtro aloca ou inicializa quaisquer outros recursos
(como em um buffer), este é o local a se fazê-lo.

Quando o filtro é instanciado pela primeira vez, e
`filtro->onCreate()` é chamado, um número de propriedades
estará disponível como mostrado na tabela abaixo.

| Propriedade | Conteúdo |
| --- | --- |
| `filtro->filtername` | Uma string contendo o nome com o qual o filtro foi instanciado. Filtros podem ser registrados sob múltiplos nomes ou com caracteres coringas. Use esta propriedade para deverminar que nome foi usado. |
| `filtro->params` | O conteúdo de `params` passado para [stream\_filter\_append()](function.stream-filter-append.md) ou [stream\_filter\_prepend()](function.stream-filter-prepend.md). |
| `filtro->stream` | O recurso de fluxo sendo filtrado. Possivelmente disponível apenas durante chamadas a **filter()** quando o parâmetro `closing` estiver definido para **`false`**. |

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A implementação deste
método deve retornar **`false`** em caso de falha, ou **`true`** em caso de sucesso.

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
