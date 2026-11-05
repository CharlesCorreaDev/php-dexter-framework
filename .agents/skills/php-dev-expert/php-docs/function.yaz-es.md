# Prepara-se para uma solicitação de Serviço Estendido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-es.php

---

# yaz\_es

(PECL yaz >= 0.9.0)

yaz\_es — 
Prepara-se para uma solicitação de Serviço Estendido

### Descrição

function **yaz\_es**(
[resource](language.types.resource.md) `$id`
, 
[string](language.types.string.md) `$type`
, 
[array](language.types.array.md) `$args`
): [void](language.types.void.md)

Esta função prepara para uma Solicitação de Serviço Estendido.
Serviços Estendidos são uma família de vários recursos do Z39.50, como
atualização de registros, pedido de itens, administração de banco de dados, etc.

> **Nota**:
>
> Muitos servidores Z39.50 não suportam Serviços Estendidos.

A função **yaz\_es()** cria um pacote de solicitação de Serviço Estendido
e o coloca em uma fila de operações.
Use [yaz\_wait()](function.yaz-wait.md) para enviar a(s) solicitação(ões) ao servidor.
Após a conclusão de [yaz\_wait()](function.yaz-wait.md), o resultado
da operação de Serviço Estendido deve ser esperado com
uma chamada a [yaz\_es\_result()](function.yaz-es-result.md).

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`type`
:   Uma string que representa o tipo do Serviço Estendido:
    `itemorder` (Ordem de Item),
    `create` (Criação de Banco de Dados),
    `drop` (Remoção de Banco de Dados),
    `commit` (Operação de Confirmação),
    `update` (Atualização de Registro),
    `xmlupdate` (Atualização de XML).
    Cada tipo é especificado na seção a seguir.

`args`
:   Um array com opções de Serviços Estendidos, além de
    opções específicas do pacote. As opções são idênticas
    às oferecidas na API C do ZOOM C. Consulte
    os [» Serviços Estendidos](https://software.indexdata.com/yaz/doc/zoom.html) do ZOOM.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Atualização de Registro**

```
<?php
$con = yaz_connect("myhost/database");
$args = array (
    "record" => "<gils><title>some title</title></gils>",
    "syntax" => "xml",
    "action" => "specialUpdate"
);
yaz_es($con, "update", $args);
yaz_wait();
$result = yaz_es_result($id);
?>
```

### Veja também

- [yaz\_es\_result()](function.yaz-es-result.md) - Inspeciona o resultado dos serviços estendidos

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
