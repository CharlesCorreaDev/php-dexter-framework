# API funcional

> **Fonte / Source:** https://www.php.net/manual/pt_BR/functional.parallel.php

---

# API funcional

A API [parallel\Runtime](class.parallel-runtime.md) fornece um grande grau de controle para o programador PHP avançado e para aqueles intimamente familiarizados com a escrita de aplicativos que usam
simultaneidade paralela.

A API funcional fornece menos controle em troca da capacidade de tomar decisões para o programador:

- todos os tempos de execução em execução são inicializados de forma idêntica
- o agendamento é determinado pela API, não pelo programador

[parallel\run()](parallel.run.md) fornece a garantia de que a tarefa começará a ser executada em paralelo assim que permitido pelas restrições de hardware e sistema operacional, sem
criar tempos de execução desnecessários. Para a maioria das aplicações, a API funcional deve ser preferida.

## Índice

- [parallel\bootstrap](parallel.bootstrap.md) — Inicialização
- [parallel\run](parallel.run.md) — Execução

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
