# Define o limite de tempo em um fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-set-timeout.php

---

# stream\_set\_timeout

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

stream\_set\_timeout — Define o limite de tempo em um fluxo

### Descrição

function **stream\_set\_timeout**([resource](language.types.resource.md) `$stream`, [int](language.types.integer.md) `$seconds`, [int](language.types.integer.md) `$microseconds` = 0): [bool](language.types.boolean.md)

Define o valor limite de tempo no fluxo `stream`,
expresso pela soma de `seconds` e
`microseconds`.

Quando o fluxo expira, a chave 'timed\_out' do array retornado pela função
[stream\_get\_meta\_data()](function.stream-get-meta-data.md) é definida para **`true`**, embora
nenhum erro/aviso seja gerado.

### Parâmetros

`stream`
:   O fluxo alvo.

`seconds`
:   A parte em segundos do limite de tempo.

`microseconds`
:   A parte em microssegundos do limite de tempo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **stream\_set\_timeout()****

```
<?php
$fp = fsockopen("www.example.com", 80);
if (!$fp) {
    echo "Não foi possível abrir\n";
} else {

    fwrite($fp, "GET / HTTP/1.0\r\n\r\n");
    stream_set_timeout($fp, 2);
    $res = fread($fp, 2000);

    $info = stream_get_meta_data($fp);
    fclose($fp);

    if ($info['timed_out']) {
        echo 'Conexão expirou!';
    } else {
        echo $res;
    }

}
?>
```

### Notas

> **Nota**:
>
> Esta função não funciona com operações avançadas como
> [stream\_socket\_recvfrom()](function.stream-socket-recvfrom.md), em seu lugar use
> [stream\_select()](function.stream-select.md) com o parâmetro de limite de tempo.

Esta função anteriormente se chamava
**set\_socket\_timeout()** e depois
[socket\_set\_timeout()](function.socket-set-timeout.md) mas esses usos foram descontinuados.

### Veja também

- [fsockopen()](function.fsockopen.md) - Abre uma conexão socket de domínio Unix ou de Internet
- [fopen()](function.fopen.md) - Abre um arquivo ou URL

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
