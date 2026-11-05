# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imap.requirements.php

---

## Dependências

Esta extensão requer que a biblioteca c-client seja instalada.
Obtenha a versão mais recente de [» https://github.com/uw-imap/imap](https://github.com/uw-imap/imap)
e compile-a.

É importante que você não copie os arquivos-fonte de IMAP diretamente para
o diretório de inclusão do sistema, pois podem ocorrer conflitos. Em vez disso, crie
um novo diretório dentro do diretório de inclusão do sistema, como
/usr/local/imap-2000b/ (o local e o nome
dependem da configuração e versão do IMAP) e, dentro desse novo
diretório, crie diretórios adicionais chamados lib/
e include/. A partir do diretório c-client
da sua árvore fonte do IMAP, copie todos os arquivos \*.h
para include/ e todos os arquivos
\*.c para lib/.
Além disso, quando o IMAP foi compilado, um arquivo chamado
c-client.a foi criado. Ele deve ser colocado também no diretório
lib/, mas renomeado como
libc-client.a.

> **Nota**:
>
> Para criar a biblioteca c-client com suporte a SSL e/ou Kerberos, leia
> a documentação fornecida com o pacote.

> **Nota**:
>
> No Mandrake Linux, a biblioteca IMAP (libc-client.a)
> é compilada sem suporte a Kerberos. Uma versão separada com SSL
> (client-PHP4.a) é instalada. A biblioteca deve
> ser recompilada para adicionar suporte a Kerberos.

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
