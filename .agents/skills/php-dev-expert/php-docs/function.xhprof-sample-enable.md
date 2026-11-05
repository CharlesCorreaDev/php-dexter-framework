# Inicia o perfilador do XHProf no modo de amostragem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xhprof-sample-enable.php

---

# xhprof\_sample\_enable

(PECL xhprof >= 0.9.0)

xhprof\_sample\_enable — Inicia o perfilador do XHProf no modo de amostragem

### Descrição

function **xhprof\_sample\_enable**(): [void](language.types.void.md)

Inicia a criação de perfil no modo de amostragem, que é uma versão mais leve
de [xhprof\_enable()](function.xhprof-enable.md). O intervalo de amostragem é
de 0.1 segundo, e as amostras registram a pilha completa de chamadas de função. O
principal caso de uso é quando uma menor sobrecarga é necessária ao realizar
monitoramento e diagnóstico de desempenho.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`null`**

### Veja também

- [xhprof\_sample\_disable()](function.xhprof-sample-disable.md) - Interrompe o perfilador de amostra xhprof
- [xhprof\_enable()](function.xhprof-enable.md) - Inicia o perfilador xhprof
- [memory\_get\_usage()](function.memory-get-usage.md) - Retorna a quantidade de memória alocada para o PHP
- [getrusage()](function.getrusage.md) - Obtém os usos atuais de recursos

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
