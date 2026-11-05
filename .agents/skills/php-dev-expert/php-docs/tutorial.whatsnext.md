# O que vem a seguir?

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tutorial.whatsnext.php

---

# O que vem a seguir?

Com este novo conhecimento fica fácil entender a maior parte do manual.

Em particular, você pode explorar os seguintes recursos:

- Ler e gravar arquivos com as [funções de sistema de arquivos](book.filesystem.md)
- [Lidar com envio de arquivos](features.file-upload.md)
- Obter páginas e arquivos remotos com o [Curl](book.curl.md)
- Armazenar e analisar dados em um banco de dados com o [PDO](book.pdo.md)
  ([SQLite](ref.pdo-sqlite.md) pode ser usado sem executar um servidor de banco de dados)
- Manter dados persistentes através das [Sessões](book.session.md)

Existem várias bibliotecas e [» frameworks](https://packagist.org/search/?tags=framework)
para cada ocasião no [» repositório Packagist](https://packagist.org), todas instaláveis pelo
[gerenciador de pacotes Composer](install.composer.intro.md).

Para ajuda e conselhos da comunidade, consulte a [» página de Ajuda](https://www.php.net/support.php).

Para uma variedade de podcasts, apresentações e outros vídeos, confira a
[» comunidade PeerTube](https://phpc.tv/).

Outros recursos da comunidade que podem te ajudar incluem "listas incríveis" (diretórios selecionados de links) e
"roteiros para desenvolvedores" (listas de tópicos relacionados).

Quando você estiver sem saber por onde começar, tente dividir seu projeto ou problema em partes menores,
o que permitirá que você veja mais facilmente o que já sabe fazer e o que precisa aprender. A lista pode ser tão
extensa/detalhada quanto você precisar. Por exemplo, a criação de um blog pode ser dividida nas seguintes partes:

- Listando e visualizando páginas

  - Lendo registros (páginas) de um banco de dados
- Criando páginas

  - Lidando com submissão de formulários
  - Gravando registros (páginas) em um banco de dados
- Login do administrador

  - Lendo registros (usuários) de um banco de dados
  - Lidando com senhas
  - Persistência de dados (login do usuário) entre requisições/páginas (sessões)

Se não houver nada específico que você queira construir, pode tentar procurar exercícios de programação como katas,
desafios e "golfe de código". Mesmo que não sejam especificamente voltados para PHP, a maioria deve ser possível de concluir e provavelmente
desafiará seu conhecimento e raciocínio.

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
