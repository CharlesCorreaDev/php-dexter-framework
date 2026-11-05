# Estabelece a hora atual consultando o kernel, atualizando o horário
  retornado por Ev::now no progresso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.nowupdate.php

---

# Ev::nowUpdate

(PECL ev >= 0.2.0)

Ev::nowUpdate — Estabelece a hora atual consultando o kernel, atualizando o horário
retornado por Ev::now no progresso

### Descrição

final
public
static
function **Ev::nowUpdate**(): [void](language.types.void.md)

Estabelece o horário atual consultando o kernel, atualizando o horário
retornado por
[Ev::now()](ev.now.md)
no progresso. Esta é uma operação custosa e geralmente é feita
automaticamente dentro
de [Ev::run()](ev.run.md).

Este método raramente é útil, mas quando algum retorno de chamada de evento é executado por um tempo
muito longo sem entrar no laço de eventos, atualizar
a consideração de *libev*
do horário atual é uma boa ideia.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [Ev::now()](ev.now.md) - Retorna o horário em que a última iteração do laço de eventos padrão
  foi iniciada

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
