# Realiza uma chamada à função fcntl da biblioteca C no descritor de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dio-fcntl.php

---

# dio\_fcntl

(PHP 4 >= 4.2.0, PHP 5 < 5.1.0)

dio\_fcntl — Realiza uma chamada à função fcntl da biblioteca C no descritor de arquivo

### Descrição

function **dio\_fcntl**([resource](language.types.resource.md) `$fd`, [int](language.types.integer.md) `$cmd`, [mixed](language.types.mixed.md) `$args` = ?): [mixed](language.types.mixed.md)

A função **dio\_fcntl()** realiza a
operação especificada por `cmd` no descritor de arquivo
`fd`. Alguns comandos exigem que
argumentos adicionais `args` sejam fornecidos.

### Parâmetros

`fd`
:   O descritor de arquivo retornado por [dio\_open()](function.dio-open.md).

`cmd`
:   Pode ser uma das seguintes operações:

    - **`F_SETLK`** - A trava é definida ou removida. Se a trava
      estiver sendo mantida por outra pessoa, **dio\_fcntl()** retorna
      -1.
    - **`F_SETLKW`** - semelhante a **`F_SETLK`**,
      mas caso a trava esteja sendo mantida por outra pessoa,
      **dio\_fcntl()** aguarda até que a trava seja liberada.
    - **`F_GETLK`** - **dio\_fcntl()**
      retorna um array associativo (conforme descrito abaixo) se alguém mais
      estiver impedindo a trava. Se não houver obstrução, a chave "type" será definida
      como **`F_UNLCK`**.
    - **`F_DUPFD`** - encontra o menor número de descritor
      de arquivo disponível maior ou igual a `args`
      e os retorna.
    - **`F_SETFL`** - Define as flags do descritor de arquivo para
      o valor especificado por `args`, que pode ser
      **`O_APPEND`**, **`O_NONBLOCK`** ou
      **`O_ASYNC`**. Para usar **`O_ASYNC`**,
      é necessário usar a extensão
      [PCNTL](ref.pcntl.md).

`args`
:   `args` é um array associativo, quando
    `cmd` é **`F_SETLK`** ou
    **`F_SETLKW`**, com as seguintes chaves:

    - `start` - posição onde a trava começa
    - `length` - tamanho da área travada. Zero significa até o final
      do arquivo
    - `whence` - Onde l\_start é relativo a: pode ser
      **`SEEK_SET`**,
      **`SEEK_END`** e **`SEEK_CUR`**
    - `type` - tipo de trava: pode ser
      **`F_RDLCK`** (trava de leitura),
      **`F_WRLCK`** (trava de escrita) ou
      **`F_UNLCK`** (destrava)

### Valor Retornado

Retorna o resultado da chamada C.

### Examples

**Exemplo #1 Definindo e removendo uma trava**

```
<?php

$fd = dio_open('/dev/ttyS0', O_RDWR);

if (dio_fcntl($fd, F_SETLK, Array("type"=>F_WRLCK)) == -1) {
   // o descritor de arquivo parece estar travado
   echo "A trava não pode ser removida. Está sendo usada por outra pessoa.";
} else {
   echo "Trava definida/removida com sucesso.";
}

dio_close($fd);
?>
```

### Notas

> **Nota**:
>
> Esta função não foi
> implementada em plataformas Windows.

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
