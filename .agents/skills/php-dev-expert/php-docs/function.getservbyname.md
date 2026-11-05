# Obtém o número da porta associado a um serviço e protocolo de Internet

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getservbyname.php

---

# getservbyname

(PHP 4, PHP 5, PHP 7, PHP 8)

getservbyname — Obtém o número da porta associado a um serviço e protocolo de Internet

### Descrição

function **getservbyname**([string](language.types.string.md) `$service`, [string](language.types.string.md) `$protocol`): [int](language.types.integer.md)|[false](language.types.singleton.md)

**getservbyname()** retorna a porta da Internet
que corresponde ao serviço informado no parâmetro `service`, para o
protocolo informado em `protocol`, especificado conforme
/etc/services.

### Parâmetros

`service`
:   O nome do serviço de Internet, como uma string.

`protocol`
:   `protocol` é o protocolo: `"tcp"`
    ou `"udp"` (em letras minúsculas).

### Valor Retornado

Retorna o número da porta ou **`false`** se o `service`
ou o `protocol` não for encontrado.

### Examples

**Exemplo #1 Exemplo de **getservbyname()****

```
<?php
$services = array('http', 'ftp', 'ssh', 'telnet', 'imap',
'smtp', 'nicname', 'gopher', 'finger', 'pop3', 'www');

foreach ($services as $service) {
    $port = getservbyname($service, 'tcp');
    echo $service . ": " . $port . "<br />\n";
}
?>
```

### Veja também

- [getservbyport()](function.getservbyport.md) - Obtém o serviço de Internet que corresponde à porta e ao protocolo
- [» https://www.iana.org/assignments/port-numbers](https://www.iana.org/assignments/port-numbers)
  para uma lista completa de números de portas.

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
