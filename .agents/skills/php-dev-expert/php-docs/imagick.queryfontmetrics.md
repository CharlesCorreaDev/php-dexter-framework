# Retorna um array representando as métricas da fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.queryfontmetrics.php

---

# Imagick::queryFontMetrics

(PECL imagick 2, PECL imagick 3)

Imagick::queryFontMetrics — Retorna um array representando as métricas da fonte

### Descrição

public function **Imagick::queryFontMetrics**([ImagickDraw](class.imagickdraw.md) `$properties`, [string](language.types.string.md) `$text`, [bool](language.types.boolean.md) `$multiline` = ?): [array](language.types.array.md)

Retorna um array multi-dimensional representando as métricas da fonte.

### Parâmetros

`properties`
:   Objeto ImagickDraw contendo propriedades de fonte

`text`
:   O texto

`multiline`
:   Parâmetro multilinha. Se deixado em branco, será detectado automaticamente.

### Valor Retornado

Retorna um array multi-dimensional representando as métricas da fonte.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Usando **Imagick::queryFontMetrics()****

Consulta as métricas do texto e despeja os resultados na tela.

```
<?php
/* Cria um novo objeto Imagick */
$im = new Imagick();

/* Cria um novo objeto ImagickDraw */
$draw = new ImagickDraw();

/* Define a fonte */
$draw->setFont('/caminho/para/fonte.ttf');

/* Despeja a métrica da fonte, detecta multilinhas automaticamente */
var_dump($im->queryFontMetrics($draw, "Olá, Mundo!"));
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
