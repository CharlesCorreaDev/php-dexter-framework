# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/curl.installation.php

---

## Instalação

Para usar o suporte a cURL no PHP, é necessário compilar o PHP
com a opção **--with-curl[=DIR]** onde DIR é o
diretório que contém os diretórios lib e include.
No diretório include, deve haver uma pasta chamada curl
que deve conter os arquivos easy.h e
curl.h. Deve haver um arquivo chamado
libcurl.a localizado no diretório lib.

> **Nota**:
> **Nota aos usuários de Win32**  
>
> Para ativar este módulo em ambiente Windows,
> libeay32.dll e ssleay32.dll (ou a partir do OpenSSL 1.1
> libcrypto-\*.dll e libssl-\*.dll),
> precisam estar presentes na variável de ambiente PATH.
> O arquivo libssh2.dll também precisa estar em PATH.
>
> Não será necessário o arquivo libcurl.dll do site do cURL.

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
