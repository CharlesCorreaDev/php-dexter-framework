# Remover bordas da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.trimimage.php

---

# Gmagick::trimimage

(PECL gmagick >= Unknown)

Gmagick::trimimage — Remover bordas da imagem

### Descrição

public function **Gmagick::trimimage**([float](language.types.float.md) `$fuzz`): [Gmagick](class.gmagick.md)

Remova as bordas que são a cor de fundo da imagem.

### Parâmetros

`fuzz`
:   Por padrão, o alvo deve corresponder exatamente a uma determinada cor de pixel. No entanto, em muitos casos, duas cores podem diferir um pouco. O membro "fuzz" da imagem define quanta tolerância é aceitável para considerar duas cores iguais. Este parâmetro representa a variação na faixa Quantum.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md).

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
