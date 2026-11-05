# Mostra os créditos para o PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.phpcredits.php

---

# phpcredits

(PHP 4, PHP 5, PHP 7, PHP 8)

phpcredits — Mostra os créditos para o PHP

### Descrição

function **phpcredits**([int](language.types.integer.md) `$flags` = **`CREDITS_ALL`**): [true](language.types.singleton.md)

Esta função imprime os créditos listando os desenvolvedores do PHP,
dos módulos, etc. Ela gera os códigos HTML apropriados para inserir
as informações em uma página.

### Parâmetros

`flags`
:   Para gerar uma página de créditos personalizada, pode-se usar o
    parâmetro `flags`.

    **Opções predefinidas de **phpcredits()****

    | nome | descrição |
    | --- | --- |
    | CREDITS\_ALL | Todos os créditos, equivalente a usar: **`CREDITS_DOCS`** + **`CREDITS_GENERAL`** + **`CREDITS_GROUP`** + **`CREDITS_MODULES`** + **`CREDITS_FULLPAGE`**. Gera uma página HTML completa e independente com as etiquetas HTML apropriadas. |
    | CREDITS\_DOCS | Os créditos para a equipe de documentação |
    | CREDITS\_FULLPAGE | Geralmente usada em combinação com outras opções. Indica que uma página HTML independente completa precisa ser mostrada incluindo as informações indicadas pelas outras opções. |
    | CREDITS\_GENERAL | Créditos gerais: Projeto e conceito de linguagem, autores do PHP e módulo SAPI. |
    | CREDITS\_GROUP | Uma lista dos desenvolvedores do núcleo |
    | CREDITS\_MODULES | Uma lista dos módulos de extensão para PHP e seus autores. |
    | CREDITS\_SAPI | Uma lista dos módulos de API de servidor para PHP e seus autores. |

### Valor Retornado

Sempre retorna **`true`**.

### Examples

**Exemplo #1 Mostra os créditos gerais**

```
<?php
phpcredits(CREDITS_GENERAL);
?>
```

**Exemplo #2 Mostra os desenvolvedores do núcleo e o grupo de documentação**

```
<?php
phpcredits(CREDITS_GROUP | CREDITS_DOCS | CREDITS_FULLPAGE);
?>
```

**Exemplo #3 Mostra todos os créditos**

```
<html>
 <head>
  <title>Minha página de créditos</title>
 </head>
 <body>
<?php
// algum código
phpcredits(CREDITS_ALL - CREDITS_FULLPAGE);
// mais código
?>
 </body>
</html>
```

### Notas

> **Nota**:
>
> **phpcredits()** mostra texto puro ao invés de HTML quando
> o modo CLI está sendo usado.

### Veja também

- [phpversion()](function.phpversion.md) - Obtém a versão atual do PHP
- [phpinfo()](function.phpinfo.md) - Mostra informações sobre a configuração do PHP

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
