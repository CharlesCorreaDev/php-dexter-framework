# Adiciona um servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-add-server.php

---

# radius\_add\_server

(PECL radius >= 1.1.0)

radius\_add\_server — Adiciona um servidor

### Descrição

function **radius\_add\_server**(  
    [resource](language.types.resource.md) `$radius_handle`,  
    [string](language.types.string.md) `$hostname`,  
    [int](language.types.integer.md) `$port`,  
    [string](language.types.string.md) `$secret`,  
    [int](language.types.integer.md) `$timeout`,  
    [int](language.types.integer.md) `$max_tries`  
): [bool](language.types.boolean.md)

**radius\_add\_server()** pode ser chamada várias vezes e
pode ser usada em conjunto com [radius\_config()](function.radius-config.md). No máximo 10
servidores podem ser especificados. Quando vários servidores são fornecidos, eles são testados
em rodízio até que uma resposta válida seja recebida ou até que
o limite de `max_tries` de cada servidor seja atingido.

### Parâmetros

`radius_handle`

`hostname`
:   O parâmetro `hostname` especifica o host do servidor,
    como um nome de domínio totalmente qualificado ou como um endereço IP de quatro números com pontos
    em formato de texto.

`port`
:   O parâmetro `port` especifica a porta UDP a ser contatada
    no servidor. Se a porta for fornecida como 0, a biblioteca procura o serviço
    `radius/udp` ou
    `radacct/udp` no
    banco de dados de serviços de rede e usa a porta encontrada lá. Se nenhuma entrada
    for encontrada, a biblioteca usa as portas Radius padrão, 1812 para
    autenticação e 1813 para contabilidade.

`secret`
:   O segredo compartilhado para o host do servidor é passado para o parâmetro
    `secret`. O protocolo Radius ignora
    todos, exceto os 128 bytes iniciais, do segredo compartilhado.

`timeout`
:   O tempo limite para recebimento de respostas do servidor é passado para o parâmetro
    `timeout`, em unidades de segundos.

`max_tries`
:   O número máximo de solicitações repetidas a serem feitas antes de desistir é
    passado para o `max_tries`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **radius\_add\_server()****

```
<?php
if (!radius_add_server($res, 'radius.example.com', 1812, 'testing123', 3, 3)) {
    echo 'RadiusError:' . radius_strerror($res). "\n<br>";
    exit;
}
?>
```

### Veja também

- [radius\_config()](function.radius-config.md) - Faz com que a biblioteca leia o arquivo de configuração fornecido

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
