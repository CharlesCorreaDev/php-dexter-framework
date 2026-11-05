# Retorna o número de avisos de acessibilidade do Tidy encontrados para o documento especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.tidy-access-count.php

---

# tidy\_access\_count

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.5.2)

tidy\_access\_count — Retorna o número de avisos de acessibilidade do Tidy encontrados para o documento especificado

### Descrição

function **tidy\_access\_count**([tidy](class.tidy.md) `$tidy`): [int](language.types.integer.md)

**tidy\_access\_count()** retorna o número de
avisos de acessibilidade encontrados para o documento especificado.

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

### Valor Retornado

Retorna o número de avisos.

### Examples

**Exemplo #1 Exemplo de **tidy\_access\_count()****

```
<?php

$html ='<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html><head><title>Título</title></head>
<body>

<p><img src="img.png"></p>

</body></html>';

// selecione o nível de verificação de acessibilidade: 1, 2 ou 3
$config = array('accessibility-check' => 3);

$tidy = new tidy();
$tidy->parseString($html, $config);
$tidy->cleanRepair();

/* Nunca se esqueça de chamar este método! */
$tidy->diagnose();

echo tidy_access_count($tidy); //5

?>
```

### Notas

> **Nota**:
>
> Devido ao design da TidyLib, deve-se chamar
> [tidy\_diagnose()](tidy.diagnose.md) antes de
> **tidy\_access\_count()** ou ela sempre retornará
> `0`. Também é necessário habilitar a opção
> `accessibility-check`.

### Veja também

- [tidy\_error\_count()](function.tidy-error-count.md) - Retorna o número de erros de Tidy encontrados para o documento especificado
- [tidy\_warning\_count()](function.tidy-warning-count.md) - Retorna o número de avisos do Tidy encontrados para o documento especificado

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
