# Bifurca o processo em execução no momento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-fork.php

---

# pcntl\_fork

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

pcntl\_fork — Bifurca o processo em execução no momento

### Descrição

function **pcntl\_fork**(): [int](language.types.integer.md)

A função **pcntl\_fork()** cria um processo
filho que difere do processo pai apenas em seu PID e
PPID. Consulte a página de manual fork(2) do seu sistema para obter detalhes específicos sobre
como o fork funciona no seu sistema.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Em caso de sucesso, o PID do processo filho é retornado na thread de execução do processo pai
e um 0 é retornado na thread de execução do processo filho.
Em caso de falha, -1 será retornado no contexto do processo pai,
nenhum processo filho será criado e um erro PHP
será gerado.

### Examples

**Exemplo #1 Exemplo de **pcntl\_fork()****

```
<?php

$pid = pcntl_fork();
if ($pid == -1) {
     die('não foi possível bifurcar');
} else if ($pid) {
     // processo pai
     pcntl_wait($status); // protege contra filhos zumbis
} else {
     // processo filho
}

?>
```

### Veja também

- [pcntl\_rfork()](function.pcntl-rfork.md) - Manipula recursos do processo
- [pcntl\_waitpid()](function.pcntl-waitpid.md) - Aguarda ou retorna o status de um filho bifurcado
- [pcntl\_signal()](function.pcntl-signal.md) - Instala um manipulador de sinal
- [cli\_set\_process\_title()](function.cli-set-process-title.md) - Define o título do processo

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
