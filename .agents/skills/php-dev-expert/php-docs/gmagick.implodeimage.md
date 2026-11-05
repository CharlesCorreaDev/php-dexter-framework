# Cria uma nova imagem implodida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.implodeimage.php

---

# Gmagick::implodeimage

(PECL gmagick >= Unknown)

Gmagick::implodeimage — Cria uma nova imagem implodida

### Descrição

public function **Gmagick::implodeimage**([float](language.types.float.md) `$radius`): [mixed](language.types.mixed.md)

Cria uma nova imagem que é uma cópia de uma existente com os pixels da imagem "implodidos" pela porcentagem especificada.

### Parâmetros

`radius`
:   O raio da implosão.

### Valor Retornado

Retorna o objeto [Gmagick](class.gmagick.md) implodido.

### Erros/Exceções

Lança uma exceção
**GmagickException** em caso de erro.

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
