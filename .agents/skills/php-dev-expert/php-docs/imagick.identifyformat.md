# Formata uma string com detalhes da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.identifyformat.php

---

# Imagick::identifyFormat

(PECL imagick 3 >= 3.3.0)

Imagick::identifyFormat — Formata uma string com detalhes da imagem

### Descrição

public function **Imagick::identifyFormat**([string](language.types.string.md) `$embedText`): [string](language.types.string.md)|[false](language.types.singleton.md)

Substitui quaisquer caracteres de formatação incorporados pela propriedade de imagem apropriada e retorna o texto interpretado. Consulte http://www.imagemagick.org/script/escape.php para sequências de escape.

### Parâmetros

`embedText`
:   Uma string contendo sequências de formatação, por ex. "Caixa de acabamento: %@ número de cores exclusivas: %k".

### Valor Retornado

Retorna o formato ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Imagick::identifyFormat()****

```
<?php
    $output = "Saída de 'Caixa de acabamento: %@ número de cores exclusivas: %k' é: <br/>";
    $imagick = new \Imagick(realpath("./images/artifact/mask.png"));
    $output .= $imagick->identifyFormat("Caixa de acabamento: %@ número de cores exclusivas: %k");

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
