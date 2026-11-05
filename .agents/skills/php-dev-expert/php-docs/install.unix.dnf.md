# Instalando a partir de pacotes em distribuições GNU/Linux que usam DNF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.unix.dnf.php

---

## Instalando a partir de pacotes em distribuições GNU/Linux que usam DNF

Embora o PHP possa ser instalado a partir do código-fonte, ele também está disponível por meio
de pacotes em sistemas que usam DNF, como Red Hat Enterprise Linux, OpenSUSE, Fedora,
CentOS, Rocky Linux e Oracle Enterprise Linux.

**Aviso**

Compilações de terceiros são consideradas não oficiais e não são suportadas diretamente
pelo projeto PHP. Quaisquer problemas encontrados devem ser relatados ao
fornecedor dessas compilações não oficiais, a menos que possam ser reproduzidos usando as
compilações da [» área de download
oficial](https://www.php.net/downloads.php).

Os pacotes podem ser instalados usando o comando **dnf**.

### Instalando pacotes

Primeiro, observe que outros pacotes relacionados podem ser desejados, como
`php-pear` para [» PEAR](https://pear.php.net/),
ou `php-mysqlnd` para a [extensão
MySQL](book.mysqlnd.md).

Segundo, antes de instalar um pacote, é aconselhável garantir que a lista
de pacotes esteja atualizada. Normalmente, isso é feito executando o comando
**dnf update**.

**Exemplo #1 Exemplo de instalação DNF**

```
# dnf install php php-common php-fpm
```

O DNF instalará automaticamente a configuração do PHP para o servidor web,
mas pode ser necessário reinicializá-lo para que as alterações tenham efeito.
Por exemplo:

**Exemplo #2 Reiniciando o HTTPD Apache depois que o PHP estiver instalado**

```
# sudo systemctl restart httpd
```

### Melhor controle da configuração

Na última seção, o PHP foi instalado apenas com módulos principais. É
muito provável que módulos adicionais sejam desejados, como
[MySQL](book.mysql.md), [cURL](book.curl.md), [GD](book.image.md), etc.
Eles também podem ser instalados através do comando **dnf**.

**Exemplo #3 Métodos para listar pacotes PHP adicionais**

```
# dnf search php
```

A lista de pacotes conterá um grande número de pacotes que incluem
componentes básicos do PHP, como `php-cli`,
`php-fpm` e `php-devel`, bem como
muitas extensões PHP. Quando as extensões são instaladas, pacotes adicionais
serão instalados automaticamente conforme necessário para satisfazer as dependências
desses pacotes.

**Exemplo #4 Instalando PHP com MySQL e GD**

```
# dnf install php-mysqlnd php-gd
```

O DNF adicionará automaticamente as linhas apropriadas aos
diferentes arquivos php.ini relacionados como
/etc/php.ini,
/etc/php.d/\*.ini etc., e dependendo da
extensão adicionará entradas semelhantes a `extension=foo.so`.
No entanto, é necessário reiniciar o servidor web e o PHP-FPM antes que essas
alterações tenham efeito.

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
