# Força a coleta de quaisquer ciclos de lixo existentes.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gc-collect-cycles.php

---

# gc\_collect\_cycles

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

gc\_collect\_cycles — Força a coleta de quaisquer ciclos de lixo existentes.

### Descrição

function **gc\_collect\_cycles**(): [int](language.types.integer.md)

Força a coleta de quaisquer ciclos de lixo existentes.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de ciclos coletados.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O valor de retorno não mais inclui strings e recursos que foram indiretamente coletados através dos ciclos. |

### Veja também

- [Coleta de Lixo](features.gc.md)

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
