# Serializa variáveis em um pacote WDDX

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wddx-serialize-vars.php

---

# wddx\_serialize\_vars

(PHP 4, PHP 5, PHP 7)

wddx\_serialize\_vars — Serializa variáveis em um pacote WDDX

**Aviso**

Esta função foi
*REMOVIDA* a partir do PHP 7.4.0.

### Descrição

function **wddx\_serialize\_vars**([mixed](language.types.mixed.md) `$var_name`, [mixed](language.types.mixed.md) `...$var_names`): [string](language.types.string.md)

Cria um pacote WDDX com um estrutura que contém a representação
serializada das variáveis passadas.

### Parâmetros

Essa função recebe um número variável de argumentos.

`var_name`
:   Pode ser ou uma string com o nome de uma variável ou um array contendo strings com o
    nome de variáveis ou outro array, recursivamente.

`var_names`

### Valor Retornado

Retorna o pacote WDDX ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de uso de **wddx\_serialize\_vars()****

```
<?php
$a = 1;
$b = 5.5;
$c = array("blue", "orange", "violet");
$d = "colors";

$clvars = array("c", "d");
echo wddx_serialize_vars("a", "b", $clvars);
?>
```

O exemplo acima produzirá:

```
<wddxPacket version='1.0'><header/><data><struct><var name='a'><number>1</number></var>
<var name='b'><number>5.5</number></var><var name='c'><array length='3'>
<string>blue</string><string>orange</string><string>violet</string></array></var>
<var name='d'><string>colors</string></var></struct></data></wddxPacket>
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
