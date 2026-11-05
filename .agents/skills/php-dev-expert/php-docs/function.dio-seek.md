# Move para a posição pos no descritor de arquivo (fd) a partir de whence

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dio-seek.php

---

# dio\_seek

(PHP 4 >= 4.2.0, PHP 5 < 5.1.0)

dio\_seek — Move para a posição pos no descritor de arquivo (fd) a partir de whence

### Descrição

function **dio\_seek**([resource](language.types.resource.md) `$fd`, [int](language.types.integer.md) `$pos`, [int](language.types.integer.md) `$whence` = SEEK\_SET): [int](language.types.integer.md)

A função **dio\_seek()** é usada para alterar a
posição do arquivo associada ao descritor de arquivo fornecido.

### Parâmetros

`fd`
:   O descritor de arquivo retornado por [dio\_open()](function.dio-open.md).

`pos`
:   A nova posição.

`whence`
:   Especifica como a posição `pos` deve ser
    interpretada:

    - **`SEEK_SET`** (padrão) - especifica que
      `pos` é especificado a partir do início do
      arquivo.
    - **`SEEK_CUR`** - Especifica que
      `pos` é um contador de caracteres a partir da posição atual
      do arquivo. Esse contador pode ser positivo ou negativo.
    - **`SEEK_END`** - Especifica que
      `pos` é um contador de caracteres a partir do final do
      arquivo. Um contador negativo especifica uma posição dentro da extensão
      atual do arquivo; um contador positivo especifica uma posição além do
      final atual. Se for definida a posição além do final atual e
      dados realmente forem gravados, o arquivo será preenchido com zeros até aquela
      posição.

### Valor Retornado

### Examples

**Exemplo #1 Posicionamento em um arquivo**

```
<?php

$fd = dio_open('/dev/ttyS0', O_RDWR);

dio_seek($fd, 10, SEEK_SET);
// a posição agora está em 10 caracteres a partir do início do arquivo

dio_seek($fd, -2, SEEK_CUR);
// a posição agora está em 8 caracteres a partir do início do arquivo

dio_seek($fd, -5, SEEK_END);
// a posição agora está em 5 caracteres do final do arquivo

dio_seek($fd, 10, SEEK_END);
// a posição agora está em 10 caracteres além do final do arquivo.
// Os 10 caracteres entre o final do arquivo e a posição atual
// são preenchidos com zeros.

dio_close($fd);
?>
```

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
