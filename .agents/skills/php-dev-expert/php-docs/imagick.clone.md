# Faz uma cópia exata do objeto Imagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.clone.php

---

# Imagick::clone

(PECL imagick 2, PECL imagick 3)

Imagick::clone — Faz uma cópia exata do objeto Imagick

### Descrição

public function **Imagick::clone**(): [Imagick](class.imagick.md)

Faz uma cópia exata do objeto Imagick.

**Aviso**

Esta função tornou-se *PRETERIDA* a partir do imagick 3.1.0
em favor do uso da palavra-chave [clone](language.oop5.cloning.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma cópia do objeto Imagick é retornada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 3.1.0 | Este método tornou-se preterido em favor da palavra-chave [clone](language.oop5.cloning.md). |

### Examples

**Exemplo #1 Clonagem de objetos Imagick em diferentes versões do imagick**

```
<?php
// Clonando um objeto Imagick no imagick versões 2.x e 3.0:
$newImage = $image->clone();

// Clonando um objeto Imagick a partir da versão 3.1.0:
$newImage = clone $image;
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
