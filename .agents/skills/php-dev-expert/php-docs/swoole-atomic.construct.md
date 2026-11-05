# Constrói um objeto atômico do Swoole

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-atomic.construct.php

---

# Swoole\Atomic::\_\_construct

(PECL swoole >= 1.9.0)

Swoole\Atomic::\_\_construct — Constrói um objeto atômico do Swoole

### Descrição

public function **Swoole\Atomic::\_\_construct**([int](language.types.integer.md) `$value` = ?)

O objeto atômico do Swoole é uma variável inteira que permite a qualquer processador testar e modificar atomicamente.
Ele é implementado com base em instruções atômicas da CPU. As variáveis atômicas do Swoole devem ser
definidas antes do swoole\_server->start.

Compare-and-swap (CAS) é uma instrução atômica usada em multithreading para alcançar sincronização.
Ela compara o conteúdo de uma localização de memória com um valor dado e, somente se forem iguais,
modifica o conteúdo dessa localização de memória para um novo valor dado.

### Parâmetros

`value`
:   O valor do objeto atômico.

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
