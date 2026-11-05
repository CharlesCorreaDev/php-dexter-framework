# Define os atributos do terminal e a taxa de transmissão para uma porta serial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dio-tcsetattr.php

---

# dio\_tcsetattr

(PHP 4 >= 4.3.0, PHP 5 < 5.1.0)

dio\_tcsetattr — 
Define os atributos do terminal e a taxa de transmissão para uma porta serial

### Descrição

function **dio\_tcsetattr**([resource](language.types.resource.md) `$fd`, [array](language.types.array.md) `$options`): [bool](language.types.boolean.md)

**dio\_tcsetattr()** define os atributos do terminal e a taxa de
transmissão do `fd` aberto.

### Parâmetros

`fd`
:   O descritor de arquivo retornado por [dio\_open()](function.dio-open.md).

`options`
:   As opções atualmente disponíveis são:

    - 'baud' - taxa de transmissão da porta - pode ser 38400, 19200, 9600, 4800, 2400, 1800,
      1200, 600, 300, 200, 150, 134, 110, 75 ou 50. O valor padrão é 9600.
    - 'bits' - bits de dados - pode ser 8, 7, 6 ou 5. O valor padrão é 8.
    - 'stop' - bits de parada - pode ser 1 ou 2. O valor padrão é 1.
    - 'parity' - pode ser 0, 1 ou 2. O valor padrão é 0.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Configurando a taxa de transmissão em uma porta serial**

```
<?php

$fd = dio_open('/dev/ttyS0', O_RDWR | O_NOCTTY | O_NONBLOCK);

dio_fcntl($fd, F_SETFL, O_SYNC);

dio_tcsetattr($fd, array(
    'baud' => 9600,
    'bits' => 8,
    'stop'  => 1,
    'parity' => 0
));

while (true) {
    $data = dio_read($fd, 256);
    if ($data !== null && $data !== '') {
        echo $data;
    }
}

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
