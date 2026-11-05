# Ponto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.dot.php

---

## Ponto

Fora de uma classe de caracteres, um ponto na expressão corresponde a
qualquer caractere na string, incluindo os não
imprimíveis, mas não o caractere de nova linha (por padrão). Se a
opção [PCRE\_DOTALL](reference.pcre.pattern.modifiers.md)
estiver definida, os pontos corresponderão aos caracteres de nova linha. A
manipulação do ponto é completamente independente da manipulação do
circunflexo e do cifrão, sendo que a única relação entre eles é que
ambos envolvem caracteres de nova linha. O ponto não tem nenhum significado especial
em uma classe de caracteres.

*\C* pode ser usada para corresponder a um único byte. Faz sentido
no *modo UTF-8* onde o ponto final corresponde ao
caractere inteiro que pode consistir de múltiplos bytes.

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
