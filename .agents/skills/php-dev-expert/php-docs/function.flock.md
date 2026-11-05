# Travamento consultivo portável de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.flock.php

---

# flock

(PHP 4, PHP 5, PHP 7, PHP 8)

flock — Travamento consultivo portável de arquivo

### Descrição

function **flock**([resource](language.types.resource.md) `$stream`, [int](language.types.integer.md) `$operation`, [int](language.types.integer.md) `&$would_block` = **`null`**): [bool](language.types.boolean.md)

**flock()** permite realizar um modelo simples de leitura/escrita
que pode ser usado virtualmente em qualquer plataforma (incluindo na maioria dos derivados Unix
e até mesmo no Windows).

A trava é liberada também por [fclose()](function.fclose.md),
ou quando o fluxo `stream` sofrer coleta de lixo.

O PHP suporta uma maneira portável de travamento de arquivos completos de forma consultiva
(que significa que todos programas de acesso devem usar a mesma forma de travamento
ou ela não irá funcionar). Por padrão, esta função irá bloquear até que
a trava solicitada seja adquirida; isto pode ser controlado com a opção **`LOCK_NB`** documentada abaixo.

### Parâmetros

`stream`
:   Um [resource](language.types.resource.md) de ponteiro do sistema de arquivos
    que normalmente é criado usando [fopen()](function.fopen.md).

`operation`
:   `operation` deve ser uma das opções a seguir:

    - **`LOCK_SH`** para obter uma trava compartilhada (leitura).
    - **`LOCK_EX`** para obter uma trava exclusiva (escrita).
    - **`LOCK_UN`** para liberar uma trava (compartilhada ou exclusiva).

    É possível também adicionar **`LOCK_NB`** como uma máscara de bits a uma
    das operações acima, caso seja necessário que **flock()** não
    bloqueie durante a tentativa de travamento.

`would_block`
:   O terceiro argumento opcional é definido como 1 se a trava for bloquear
    (condição de erro número EWOULDBLOCK).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **flock()****

```
<?php

$fp = fopen("/tmp/lock.txt", "r+");

if (flock($fp, LOCK_EX)) {  // adquire uma trava exclusiva
    ftruncate($fp, 0);      // trunca o arquivo
    rewind($fp);
    fwrite($fp, "Escreve alguma coisa aqui\n");
    fflush($fp);            // descarrega a saída antes de liberar a trava
    flock($fp, LOCK_UN);    // libera a trava
} else {
    echo "Não foi possível obter a trava!";
}

fclose($fp);

?>
```

**Exemplo #2 **flock()** usando a opção **`LOCK_NB`****

```
<?php
$fp = fopen('/tmp/lock.txt', 'r+');

/* Ativa a opção LOCK_NB em uma operação LOCK_EX */
if(!flock($fp, LOCK_EX | LOCK_NB)) {
    echo 'Não foi possível obter a trava';
    exit(-1);
}

/* ... */

fclose($fp);
?>
```

### Notas

> **Nota**:
>
> **flock()** usa travamento mandatório no lugar de travamento
> consultivo no Windows. Travamento mandatório também é suportado no Linux e
> em sistemas operacionais baseados em System V através do mecanismo usual suportado pela
> chamada de sistema fcntl(): isto é, se o arquivo em questão tem a o bit de permissão
> setgid ligado e o bit de execução do grupo desligado. No Linux, o sistema de
> arquivos também precisará ser montado com a opção mand para que isto funcione.

> **Nota**:
>
> Pelo motivo de **flock()** requerer um ponteiro de arquivo, pode ser
> necessário usar um arquivo de trava especial para proteger o acesso a um aqruivo que deseja-se
> truncar abrindo-o em modo de escrita (com um argumento "w" ou "w+" para
> [fopen()](function.fopen.md)).

> **Nota**:
>
> Pode somente ser usado em ponteiros de arquivos retornados por [fopen()](function.fopen.md)
> para arquivos locais, ou ponteiros de arquivos que apontam para fluxo no espaço do usuário que
> implementam o método [streamWrapper::stream\_lock()](streamwrapper.stream-lock.md).

**Aviso**

Atribuir outro valor ao argumento `stream` em
código subsequente irá liberar a trava.

**Aviso**

Em alguns sistemas operacionais, **flock()** é implementado no nível
de processos. Ao usar uma API de servidor multi-tarefa pode ser que
se consiga confiar em **flock()** para proteger arquivos
contra outros scripts PHP sendo executados em tarefas parelelas da mesma
instância do servidor!

**flock()** não é suportado em sistemas de arquivos antiquados como
`FAT` e seus derivativos e portanto sempre
retornará **`false`** nestes ambientes.

> **Nota**:
>
> No Windows, se o processo de travamento abrir o arquivo uma segunda vez, ele não
> poderá acessar o arquivo através deste segundo manipulador até que destrave o arquivo.

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
