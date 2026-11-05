# Prepara para uma varredura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-scan.php

---

# yaz\_scan

(PHP 4 >= 4.0.5, PECL yaz >= 0.9.0)

yaz\_scan — Prepara para uma varredura

### Descrição

function **yaz\_scan**(  
    [resource](language.types.resource.md) `$id`,  
    [string](language.types.string.md) `$type`,  
    [string](language.types.string.md) `$startterm`,  
    [array](language.types.array.md) `$flags` = ?  
): [void](language.types.void.md)

Esta função prepara para uma Solicitação de Varredura Z39.50 na conexão
especificada.

Para transferir a Solicitação de Varredura para o servidor e receber a
Resposta de Varredura, [yaz\_wait()](function.yaz-wait.md) deve ser chamada. Após
a conclusão de [yaz\_wait()](function.yaz-wait.md), chame
[yaz\_error()](function.yaz-error.md) e [yaz\_scan\_result()](function.yaz-scan-result.md) para
manipular a resposta.

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`type`
:   Atualmente, somente o tipo `rpn` é suportado.

`startterm`
:   Ponto inicial do termo para a varredura.

    A forma como o termo inicial é especificado é dada pelo parâmetro
    `type`.

    A sintaxe deste parâmetro é semelhante à da consulta RPN, conforme descrito em
    [yaz\_search()](function.yaz-search.md). Consiste em zero ou mais especificações do
    operador `@attr`, seguidas por
    exatamente um token.

`flags`
:   Este parâmetro opcional especifica informações adicionais para controlar
    o comportamento da solicitação de varredura. Três índices são lidos atualmente
    deste array de sinalizadores:
    `number` (número de termos solicitados),
    `position` (posição preferencial do termo) e
    `stepSize` (tamanho preferencial do passo).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Função PHP que verifica títulos**

```
<?php
function scan_titles($id, $startterm)
{
  yaz_scan($id, "rpn", "@attr 1=4 " . $startterm);
  yaz_wait();
  $errno = yaz_errno($id);
  if ($errno == 0) {
    $ar = yaz_scan_result($id, $options);
    echo 'Scan ok; ';
    foreach ($options as $key => $val) {
      echo "$key = $val &nbsp;";
    }
    echo '<br /><table>';
    while (list($key, list($k, $term, $tcount)) = each($ar)) {
      if (empty($k)) continue;
      echo "<tr><td>$term</td><td>$tcount</td></tr>";
    }
    echo '</table>';
  } else {
    echo "Falha na varredura. Erro: " . yaz_error($id) . "<br />";
  }
}
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
