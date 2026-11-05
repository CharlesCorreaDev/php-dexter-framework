# Configura o analisador CCL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-ccl-conf.php

---

# yaz\_ccl\_conf

(PHP 4 >= 4.0.5, PECL yaz >= 0.9.0)

yaz\_ccl\_conf — Configura o analisador CCL

### Descrição

function **yaz\_ccl\_conf**([resource](language.types.resource.md) `$id`, [array](language.types.array.md) `$config`): [void](language.types.void.md)

Esta função configura o analisador de consulta CCL para um servidor com
definições de pontos de acesso (qualificadores CCL) e seu mapeamento para RPN.

Para mapear uma consulta CCL específica para RPN, chame a função
[yaz\_ccl\_parse()](function.yaz-ccl-parse.md).

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`config`
:   Um array de configuração. Cada chave do array é o nome de um campo CCL
    e o valor correspondente contém uma string que especifica um
    mapeamento para RPN.

    O mapeamento é uma sequência de pares tipo-do-atributo e valor-do-atributo.
    Tipo-do-atributo e valor-do-atributo são separados por um sinal de igual
    (`=`). Cada par é separado por um espaço em branco.

    Informações adicionais podem ser encontradas na página [» CCL](https://software.indexdata.com/yaz/doc/tools.html#CCL).

### Valor Retornado

Nenhum valor é retornado.

### Examples

No exemplo abaixo, o analisador CCL está configurado para suportar três campos CCL:
`ti`, `au` e
`isbn`. Cada campo é mapeado para seu equivalente BIB-1.
Assume-se que a variável `$id` é o ID da conexão.

**Exemplo #1 Configuração CCL**

```
<?php
$fields = array(
  "ti" => "1=4",
  "au"   => "1=1",
  "isbn" => "1=7"
);
yaz_ccl_conf($id, $fields);
?>
```

### Veja também

- [yaz\_ccl\_parse()](function.yaz-ccl-parse.md) - Invoca o analisador CCL

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
