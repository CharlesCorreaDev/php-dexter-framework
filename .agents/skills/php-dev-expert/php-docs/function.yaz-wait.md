# Aguarda a conclusão das solicitações Z39.50

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-wait.php

---

# yaz\_wait

(PHP 4 >= 4.0.1, PECL yaz >= 0.9.0)

yaz\_wait — Aguarda a conclusão das solicitações Z39.50

### Descrição

function **yaz\_wait**([array](language.types.array.md) `&$options` = ?): [mixed](language.types.mixed.md)

Esta função realiza atividades em rede (bloqueadas) para solicitações pendentes
que foram preparadas pelas funções
[yaz\_connect()](function.yaz-connect.md), [yaz\_search()](function.yaz-search.md),
[yaz\_present()](function.yaz-present.md), [yaz\_scan()](function.yaz-scan.md) e
[yaz\_itemorder()](function.yaz-itemorder.md).

**yaz\_wait()** retorna quando todos os servidores
concluíram todas as solicitações ou abortaram (em caso de erros).

### Parâmetros

`options`
:   O array associativo de opções:

    `timeout`
    :   Define o tempo limite em segundos. Se um servidor não responder dentro do
        tempo limite, ele será considerado inativo e **yaz\_wait()**
        retornará. O valor padrão para o tempo limite é 15 segundos.

    `event`
    :   Um booleano.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
No modo de evento, retorna um recurso ou **`false`** em caso de falha.

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
