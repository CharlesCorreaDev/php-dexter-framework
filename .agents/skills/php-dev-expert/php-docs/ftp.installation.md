# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ftp.installation.php

---

## Instalação

Para utilizar as funções FTP com o PHP, deve-se
adicionar a opção **--enable-ftp** na
instalação do PHP.

No Autotools, o suporte FTP SSL é habilitado implicitamente ao construir junto
com a extensão `openssl` usando a
opção de configuração **--with-openssl**. Ao
construir sem a extensão `openssl`, a
opção de configuração **--with-ftp-ssl** do Autotools
pode ser usada para ativar explicitamente o suporte FTP SSL.

No Windows, esta extensão é sempre compilada como uma extensão compartilhada
e por isso deve ser habilitada no php.ini.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | A opção de configuração do Autotools **--with-openssl-dir** foi removida em favor da nova **--with-ftp-ssl** que ativa explicitamente o suporte FTP SSL ao compilar sem a extensão `openssl`. |

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
