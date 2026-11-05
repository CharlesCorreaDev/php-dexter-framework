# Converte uma string contendo um endereço com pontos do protocolo da Internet (IPv4) em um número inteiro longo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ip2long.php

---

# ip2long

(PHP 4, PHP 5, PHP 7, PHP 8)

ip2long — Converte uma string contendo um endereço com pontos do protocolo da Internet (IPv4) em um número inteiro longo

### Descrição

function **ip2long**([string](language.types.string.md) `$ip`): [int](language.types.integer.md)|[false](language.types.singleton.md)

A função **ip2long()** gera uma representação inteira longa
do endereço de rede da Internet IPv4 a partir de sua representação no
formato padrão da Internet (string com pontos).

**ip2long()** também funcionará com endereços IP
incompletos. Leia [» https://ps-2.kev009.com/wisclibrary/aix52/usr/share/man/info/en\_US/a\_doc\_lib/libs/commtrf2/inet\_addr.htm](https://ps-2.kev009.com/wisclibrary/aix52/usr/share/man/info/en_US/a_doc_lib/libs/commtrf2/inet_addr.htm)
para mais informações.

### Parâmetros

`ip`
:   Um endereço no formato padrão.

### Valor Retornado

Retorna o número inteiro longo ou **`false`** se `ip`
for inválido.

### Examples

**Exemplo #1 Exemplo de **ip2long()****

```
<?php
$ip = gethostbyname('www.example.com');
$out = "Os seguintes URLs são equivalentes:<br />\n";
$out .= 'http://www.example.com/, http://' . $ip . '/, e http://' . sprintf("%u", ip2long($ip)) . "/<br />\n";
echo $out;
?>
```

**Exemplo #2 Exibindo um endereço IP**

Este segundo exemplo mostra como exibir um endereço convertido com
a função [printf()](function.printf.md):

```
<?php
$ip   = gethostbyname('www.example.com');
$long = ip2long($ip);

if ($long == -1 || $long === FALSE) {
    echo 'IP inválido, tente novamente';
} else {
    echo $ip   . "\n";            // 192.0.34.166
    echo $long . "\n";            // 3221234342 (-1073732954 em sistemas de 32 bits, devido ao estouro de número inteiro)
    printf("%u\n", ip2long($ip)); // 3221234342
}
?>
```

### Notas

> **Nota**:
>
> Como o tipo [int](language.types.integer.md) do PHP é com sinal e muitos endereços IP
> resultarão em números inteiros negativos em arquiteturas de 32 bits, é necessário usar
> o formatador "%u" de [sprintf()](function.sprintf.md) ou
> [printf()](function.printf.md) para obter a representação em string do
> endereço IP sem sinal.

> **Nota**:
>
> **ip2long()** retornará `-1` para o IP
> `255.255.255.255` em sistemas de 32 bits devido ao estouro do valor inteiro.

### Veja também

- [long2ip()](function.long2ip.md) - Converte um endereço inteiro longo em uma string no formato padrão com pontos da Internet (IPv4)
- [sprintf()](function.sprintf.md) - Retona uma string formatada

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
