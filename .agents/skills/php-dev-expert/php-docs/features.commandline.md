# Usando PHP a partir da linha de comando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.commandline.php

---

# Usando PHP a partir da linha de comando

## Índice

- [Diferenças em relação a outros SAPIs](features.commandline.differences.md)
- [Opções](features.commandline.options.md)
- [Uso](features.commandline.usage.md)
- [Fluxos de E/S](features.commandline.io-streams.md)
- [Shell interativo](features.commandline.interactive.md)
- [Servidor web embutido](features.commandline.webserver.md)
- [Configurações INI](features.commandline.ini.md)

## Introdução

O principal foco do CLI SAPI
é o desenvolvimento de aplicações shell com PHP. Existem
algumas diferenças entre CLI SAPI e outras
SAPIs que são explicadas neste capítulo. Vale a pena ressaltar
que CLI e CGI são diferentes
SAPIs embora compartilhem boa parte dos mesmos comportamentos.

O CLI SAPI é ativado por padrão usando
**--enable-cli**, mas pode ser desativado usando
a opção **--disable-cli** quando se executa o comando
**./configure** durante o processo de compilação do PHP.

O nome, a localização e a existência dos arquivos binários do CLI/CGI
podem ser diferentes dependendo de como o PHP está instalado no seu sistema.
Por padrão, quando executado o **make**, ambos CGI
e CLI são compilados e colocados em sapi/cgi/php-cgi e
sapi/cli/php, respectivamente, no seu diretório fonte do PHP.
Você vai notar que ambos são nomeados php. O que acontece durante o
**make install** depende da sua linha de configuração. Se o módulo
SAPI é escolhido durante a configuração, como apxs, ou a opção
**--disable-cgi** é utilizada, o CLI é
copiado para {PREFIX}/bin/php durante
**make install**, caso contrário o CGI é colocado
lá. Assim, por exemplo, se o **--with-apxs** está
na sua linha de configuração, em seguida, o CLI é copiado para {PREFIX}/bin/php
 durante o **make install**. Se você quiser substituir a instalação do
binário CGI, use **make install-cli** depois de
**make install**. Alternativamente, você pode especificar
**--disable-cgi** na sua linha de
configuração.

> **Nota**:
>
> Porque ambos **--enable-cli** e
> **--enable-cgi** são ativadas por padrão,
> ter simplesmente um **--enable-cli** na sua
> linha de configuração não significa necessariamente que o CLI será copiado para
> {PREFIX}/bin/php durante o **make install**.

O binário CLI é distribuído na pasta principal como 
php.exe no Windows. A versão CGI é distribuída
como php-cgi.exe.
Além disso, um  php-win.exe
é distribuído se o PHP é configurado com **--enable-cli-win32**.
Isso faz o mesmo que a versão CLI, exceto que ele não exibe nenhum output e também não
disponibiliza nenhum console.

> **Nota**:
> **Qual SAPI eu tenho?**  
>
> A partir da linha de comando, digitar **php -v** lhe dirá se o
> php é CGI ou CLI. Veja também a
> função [php\_sapi\_name()](function.php-sapi-name.md) e a constante
> **`PHP_SAPI`**.

> **Nota**:
>
> A página do `man` Unix está disponível digitando **man
> php** no ambiente shell.

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
