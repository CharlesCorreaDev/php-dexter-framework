# Limita o máximo tempo de execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.set-time-limit.php

---

# set\_time\_limit

(PHP 4, PHP 5, PHP 7, PHP 8)

set\_time\_limit — Limita o máximo tempo de execução

### Descrição

function **set\_time\_limit**([int](language.types.integer.md) `$seconds`): [bool](language.types.boolean.md)

Define um tempo em segundos em que um script poderá ser executado. Se este tempo for alcançado,
o script retorna um erro fatal. O limite padrão é de 30 segundos ou, se
exitente, o valor de `max_execution_time` definido no
php.ini.

Quando chamada, **set\_time\_limit()** reinicia o contador do
limite a partir do zero. Em outras palavras, se o limite for o padrão de 30
segundos, e já houver 25 segundos decorridos desde o início do script, quando uma chamada
chamada tipo `set_time_limit(20)` é feita, o script será executado por um
total de 45 segundos antes de expirar.

### Parâmetros

`seconds`
:   O tempo máximo de execução, em segundos. Se definido para zero, nenhum limite
    será imposto.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Notas

> **Nota**:
>
> A função **set\_time\_limit()** e a diretiva de
> configuração [max\_execution\_time](info.configuration.md#ini.max-execution-time)
> afetam apenas o tempo de execução do próprio script. Qualquer tempo gasto em
> atividades que acontecem fora da execução do script, como chamadas
> de sistema usando [system()](function.system.md), operações de fluxo, consultas
> de banco de dados, etc., não é incluído na determinação do tempo máximo de
> execução do script.
> Isso não acontece no Windows, onde o tempo medido é real.

### Veja também

- [max\_execution\_time](info.configuration.md#ini.max-execution-time)
- [max\_input\_time](info.configuration.md#ini.max-input-time)

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
