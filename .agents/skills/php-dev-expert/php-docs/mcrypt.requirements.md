# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mcrypt.requirements.php

---

## Dependências

Essas funções utilizam [» mcrypt](https://mcrypt.sourceforge.net/).
Para utilizá-lo, faça o download do libmcrypt-x.x.tar.gz em [» https://mcrypt.sourceforge.net/](https://mcrypt.sourceforge.net/) e siga as instruções
de instalação incluídas.

A versão 2.5.6 ou superior do libmcrypt é necessária.

Usuários do Windows encontrarão a biblioteca nas versões binárias do PHP 5.2.
As versões binárias do PHP 5.3 utilizam a versão estática da biblioteca MCrypt, sem
a necessidade de DLLs.

Se você vinculou com libmcrypt 2.4.x ou superior, os seguintes algoritmos de bloco adicionais
são suportados: CAST, LOKI97, RIJNDAEL, SAFERPLUS,
SERPENT, e os seguintes cifradores de fluxo: ENIGMA (crypt), PANAMA, RC4 e
WAKE. Com libmcrypt 2.4.x ou superior, um outro modo de cifragem também está
disponível; nOFB.

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
