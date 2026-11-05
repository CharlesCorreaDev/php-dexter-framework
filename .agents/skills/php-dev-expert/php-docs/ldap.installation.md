# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ldap.installation.php

---

## Instalação

Suporte a LDAP no PHP não é habilitado por padrão. É necessário
usar a opção de configuração **--with-ldap[=DIR]**
na compilação do PHP para habilitar o suporte a LDAP.
DIR é o diretório base de instalação do LDAP. Para habilitar suporte SASL,
certifique-se que **--with-ldap-sasl[=DIR]** seja
usado, e que o arquivo sasl.h exista no sistema.

> **Nota**:
> **Nota aos usuários Win32**  
>
> Para que esta extensão funcione, existem arquivos
> DLL que devem estar disponíveis no
> PATH do sistema Windows. Para saber como fazer isso, veja a
> FAQ intitulada "[Como eu adiciono o meu diretório PHP ao PATH
> do Windows](faq.installation.md#faq.installation.addtopath)". Embora copiar arquivos DLL
> da pasta do PHP para o diretório system do Windows também funcione
> (porque o diretório system está, por padrão, no PATH do sistema),
> isso não é recomendado.
> *Esta extensão requer que os seguintes arquivos estejam no
> PATH:*
> libeay32.dll e
> ssleay32.dll, ou, a partir do OpenSSL 1.1
> libcrypto-\*.dll e libssl-\*.dll

Para usar as bibliotecas LDAP da Oracle, um [ambiente Oracle](oci8.requirements.md) adequado deve ser definido.

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
