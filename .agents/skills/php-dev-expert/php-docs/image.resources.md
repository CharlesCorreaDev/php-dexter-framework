# Tipos de Recurso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/image.resources.php

---

## Tipos de Recurso

Esta extensão define os seguintes tipos de recursos:

**Lista de tipos de recursos na GD**

| Nome | Descrição | Notas |
| --- | --- | --- |
| `gd` | Recurso de imagem, usado por funções como [imagecreatefrompng()](function.imagecreatefrompng.md) | Antes do PHP 8.0.0 |
| `gd font` | Recurso de fonte criado internamente por [imageloadfont()](function.imageloadfont.md) | Antes do PHP 8.1.0 |

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
