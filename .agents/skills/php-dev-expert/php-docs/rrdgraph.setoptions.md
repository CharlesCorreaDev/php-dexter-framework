# Define as opções para exportação do gráfico rrd

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rrdgraph.setoptions.php

---

# RRDGraph::setOptions

(PECL rrd >= 0.9.0)

RRDGraph::setOptions — Define as opções para exportação do gráfico rrd

### Descrição

public function **RRDGraph::setOptions**([array](language.types.array.md) `$options`): [void](language.types.void.md)

### Parâmetros

`options`
:   Lista de opções para a geração de imagens a partir do arquivo de banco de dados RRD. Pode ser
    uma lista de strings ou uma lista de strings com chaves para melhor legibilidade. Leia
    as páginas de manual de rrd graph para obter uma lista das opções disponíveis.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **RRDGraph::setOptions()****

```
<?php
$graphObj->setOptions(array(
    "--start" => "920804400",
    "--end" => 920808000,
    "--vertical-label" => "m/s",
    "DEF:myspeed=$rrdFile:speed:AVERAGE",
    "CDEF:realspeed=myspeed,1000,*",
    "LINE2:realspeed#FF0000"
));
?>
```

**Exemplo #2 Configurando várias opções de cores**

```
<?php
$graphObj->setOptions(array(
    "--start" => "920804400",
    "--end" => 920808000,
    "--vertical-label" => "m/s",
    "--color=BACK#00000000",
    "--color=GRID#00000000",
    "--color=MGRID#00000000",
    "DEF:myspeed=$rrdFile:speed:AVERAGE",
    "CDEF:realspeed=myspeed,1000,*",
    "LINE2:realspeed#FF0000"
));
?>
```

Não use a sintaxe de chave-valor para a mesma opção rrd. Parece mais legível, mas
não funciona.

```
<?php
$graphObj->setOptions(array(
    "--color" => "BACK#00000000",
    "--color" => "GRID#00000000",
    "--color" => "MGRID#00000000"
));
?>
```

Na natureza do PHP é o mesmo que

```
<?php
$graphObj->setOptions(array(
    "--color" => "MGRID#00000000"
));
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
