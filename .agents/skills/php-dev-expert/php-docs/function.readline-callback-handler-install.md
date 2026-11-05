# Inicializa a interface de chamada de retorno e o terminal de readline, mostra o prompt e retorna imediatamente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.readline-callback-handler-install.php

---

# readline\_callback\_handler\_install

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

readline\_callback\_handler\_install — Inicializa a interface de chamada de retorno e o terminal de readline, mostra o prompt e retorna imediatamente

### Descrição

function **readline\_callback\_handler\_install**([string](language.types.string.md) `$prompt`, [callable](language.types.callable.md) `$callback`): [true](language.types.singleton.md)

Configura uma interface de chamada de retorno readline, mostra o
`prompt` e retorna imediatamente.
Chamar esta função duas vezes sem remover a interface de
chamada anterior irá automaticamente e convenientemente sobrescrever a
interface antiga.

O recurso de chamada de retorno é útil quando combinada com
[stream\_select()](function.stream-select.md) já que permite as it allows intercalação de E/S e
de entrada de usuário, diferentemente da função [readline()](function.readline.md).

### Parâmetros

`prompt`
:   A mensagem do prompt.

`callback`
:   A função definida em `callback` leva um parâmetro; a entrada
    do usuário retornada.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Examples

**Exemplo #1 Exemplo de Interface de Chamada de Retorno de Readline**

```
<?php
function rl_callback($ret)
{
    global $c, $prompting;

    echo "Você digitou: $ret\n";
    $c++;

    if ($c > 10) {
        $prompting = false;
        readline_callback_handler_remove();
    } else {
        readline_callback_handler_install("[$c] Digite algo: ", 'rl_callback');
    }
}

$c = 1;
$prompting = true;

readline_callback_handler_install("[$c] Digite algo: ", 'rl_callback');

while ($prompting) {
    $w = NULL;
    $e = NULL;
    $n = stream_select($r = array(STDIN), $w, $e, null);
    if ($n && in_array(STDIN, $r)) {
        // lê um caractere, irá chamar a função de retorno quando uma nova linha for lida
        readline_callback_read_char();
    }
}

echo "Prompt desabilitado. Tudo pronto.\n";
?>
```

### Veja também

- [readline\_callback\_handler\_remove()](function.readline-callback-handler-remove.md) - Remove um manipulador de chamada de retorno previamente instalado e restaura a configuração do terminal
- [readline\_callback\_read\_char()](function.readline-callback-read-char.md) - Lê um caractere e informa a interface de chamada de retorno de readline quando uma linha é recebida
- [stream\_select()](function.stream-select.md) - Executa o equivalente à chamada de sistema select() nos arrays de fluxos
  informados com um limite de tempo especificado por segundos e microssegundos

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
