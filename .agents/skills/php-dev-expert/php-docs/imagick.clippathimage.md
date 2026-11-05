# Recorta ao longo dos caminhos nomeados do perfil 8BIM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.clippathimage.php

---

# Imagick::clipPathImage

(PECL imagick 2, PECL imagick 3)

Imagick::clipPathImage — Recorta ao longo dos caminhos nomeados do perfil 8BIM

### Descrição

public function **Imagick::clipPathImage**([string](language.types.string.md) `$pathname`, [bool](language.types.boolean.md) `$inside`): [bool](language.types.boolean.md)

Recorta ao longo dos caminhos nomeados do perfil 8BIM, se
presente. As operações posteriores entram em vigor dentro do caminho.
Pode ser um número se precedido de #, para trabalhar em um
caminho numerado, por exemplo, "#1" para usar o primeiro caminho.

### Parâmetros

`pathname`
:   O nome do caminho

`inside`
:   Se **`true`** as operações posteriores têm efeito dentro do caminho de recorte.
    Caso contrário, as operações posteriores terão efeito fora do caminho de recorte.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

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
