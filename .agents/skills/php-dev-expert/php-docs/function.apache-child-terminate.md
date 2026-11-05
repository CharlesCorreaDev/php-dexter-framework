# Finaliza o processo Apache depois da requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apache-child-terminate.php

---

# apache\_child\_terminate

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

apache\_child\_terminate — Finaliza o processo Apache depois da requisição

### Descrição

function **apache\_child\_terminate**(): [void](language.types.void.md)

**apache\_child\_terminate()** registrará o processo Apache atual
para finalização após a
execução do código PHP terminar. Isto pode ser utilizado para
terminar um processo depois que um script que tem um alto consumo de memória for
rodado e quando essa memória normalmente só é liberada internamente, mas não
é devolviva para o sistema operacional.

Funciona no Apache e em servidores FastCGI.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Notas

> **Nota**:
>
> Esta função não foi
> implementada em plataformas Windows.

### Veja também

- [exit()](function.exit.md) - Termina o script atual com um código ou uma mensagem de status

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
