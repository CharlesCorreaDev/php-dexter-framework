# Registra um empacotador URL implementado como uma classe PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-wrapper-register.php

---

# stream\_wrapper\_register

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

stream\_wrapper\_register — Registra um empacotador URL implementado como uma classe PHP

### Descrição

function **stream\_wrapper\_register**([string](language.types.string.md) `$protocol`, [string](language.types.string.md) `$class`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

Permite a implementação de manipuladores de protocolo e fluxo do usuário para uso
com todas as outras funções de sistemas de arquivos (como [fopen()](function.fopen.md),
[fread()](function.fread.md) etc.).

### Parâmetros

`protocol`
:   O nome do empacotador a ser registrado.
    Nomes de protocolos válidos devem conter somente caracteres alfanuméricos, pontos (.), sinais de adição (+) ou hífens (-).

`class`
:   O nome da classe que implementa o protocolo definido no parâmetro `protocol`.

`flags`
:   Deve ser definida para **`STREAM_IS_URL`** se
    `protocol` for um protocolo URL. O padrão é 0, fluxo
    local.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

**stream\_wrapper\_register()** retornará **`false`** se
`protocol` já tiver um manipulador.

### Examples

**Exemplo #1 Como registrar um empacotador de fluxo**

```
<?php
$existed = in_array("var", stream_get_wrappers());
if ($existed) {
    stream_wrapper_unregister("var");
}
stream_wrapper_register("var", "VariableStream");
$myvar = "";

$fp = fopen("var://myvar", "r+");

fwrite($fp, "linha1\n");
fwrite($fp, "linha2\n");
fwrite($fp, "linha3\n");

rewind($fp);
while (!feof($fp)) {
    echo fgets($fp);
}
fclose($fp);
var_dump($myvar);

if ($existed) {
    stream_wrapper_restore("var");
}

?>
```

O exemplo acima produzirá:

```
linha1
linha2
linha3
string(18) "linha1
linha2
linha3
"
```

### Veja também

- A classe protótipo [streamWrapper](class.streamwrapper.md)
- [Exemplo de classe registrada como empacotador de fluxo](stream.streamwrapper.example-1.md)
- [stream\_wrapper\_unregister()](function.stream-wrapper-unregister.md) - Desregistra um empacotador URL
- [stream\_wrapper\_restore()](function.stream-wrapper-restore.md) - Restaura um empacotador interno anteriormente desregistrado
- [stream\_get\_wrappers()](function.stream-get-wrappers.md) - Obtém lista de fluxos registrados

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
