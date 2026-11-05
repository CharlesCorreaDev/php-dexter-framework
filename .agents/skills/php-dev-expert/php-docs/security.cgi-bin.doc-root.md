# Caso 3: configurando doc_root ou user_dir

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.cgi-bin.doc-root.php

---

## Caso 3: configurando doc\_root ou user\_dir

Para incluir conteúdo ativo, como script e executáveis, nos
diretórios de documentos do servidor é algumas vezes considerada uma
prática insegura. Se, por conta de um erro de configuração, os scripts
não são executados mas mostrados como documentos HTML normais, isso
pode resultar em vazamento de propriedade intelectual ou informação
de segurança, como senhas. Portanto, muitos administradores preferem
configurar outra estrutura de diretório para scripts que são acessíveis
apenas pelo CGI do PHP, e, portanto, sempre
interpretados e não enviados ao navegador.

Além disso, se o método para assegurar que as requisições não são
redirecionadas, como descrito na seção anterior, não estiver
disponível, é necessário configurar um
[doc\_root](ini.core.md#ini.doc-root) no script que
seja diferente do diretório raiz dos documentos do servidor web.

Você pode configurar a raiz de documentos dos scripts PHP pela
diretiva de configuração [doc\_root](ini.core.md#ini.doc-root) no
[arquivo de configuração](configuration.file.md), ou
você pode criar a variável de ambiente
PHP\_DOCUMENT\_ROOT. Se ela existir, a versão CGI
do PHP sempre construirá o nome de arquivo para ser aberto com esse
`doc_root` e a informação de caminho na
requisição, para assegurar que nenhum script é executado fora desse
diretório (exceto por `user_dir`
abaixo).

Outra opção utilizável é [user\_dir](ini.core.md#ini.user-dir). Quando `user_dir` for
indefinido, a única coisa controlando o arquivo aberto é
`doc_root`. Abrir uma URL como http://my.host/~user/doc.php não resulta
em abrir um arquivo no diretório home de users, mas um arquivo
chamado ~user/doc.php dentro de
`doc_root` (sim, um nome de diretório começando com til
[`~`]).

Se `user_dir` estiver, por exemplo, definido para public\_php, uma requisição como http://my.host/~user/doc.php abrirá
o arquivo chamado doc.php no diretório
chamado public\_php dentro do diretório
home do usuário. Se o home do usuário é /home/user, o arquivo executado é
/home/user/public\_php/doc.php.

A expansão de `user_dir` acontece independente da
configuração de `doc_root`, para que você possa controlar
a raiz de documentos e de acesso de diretório do usuário
separadamente.

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
