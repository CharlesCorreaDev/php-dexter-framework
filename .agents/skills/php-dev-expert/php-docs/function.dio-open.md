# Abre um arquivo (criando-o, se necessário) em um nível mais baixo do que
   as funções de entrada/saída da biblioteca C permitem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dio-open.php

---

# dio\_open

(PHP 4 >= 4.2.0, PHP 5 < 5.1.0)

dio\_open — 
Abre um arquivo (criando-o, se necessário) em um nível mais baixo do que
as funções de entrada/saída da biblioteca C permitem

### Descrição

function **dio\_open**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags`, [int](language.types.integer.md) `$mode` = 0): [resource](language.types.resource.md)

**dio\_open()** abre um arquivo e retorna um novo descritor de
arquivo para ele.

### Parâmetros

`filename`
:   O caminho do arquivo a ser aberto.

`flags`
:   O parâmetro `flags` é um valor resultante da operação OR bit a bit
    compreendendo flags da seguinte lista. Esse valor
    *deve* incluir um dos
    **`O_RDONLY`**, **`O_WRONLY`**
    ou **`O_RDWR`**. Adicionalmente, pode incluir
    qualquer combinação de outras flags desta lista.

    - **`O_RDONLY`** - abre o arquivo para acesso somente leitura.
    - **`O_WRONLY`** - abre o arquivo para escrita.
    - **`O_RDWR`** - abre o arquivo para leitura e
      escrita.
    - **`O_CREAT`** - cria o arquivo, se ele
      ainda não existe.
    - **`O_EXCL`** - se ambos **`O_CREAT`**
      e **`O_EXCL`** estiverem definidos e o arquivo já
      existir, **dio\_open()** falhará.
    - **`O_TRUNC`** - se o arquivo existir e for aberto
      para acesso de escrita, o arquivo será truncado para o comprimento zero.
    - **`O_APPEND`** - operações de escrita gravam dados no
      final do arquivo.
    - **`O_NONBLOCK`** - define o modo não bloqueante.
    - **`O_NOCTTY`** - impede que o sistema operacional
      atribua o arquivo aberto como o terminal de controle do processo
      ao abrir um arquivo de dispositivo TTY.

`mode`
:   Se `flags` contiver
    **`O_CREAT`**, `mode` definirá
    as permissões do arquivo (permissões
    de criação). `mode` é necessário para
    a operação correta quando **`O_CREAT`** é
    especificado em `flags` e é ignorado
    caso contrário.

    As permissões reais atribuídas ao arquivo criado serão
    afetadas pela configuração do *umask* do processo como
    de costume.

### Valor Retornado

Um descritor de arquivo ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Abrindo um descritor de arquivo**

```
<?php

$fd = dio_open('/dev/ttyS0', O_RDWR | O_NOCTTY | O_NONBLOCK);

dio_close($fd);
?>
```

### Veja também

- [dio\_close()](function.dio-close.md) - Fecha o descritor de arquivo fornecido por fd

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
