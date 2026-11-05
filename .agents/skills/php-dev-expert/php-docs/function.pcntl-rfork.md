# Manipula recursos do processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-rfork.php

---

# pcntl\_rfork

(PHP 8 >= 8.1.0)

pcntl\_rfork — Manipula recursos do processo

### Descrição

function **pcntl\_rfork**([int](language.types.integer.md) `$flags`, [int](language.types.integer.md) `$signal` = 0): [int](language.types.integer.md)

Manipula recursos do processo.

### Parâmetros

`flags`
:   O parâmetro `flags` determina quais recursos do processo de chamada (pai)
    são compartilhados pelo novo processo (filho) ou inicializados com seus valores padrão.

    `flags` é o OR lógico de algum subconjunto de:

    - **`RFPROC`**: Se definido, um novo processo é criado;
      caso contrário, as alterações afetam o processo atual.
    - **`RFNOWAIT`**: Se definido, o processo filho será dissociado do processo pai.
      Ao sair, o processo filho não deixará um status para o processo pai coletar.
    - **`RFFDG`**: Se definido, a tabela de descritores de arquivo do invocador é copiada;
      caso contrário, os dois processos compartilham uma única tabela.
    - **`RFCFDG`**: Se definido, o novo processo inicia com uma tabela de descritores de arquivo limpa.
      É mutuamente exclusiva com **`RFFDG`**.
    - **`RFLINUXTHPN`**: Se definido, o kernel retornará SIGUSR1 em vez de SIGCHLD ao sair da thread filha.
      Isso serve para fazer notificação ao processo pai da saída do clone no Linux.
    - **`RFTSIGZMB`**: Se definido, o kernel enviará o sinal especificado
      pelo parâmetro `signal` para o processo pai ao sair do processo filho,
      em vez do SIGCHLD padrão. Especificar o número do sinal 0 desativa o envio de sinal
      ao sair do processo filho.
    - **`RFTHREAD`**: Se definido, o novo processo compartilha a tabela de descritores de arquivo
      com seu processo pai. Aplica-se apenas quando nem
      **`RFFDG`** nem **`RFCFDG`** estão definidos.

`signal`
:   O número do sinal a ser enviado ao processo pai quando o processo filho sair.
    Isso só é usado quando a flag **`RFTSIGZMB`** está definida.
    Especificar `0` desativa o envio de sinal ao sair do processo filho.

### Valor Retornado

Em caso de sucesso, o PID do processo filho é retornado na
thread de execução do processo pai, e um `0` é retornado na thread
de execução do processo filho.
Em caso de falha, `-1` será retornado no
contexto do processo pai, nenhum processo filho será criado e um erro de PHP será gerado.

### Examples

**Exemplo #1 Exemplo de **pcntl\_rfork()****

```
<?php

$pid = pcntl_rfork(RFNOWAIT|RFTSIGZMB, SIGUSR1);
if ($pid > 0) {
  // Este é o processo pai.
  var_dump($pid);
} else {
  // Este é o processo filho.
  var_dump($pid);
  sleep(2); // como o filho não espera, então vemos seu "pid"
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(77093)
int(0)
```

### Notas

> **Nota**:
>
> Esta função só está disponível em sistemas BSD.

### Veja também

- [pcntl\_fork()](function.pcntl-fork.md) - Bifurca o processo em execução no momento
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
